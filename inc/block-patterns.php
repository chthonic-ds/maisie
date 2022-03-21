<?php
/**
 * Manages theme block patterns.
 *
 * @package Chthonic/Maisie
 * @since 0.1.0
 */


/**
 * Registers theme block patterns.
 *
 * @since 0.1.0
 * @return void
 */
function maisie_register_block_patterns() {
	if ( function_exists( 'register_block_pattern_category' ) ) :
		register_block_pattern_category(
			'maisie-headers',
			array( 'label' => _x( 'Headers', 'Block pattern category', 'maisie' ) )
		);

		register_block_pattern_category(
			'maisie-footers',
			array( 'label' => _x( 'Footers', 'Block pattern category', 'maisie' ) )
		);

		register_block_pattern_category(
			'maisie-query',
			array( 'label' => _x( 'Collections', 'Block pattern category', 'maisie' ) )
		);

		register_block_pattern_category(
			'maisie-banners',
			array( 'label' => _x( 'Banners', 'Block pattern category', 'maisie' ) )
		);

		register_block_pattern_category(
			'maisie-cards',
			array( 'label' => _x( 'Cards', 'Block pattern category', 'maisie' ) )
		);

		register_block_pattern_category(
			'maisie-post',
			array( 'label' => _x( 'Posts', 'Block pattern category', 'maisie' ) )
		);

		register_block_pattern_category(
			'maisie-layouts',
			array( 'label' => _x( 'Layouts', 'Block pattern category', 'maisie' ) )
		);
	endif;

	if ( function_exists( 'register_block_pattern' ) ) :
		$patterns = array(
			// Hyphen prefix denotes pattern is hidden from inserter panel.
			'-footer-attribution',
			'-post-comments',
			'-post-meta',
			'-post-pagination',
			'header-logo-nav-light',
			'header-logo-nav-dark',
			'header-logo-title-nav-light',
			'header-logo-title-nav-dark',
			'header-logo-nav-social-light',
			'header-logo-nav-social-dark',
			'footer-light',
			'footer-dark',
			'footer-site-meta-social-links-light',
			'footer-site-meta-social-links-dark',
			'footer-columns-separator-meta-light',
			'footer-columns-separator-meta-dark',
			'banner-group-media-text-post-title-post-meta',
			'banner-group-media-text-post-title-paragraph-post-meta',
			'banner-cover-post-meta-heading-post-author',
			'banner-group-heading-paragraph-buttons',
			'card-padded',
			'card-unpadded',
			'card-no-media',
			'card-no-media-has-shadow',
			'card-padded-title-first',
			'layout-title-image-columns-1-2',
			'layout-columns-heading-paragraph-image',
			'layout-left-header-right-content',
			'layout-heading-columns-text-image',
			'layout-text-columns',
			'layout-group-grid-heading-paragraph',
			'layout-media-text-heading-separator-paragraph-social-links',
			'layout-group-heading-query-loop-cards-padded-linked',
			'layout-columns-cards-padded-linked',
			'layout-grid-cards-padded-linked',
			'layout-grid-x2',
			'layout-grid-x3',
			'collection-grid-cards-image-title-excerpt-read-more',
			'collection-grid-cards-image-title-excerpt-date',
			'collection-grid-cards-image-title-date',
			'collection-thumbnail-grid-compact',
			'collection-thumbnail-list',
			'collection-thumbnail-list-compact',
		);

		foreach ( $patterns as $pattern ) :
			register_block_pattern(
				'maisie/' . $pattern,
				require __DIR__ . '/block-patterns/' . $pattern . '.php'
			);
		endforeach;
	endif;
}

add_action( 'init', 'maisie_register_block_patterns' );
