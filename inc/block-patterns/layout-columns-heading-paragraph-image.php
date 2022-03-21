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
	'title'      => __( 'Layout (Text & image)', 'maisie' ),
	'categories' => array( 'maisie-layouts' ),
	'content'    => '<!-- wp:columns {"className":"wp-block-columns--1:2 has-small-row-gap"} -->
					<div class="wp-block-columns wp-block-columns--1:2 has-small-row-gap">
						<!-- wp:column -->
						<div class="wp-block-column">
							<!-- wp:heading {"style":{"typography":{"fontWeight":"600"}},"fontSize":"x-large"} -->
							<h2 class="has-x-large-font-size" id="long-paws" style="font-weight:600">' . esc_html__( 'Long paws', 'maisie' ) . '</h2>
							<!-- /wp:heading -->
						</div>
						<!-- /wp:column -->
					
						<!-- wp:column -->
						<div class="wp-block-column">
							<!-- wp:paragraph {"fontSize":"small"} -->
							<p class="has-small-font-size">' . esc_html__( 'Maisie was a little cat who appeared in the garden one day, helping out during some hard times after the loss of another little furry friend. She visited daily for two years, then disappeared again—joy delivered, job done.', 'maisie' ) . '</p>
							<!-- /wp:paragraph -->
						
							<!-- wp:image {"id":5147,"sizeSlug":"large","linkDestination":"none"} -->
							<figure class="wp-block-image size-large">
								<img src="' . esc_url( get_template_directory_uri() ) . '/dist/images/maisie-landscape.webp" alt="" class="wp-image-5147"/>
							</figure>
							<!-- /wp:image -->
						</div>
						<!-- /wp:column -->
					</div>
					<!-- /wp:columns -->',
);
