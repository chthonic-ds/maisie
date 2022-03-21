<?php
/**
 * Manages pattern for a left-aligned header with content to the right.
 *
 * @package Chthonic/Maisie
 * @since 0.1.0
 */

/**
 * Configures pattern.
 */
return array(
	'title'      => __( 'Layout (Heading, image & text', 'maisie' ),
	'categories' => array( 'maisie-layouts' ),
	'content'    => '<!-- wp:heading {"fontSize":"mega"} -->
					<h2 class="has-mega-font-size" id="a-simple-block-theme-for-modern-wordpress">' . esc_html__( 'A simple block theme for modern WordPress', 'maisie' ) . '</h2>
					<!-- /wp:heading -->

					<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
					<figure class="wp-block-image size-full"><img src="' . esc_url( get_template_directory_uri() ) . '/dist/images/maisie-landscape.webp" alt=""/></figure>
					<!-- /wp:image -->

					<!-- wp:columns {"className":"wp-block-columns--1:2 has-no-row-gap"} -->
					<div class="wp-block-columns wp-block-columns--1:2 has-no-row-gap">
						<!-- wp:column -->
						<div class="wp-block-column">
							<!-- wp:heading {"fontSize":"medium"} -->
							<h2 class="has-medium-font-size" id="who-is-maisie"><strong>' . esc_html__( 'Who is Maisie', 'maisie' ) . '</strong></h2>
							<!-- /wp:heading -->
						</div>
						<!-- /wp:column -->
					
						<!-- wp:column -->
						<div class="wp-block-column">
							<!-- wp:paragraph -->
							<p>' . esc_html__( 'She was a little cat who appeared in the garden one day, helping out during some hard times after the loss of another little furry friend. Maisie visited daily for two years, then disappeared again—joy delivered, job done.', 'maisie' ) . '</p>
							<!-- /wp:paragraph -->
						</div>
						<!-- /wp:column -->
					</div>
					<!-- /wp:columns -->',
);
