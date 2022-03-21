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
	'title'         => __( 'Card (Text only, padded, has soft shadow)', 'maisie' ),
	'categories'    => array( 'maisie-cards' ),
	'viewportWidth' => '650',
	'content'       => '<!-- wp:group {"tagName":"article","backgroundColor":"white","className":"box box\u002d\u002dpadded box\u002d\u002dtext-only has-shadow"} -->
						<article class="wp-block-group box box--padded box--text-only has-shadow has-white-background-color has-background"><!-- wp:group {"className":"box__body"} -->
						<div class="wp-block-group box__body"><!-- wp:heading {"className":"box-title","fontSize":"medium"} -->
						<h2 class="box-title has-medium-font-size" id="a-text-card-1">A text card</h2>
						<!-- /wp:heading -->
						
						<!-- wp:paragraph {"fontSize":"tiny"} -->
						<p class="has-tiny-font-size">This is a text-only card with interior padding and a soft outer shadow.</p>
						<!-- /wp:paragraph --></div>
						<!-- /wp:group -->
						
						<!-- wp:group {"className":"box__foot"} -->
						<div class="wp-block-group box__foot"><!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.06125em"}},"fontSize":"tiny"} -->
						<p class="has-tiny-font-size" style="text-transform:uppercase;letter-spacing:0.06125em"><a href="#"><strong>Find out more</strong></a></p>
						<!-- /wp:paragraph --></div>
						<!-- /wp:group --></article>
						<!-- /wp:group -->',
);
