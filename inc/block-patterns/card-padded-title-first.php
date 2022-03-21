<?php
/**
 * Manages pattern for a single card with padding and the heading before the image.
 *
 * @package Chthonic/Maisie
 * @since 0.1.0
 */

/**
 * Configures pattern.
 */
return array(
	'title'         => __( 'Card (Title first, padded)', 'maisie' ),
	'categories'    => array( 'maisie-cards' ),
	'viewportWidth' => '650',
	'content'       => '<!-- wp:group {"tagName":"article","backgroundColor":"black","textColor":"white","className":"box box--padded box--title-first"} -->
						<article class="wp-block-group box box--padded box--title-first has-white-color has-black-background-color has-text-color has-background">
							<!-- wp:group {"className":"box__head"} -->
							<div class="wp-block-group box__head">
								<!-- wp:heading {"textColor":"highlight","className":"box-title","fontSize":"medium"} -->
								<h2 class="box-title has-highlight-color has-text-color has-medium-font-size" id="heading-before-image-1">Heading before image</h2>
								<!-- /wp:heading -->
						
								<!-- wp:post-date {"format":"F j, Y","style":{"typography":{"letterSpacing":"0.06125em","textTransform":"uppercase"}},"fontSize":"tiny"} /-->
							</div>
							<!-- /wp:group -->
						
							<!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"box__media"} -->
							<figure class="wp-block-image size-large box__media">
							<img src="' . esc_url( get_template_directory_uri() ) . '/dist/images/maisie-square.webp" alt=""/>
							</figure>
							<!-- /wp:image -->
						
							<!-- wp:group {"className":"box__body"} -->
							<div class="wp-block-group box__body">
								<!-- wp:paragraph {"fontSize":"small"} -->
								<p class="has-small-font-size">' . esc_html__( 'This card has a heading and sub-heading above an image, with a blurb and link beneath.', 'maisie' ) . '</p>
								<!-- /wp:paragraph -->
							</div>
							<!-- /wp:group -->
						
							<!-- wp:group {"className":"box__foot"} -->
							<div class="wp-block-group box__foot">
								<!-- wp:buttons -->
								<div class="wp-block-buttons">
									<!-- wp:button {"textColor":"white","className":"is-style-outline","fontSize":"tiny"} -->
									<div class="wp-block-button has-custom-font-size is-style-outline has-tiny-font-size">
										<a class="wp-block-button__link has-white-color has-text-color">' . esc_html__( 'Read', 'maisie' ) . '</a>
									</div>
									<!-- /wp:button -->
								</div>
								<!-- /wp:buttons -->
							</div>
							<!-- /wp:group -->
						</article>
						<!-- /wp:group -->',
);
