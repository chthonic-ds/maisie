<?php
/**
 * Manages pattern for a grid of cards.
 *
 * @package Chthonic/Maisie
 * @since 0.1.0
 */

/**
 * Configures pattern.
 */
return array(
	'title'      => __( 'Layout (2–column grid, empty)', 'maisie' ),
	'categories' => array( 'maisie-layouts' ),
	'content'    => '<!-- wp:group {"className":"maisie-layout-grid maisie-layout-grid__2-columns","layout":{"inherit":false}} -->
					<div class="wp-block-group maisie-layout-grid maisie-layout-grid__2-columns">
						<!-- wp:group {"backgroundColor":"primary-tint"} -->
						<div class="wp-block-group has-primary-tint-background-color has-background">
							<!-- wp:paragraph -->
							<p></p>
							<!-- /wp:paragraph -->
						</div>
						<!-- /wp:group -->
					
						<!-- wp:group {"backgroundColor":"primary-tint"} -->
						<div class="wp-block-group has-primary-tint-background-color has-background">
							<!-- wp:paragraph -->
							<p></p>
							<!-- /wp:paragraph -->
						</div>
						<!-- /wp:group -->
					
						<!-- wp:group {"backgroundColor":"primary-tint"} -->
						<div class="wp-block-group has-primary-tint-background-color has-background">
							<!-- wp:paragraph -->
							<p></p>
							<!-- /wp:paragraph -->
						</div>
						<!-- /wp:group -->
					
						<!-- wp:group {"backgroundColor":"primary-tint"} -->
						<div class="wp-block-group has-primary-tint-background-color has-background">
							<!-- wp:paragraph -->
							<p></p>
							<!-- /wp:paragraph -->
						</div>
						<!-- /wp:group -->
					
						<!-- wp:group {"backgroundColor":"primary-tint"} -->
						<div class="wp-block-group has-primary-tint-background-color has-background">
							<!-- wp:paragraph -->
							<p></p>
							<!-- /wp:paragraph -->
						</div>
						<!-- /wp:group -->
					</div>
					<!-- /wp:group -->',
);
