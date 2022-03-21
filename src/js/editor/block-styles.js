/**
 * WordPress dependencies
 */
const { __ } = wp.i18n;
const { registerBlockStyle } = wp.blocks;

/**
 * Block: Columns
 */
// Provide default style to allow switching away from full-width style.
registerBlockStyle( 'core/columns', {
	name: 'columns-has-widow-default-width',
	label: __( 'Default' ),
	isDefault: true,
});

// Force column content to be height.
registerBlockStyle( 'core/columns', {
	name: 'columns-has-full-height-cards',
	label: __( 'Force column content to be same height' ),
	isDefault: false,
});

// Force widow column to full width.
registerBlockStyle( 'core/columns', {
	name: 'columns-has-widow-full-width',
	label: __( 'Force widows to 100% width (odd-numbered columns only)' ),
	isDefault: false,
});

/**
 * Block: Group
 */
registerBlockStyle( 'core/group', {
	name: 'has-padding-default',
	label: __( 'Default padding' ),
	isDefault: true,
});

registerBlockStyle( 'core/group', {
	name: 'has-padding-y-medium',
	label: __( 'Medium top & bottom padding' ),
	isDefault: false,
});

registerBlockStyle( 'core/group', {
	name: 'has-padding-y-large',
	label: __( 'Large top & bottom padding' ),
	isDefault: false,
});

registerBlockStyle( 'core/group', {
	name: 'has-children-flow-across-2-columns',
	label: __( 'Flow child paragraphs across 2 columns' ),
	isDefault: false,
});

/**
 * Block: List
 */
// Show list with no bullets.
registerBlockStyle( 'core/list', {
	name: 'list-no-bullets',
	label: __( 'No bullets' ),
	isDefault: false,
});

/**
 * Block: Spacer
 */
registerBlockStyle( 'core/spacer', {
	name: 'spacer-small',
	label: __( 'Small' ),
	isDefault: false,
});

registerBlockStyle( 'core/spacer', {
	name: 'spacer-medium',
	label: __( 'Medium' ),
	isDefault: false,
});

registerBlockStyle( 'core/spacer', {
	name: 'spacer-large',
	label: __( 'Large' ),
	isDefault: false,
});

// Unregister defaults.
wp.domReady( () => {
	wp.blocks.unregisterBlockStyle( 'core/image', 'default' );
	wp.blocks.unregisterBlockStyle( 'core/image', 'rounded' );
	wp.blocks.unregisterBlockStyle( 'core/quote', 'large' ); // This style will be deprecated from WordPress 6.0.
	wp.blocks.unregisterBlockStyle( 'core/separator', 'dots' );
	wp.blocks.unregisterBlockStyle( 'core/site-logo', 'rounded' );
	wp.blocks.unregisterBlockStyle( 'core/social-links', 'logos-only' );
	wp.blocks.unregisterBlockStyle( 'core/social-links', 'pill-shape' );
});