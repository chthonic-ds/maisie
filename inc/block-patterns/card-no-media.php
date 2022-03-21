<?php
/**
 * Manages pattern for a single card with no media.
 *
 * @package Chthonic/Maisie
 * @since 0.1.0
 */

/**
 * Configures pattern.
 */
return array(
	'title'         => __( 'Card (Text only, padded)', 'maisie' ),
	'categories'    => array( 'maisie-cards' ),
	'viewportWidth' => '650',
	'content'       => '<!-- wp:group {"tagName":"article","backgroundColor":"black","textColor":"white","className":"box box--padded box--text-only"} -->
						<article class="wp-block-group box box--padded box--text-only has-white-color has-black-background-color has-text-color has-background">
							<!-- wp:group {"className":"box__body"} -->
							<div class="wp-block-group box__body">
								<!-- wp:heading {"className":"box-title","fontSize":"large"} -->
								<h2 class="box-title has-large-font-size" id="a-text-card-1"><strong>A text card</strong></h2>
								<!-- /wp:heading -->
						
								<!-- wp:paragraph {"fontSize":"small"} -->
								<p class="has-small-font-size">' . esc_html__( 'This is a text-only card with a heading and body text. Make it interactive by adding a link to the heading.', 'maisie' ) . '</p>
								<!-- /wp:paragraph -->
							</div>
							<!-- /wp:group -->
						
							<!-- wp:group {"className":"box__foot"} -->
							<div class="wp-block-group box__foot">
								<!-- wp:post-author {"showAvatar":false,"byline":"By"} /-->
							</div>
							<!-- /wp:group -->
						</article>
						<!-- /wp:group -->',
);
