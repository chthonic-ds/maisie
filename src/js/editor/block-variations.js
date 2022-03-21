/* wp.domReady no longer working? https://github.com/WordPress/gutenberg/issues/27607 */
window.addEventListener('load', function () {
	/**
	 * Block: Query.
	 */
	// Handle core patterns.
	const unregisterQueryVariations = [
		'image-date-title',
	];

	unregisterQueryVariations.forEach(
		(variationTitle) => wp.blocks.unregisterBlockVariation(
			'core/query',
			variationTitle
		)
	);

	/**
	 * Block: Columns.
	 */
	// Handle core patterns.
	const unregisterColumnsVariations = [
		'two-columns-two-thirds-one-third',
		'two-columns-one-third-two-thirds',
		'three-columns-wider-center',
	];

	unregisterColumnsVariations.forEach(
		(variationTitle) => wp.blocks.unregisterBlockVariation(
			'core/columns',
			variationTitle
		)
	);

	/* Set up vars. */
	const el = wp.element.createElement;
	const SVG = wp.primitives.SVG;

	/* Set up icons. */
	// 2:1
	const iconTwoColumnsTwoThirdsOneThird = el(
	  	SVG,
	  	{ width: 48, height: 48, viewBox: '0 0 48 48' },
	  	el('path', {
			fillRule: 'evenodd',
			clipRule: 'evenodd',
			d:
			'M39 12C40.1046 12 41 12.8954 41 14V34C41 35.1046 40.1046 36 39 36H9C7.89543 36 7 35.1046 7 34V14C7 12.8954 7.89543 12 9 12H39ZM39 34V14H30V34H39ZM28 34H9V14H28V34Z',
	  	})
	);

	// 1:2
	const iconTwoColumnsOneThirdTwoThirds = el(
		SVG,
		{ width: 48, height: 48, viewBox: '0 0 48 48' },
		el('path', {
		  fillRule: 'evenodd',
		  clipRule: 'evenodd',
		  d:
		  'M39 12C40.1046 12 41 12.8954 41 14V34C41 35.1046 40.1046 36 39 36H9C7.89543 36 7 35.1046 7 34V14C7 12.8954 7.89543 12 9 12H39ZM39 34V14H20V34H39ZM18 34H9V14H18V34Z',
		})
  	);

	// 1:1
	const iconThreeColumnsWiderCenter = el(
		SVG,
		{ width: 48, height: 48, viewBox: '0 0 48 48' },
		el('path', {
		  fillRule: 'evenodd',
		  clipRule: 'evenodd',
		  d:
		  'M41 14a2 2 0 0 0-2-2H9a2 2 0 0 0-2 2v20a2 2 0 0 0 2 2h30a2 2 0 0 0 2-2V14zM31 34H17V14h14v20zm2 0V14h6v20h-6zm-18 0H9V14h6v20z',
		})
  	);

	/* Register custom patterns using core names (changing theme will not create orphan or unsupported variations). */
	// 2:1 columns.
	wp.blocks.registerBlockVariation( 'core/columns', {
		description: 'Two columns; one-third, two-thirds split',
		icon: iconTwoColumnsTwoThirdsOneThird,
		innerBlocks: [
			[ 'core/column' ],
			[ 'core/column' ],
		],
		name: 'two-columns-two-thirds-one-third',
		attributes: {
			className: 'wp-block-columns--2:1'
		},
		scope: [ 'block' ],
		title: '70 / 30',
	});

	// 1:2 columns.
	wp.blocks.registerBlockVariation( 'core/columns', {
		description: 'Two columns; two-thirds, one-third split',
		icon: iconTwoColumnsOneThirdTwoThirds,
		innerBlocks: [
			[ 'core/column' ],
			[ 'core/column' ],
		],
		name: 'two-columns-one-third-two-thirds',
		attributes: {
			className: 'wp-block-columns--1:2'
		},
		scope: [ 'block' ],
		title: '30 / 70',
	});

	// 1:2:1 columns.
	wp.blocks.registerBlockVariation( 'core/columns', {
		description: 'Three columns; wide center column',
		icon: iconThreeColumnsWiderCenter,
		innerBlocks: [
			[ 'core/column' ],
			[ 'core/column' ],
			[ 'core/column' ],
		],
		name: 'three-columns-wider-center',
		attributes: {
			className: 'wp-block-columns--1:2:1'
		},
		scope: [ 'block' ],
		title: '25 / 50 / 25',
	});
});