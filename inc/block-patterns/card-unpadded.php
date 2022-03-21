<?php
/**
 * Manages pattern for a single card with no padding.
 *
 * @package Chthonic/Maisie
 * @since 0.1.0
 */

/**
 * Configures pattern.
 */
return array(
	'title'         => __( 'Card (Unpadded)', 'maisie' ),
	'categories'    => array( 'maisie-cards' ),
	'viewportWidth' => '650',
	'content'       => '<!-- wp:group {"tagName":"article","className":"box box--unpadded"} -->
						<article class="wp-block-group box box--unpadded">
							<!-- wp:group {"className":"box__body"} -->
							<div class="wp-block-group box__body">
								<!-- wp:heading {"textColor":"secondary","className":"box-title","fontSize":"medium"} -->
								<h2 class="box-title has-secondary-color has-text-color has-medium-font-size" id="an-unpadded-card">' . esc_html__( 'An unpadded card', 'maisie' ) . '</h2>
								<!-- /wp:heading -->
						
								<!-- wp:paragraph {"fontSize":"small"} -->
								<p class="has-small-font-size">' . esc_html__( 'This card has a full-width image and no background colour. Add a background colour to pad the entire card.', 'maisie' ) . '</p>
								<!-- /wp:paragraph -->
							</div>
							<!-- /wp:group -->
						
							<!-- wp:group {"className":"box__foot"} -->
							<div class="wp-block-group box__foot">
								<!-- wp:buttons -->
								<div class="wp-block-buttons">
									<!-- wp:button {"textColor":"secondary","className":"is-style-outline","fontSize":"tiny"} -->
									<div class="wp-block-button has-custom-font-size is-style-outline has-tiny-font-size">
										<a class="wp-block-button__link has-secondary-color has-text-color">' . esc_html__( 'Read', 'maisie' ) . '</a>
									</div>
									<!-- /wp:button -->
								</div>
								<!-- /wp:buttons -->
							</div>
							<!-- /wp:group -->
						
							<!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"box__media"} -->
							<figure class="wp-block-image size-large box__media">
								<img src="' . esc_url( get_template_directory_uri() ) . '/dist/images/maisie-square.webp" alt=""/>
							</figure>
							<!-- /wp:image -->
						</article>
						<!-- /wp:group -->',
);
