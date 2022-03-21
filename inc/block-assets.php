<?php
/**
 * Manages script configuration for blocks.
 *
 * @package Chthonic/Maisie
 * @since 0.1.0
 */

/**
 * Opts-in to inlining block stylesheet when block exists in document.
 *
 * @todo Check if this filter is opt-in by default yet/can be removed?
 * @link https://github.com/WordPress/gutenberg/pull/35593#issuecomment-942267837
 *
 * @since 0.1.0
 * @return void
 */
add_filter( 'should_load_separate_core_block_assets', '__return_true' );

/**
 * Manages per-block stylesheets.
 *
 * @since 0.1.0
 * @return void
 */
function maisie_load_separate_core_block_custom_assets() {

	// List of block stylesheet ID slugs.
	$blocks = array(
		'button',
		'categories',
		'column',
		'columns',
		'cover',
		'embed',
		//'gallery',
		'group',
		'image',
		'heading',
		'latest-posts',
		'list',
		'media-text',
		'navigation',
		'navigation-link',
		'navigation-submenu',
		'post-author',
		'pullquote',
		'post-navigation-link',
		'post-template',
		'query-pagination',
		'quote',
		'search',
		'separator',
		'social-links',
		'spacer',
	);

	foreach ( $blocks as $block ) :
		wp_deregister_style( 'wp-block-' . $block );
		wp_register_style( 'wp-block-' . $block, get_template_directory_uri() . '/' . maisie_get_hashed_name( 'blocks/' . $block . '.css' ), array(), wp_get_theme()->get( 'Version' ) );
	endforeach;

	// @todo. Add these slugs to above function when custom block styles have been written.
	wp_deregister_style( 'wp-block-buttons' );
	wp_deregister_style( 'wp-block-paragraph' );
	wp_deregister_style( 'wp-block-post-featured-image' ); // @todo. Custom styles required? Review core stylesheet.
	wp_deregister_style( 'wp-block-post-title' );
	wp_deregister_style( 'wp-block-site-logo' );
}

add_action( 'wp_enqueue_scripts', 'maisie_load_separate_core_block_custom_assets' );

/**
 * Disable block library stylesheet.
 * 
 * @since 0.1.0
 * @return void
 */
function maisie_block_assets() {
	wp_dequeue_style( 'wp-block-library' );
}

add_action( 'wp_enqueue_scripts', 'maisie_block_assets' );

/**
 * Manage block editor default functionality.
 *
 * @since 0.1.0
 * @return void
 */
function maisie_manage_block_editor_defaults() {
	/**
	 * Disable default block patterns.
	 *
	 * @since 0.1.0
	 */
	remove_theme_support( 'core-block-patterns' );
}

add_action( 'after_setup_theme', 'maisie_manage_block_editor_defaults' );

/**
 * Disable the block directory.
 *
 * @since 0.1.0
 * @return void
 */
function maisie_disable_block_directory() {
	remove_action( 'enqueue_block_editor_assets', 'wp_enqueue_editor_block_directory_assets' );
	remove_action( 'enqueue_block_editor_assets', 'gutenberg_enqueue_block_editor_assets_block_directory' );
}

add_action( 'plugins_loaded', 'maisie_disable_block_directory' );
