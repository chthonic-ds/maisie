<?php
/**
 * Manages pattern for a row of Cards.
 *
 * @package Chthonic/Maisie
 * @since 0.1.0
 */

/**
 * Configures pattern.
 */
return array(
	'title'      => __( 'Layout (Text cards, row)', 'maisie' ),
	'categories' => array( 'maisie-layouts' ),
	'content'    => '<!-- wp:columns -->
					<div class="wp-block-columns">
						<!-- wp:column -->
						<div class="wp-block-column">
							<!-- wp:group {"tagName":"article","backgroundColor":"black","textColor":"white","className":"box box--padded box--text-only"} -->
							<article class="wp-block-group box box--padded box--text-only has-white-color has-black-background-color has-text-color has-background">
								<!-- wp:group {"className":"box__body"} -->
								<div class="wp-block-group box__body">
									<!-- wp:post-title {"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"textColor":"primary","fontSize":"large"} /-->
					
									<!-- wp:paragraph {"fontSize":"small"} -->
									<p class="has-small-font-size">' . esc_html__( 'Update this short introductory paragraph &amp; make the card interactive by adding a link to the heading.', 'maisie' ) . '</p>
									<!-- /wp:paragraph -->
								</div>
								<!-- /wp:group -->
					
								<!-- wp:group {"className":"box__foot"} -->
								<div class="wp-block-group box__foot">
									<!-- wp:post-date {"fontSize":"tiny"} /-->
								</div>
								<!-- /wp:group -->
							</article>
							<!-- /wp:group -->
						</div>
						<!-- /wp:column -->
					
						<!-- wp:column -->
						<div class="wp-block-column">
							<!-- wp:group {"tagName":"article","backgroundColor":"black","textColor":"white","className":"box box--padded box--text-only"} -->
							<article class="wp-block-group box box--padded box--text-only has-white-color has-black-background-color has-text-color has-background">
								<!-- wp:group {"className":"box__body"} -->
								<div class="wp-block-group box__body">
									<!-- wp:post-title {"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"textColor":"primary","fontSize":"large"} /-->
					
									<!-- wp:paragraph {"fontSize":"small"} -->
									<p class="has-small-font-size">' . esc_html__( 'Update this short introductory paragraph &amp; make the card interactive by adding a link to the heading.', 'maisie' ) . '</p>
									<!-- /wp:paragraph -->
								</div>
								<!-- /wp:group -->
					
								<!-- wp:group {"className":"box__foot"} -->
								<div class="wp-block-group box__foot">
									<!-- wp:post-date {"fontSize":"tiny"} /-->
								</div>
								<!-- /wp:group -->
							</article>
							<!-- /wp:group -->
						</div>
						<!-- /wp:column -->

						<!-- wp:column -->
						<div class="wp-block-column">
							<!-- wp:group {"tagName":"article","backgroundColor":"black","textColor":"white","className":"box box--padded box--text-only"} -->
							<article class="wp-block-group box box--padded box--text-only has-white-color has-black-background-color has-text-color has-background">
								<!-- wp:group {"className":"box__body"} -->
								<div class="wp-block-group box__body">
									<!-- wp:post-title {"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"textColor":"primary","fontSize":"large"} /-->
					
									<!-- wp:paragraph {"fontSize":"small"} -->
									<p class="has-small-font-size">' . esc_html__( 'Update this short introductory paragraph &amp; make the card interactive by adding a link to the heading.', 'maisie' ) . '</p>
									<!-- /wp:paragraph -->
								</div>
								<!-- /wp:group -->
					
								<!-- wp:group {"className":"box__foot"} -->
								<div class="wp-block-group box__foot">
									<!-- wp:post-date {"fontSize":"tiny"} /-->
								</div>
								<!-- /wp:group -->
							</article>
							<!-- /wp:group -->
						</div>
						<!-- /wp:column -->
					</div>
					<!-- /wp:columns -->',
);
