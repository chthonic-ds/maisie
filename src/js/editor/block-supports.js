const { addFilter } = wp.hooks;
const { assign, merge } = lodash;

/**
 * Disable alignment support for the Media & Text block.
 * 
 * Applying full/wide alignment breaks the current grid-based layout approach. 
 * Block can receive alignment as a child of the Group block with block style `Match 
 * children to container alignment` active.
 *
 * @todo. Revisit to consider alternate layout solution.
 */
function filterDisableMediaTextAlignment(settings, name) {
	if (name === 'core/media-text' ) {
		return assign({}, settings, {
			supports: merge(settings.supports, {
				align: false,
			}),
		});
	}

	return settings;
}

addFilter(
	'blocks.registerBlockType',
	'maisie/mediatext/alignment',
	filterDisableMediaTextAlignment,
);

/**
 * Disable horizontal alignment (centre/left/right) for the Embed and Gallery blocks.
 */
 function filterManageBlockAlignment(settings, name) {
	if (name === 'core/embed' || name === 'core/gallery' || name === 'core/image' || name === 'core/cover') {
		return assign({}, settings, {
			supports: merge(settings.supports, {
				align: ['center', 'full', 'wide'],
			}),
		});
	}

	return settings;
}

addFilter(
	'blocks.registerBlockType',
	'maisie/block/alignment',
	filterManageBlockAlignment,
);

/**
 * Adds a `has-background` class to the block wrapper.
 *
 * This helps avoid duplicating selectors to target the Cover block's 
 * class `has-background-dim`.
 *
 * @url https://developer.wordpress.org/block-editor/reference-guides/filters/block-filters/#blocks-getblockdefaultclassname
 * @param {*} className
 * @param {*} blockName
 * @returns
 */
// Our filter function
function addCoverClassHasBackground( className, blockName ) {
    return blockName === 'core/cover' ? className + ' has-background' : className;
}
 
// Adding the filter
wp.hooks.addFilter(
    'blocks.getBlockDefaultClassName',
    'maisie/cover-class-has-background',
    addCoverClassHasBackground
);