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
	'title'      => __( 'Layout (Large list, grid)', 'maisie' ),
	'categories' => array( 'maisie-layouts' ),
	'content'    => '<!-- wp:group {"align":"full","backgroundColor":"grey-dark","textColor":"white","className":"is-style-has-padding-y-large","layout":{"inherit":true}} -->
					<div class="wp-block-group alignfull is-style-has-padding-y-large has-white-color has-grey-dark-background-color has-text-color has-background">
						<!-- wp:group {"className":"maisie-layout-grid maisie-layout-grid__2-columns","layout":{"inherit":false}} -->
						<div class="wp-block-group maisie-layout-grid maisie-layout-grid__2-columns">
							<!-- wp:group {"className":"has-no-grid"} -->
							<div class="wp-block-group has-no-grid">
								<!-- wp:heading {"level":3,"textColor":"primary"} -->
								<h3 class="has-primary-color has-text-color" id="couches"><strong>' . esc_html__( 'Couches', 'maisie' ) . '</strong></h3>
								<!-- /wp:heading -->
					
								<!-- wp:paragraph {"fontSize":"x-large"} -->
								<p class="has-x-large-font-size">' . esc_html__( 'Attack feet behind the couch flop over give attitude.', 'maisie' ) . '</p>
								<!-- /wp:paragraph -->
							</div>
							<!-- /wp:group -->
					
							<!-- wp:group {"className":"has-no-grid"} -->
							<div class="wp-block-group has-no-grid">
								<!-- wp:heading {"level":3,"textColor":"primary"} -->
								<h3 class="has-primary-color has-text-color" id="hallways"><strong>' . esc_html__( 'Hallways', 'maisie' ) . '</strong></h3>
								<!-- /wp:heading -->
					
								<!-- wp:paragraph {"fontSize":"x-large"} -->
								<p class="has-x-large-font-size">' . esc_html__( 'Lick paws swat at butterfly sneak around.', 'maisie' ) . '</p>
								<!-- /wp:paragraph -->
							</div>
							<!-- /wp:group -->
					
							<!-- wp:group {"className":"has-no-grid"} -->
							<div class="wp-block-group has-no-grid">
								<!-- wp:heading {"level":3,"textColor":"primary"} -->
								<h3 class="has-primary-color has-text-color" id="keyboards"><strong>' . esc_html__( 'Keyboards', 'maisie' ) . '</strong></h3>
								<!-- /wp:heading -->
					
								<!-- wp:paragraph {"fontSize":"x-large"} -->
								<p class="has-x-large-font-size">' . esc_html__( 'Closely inspect leaf clean tail give withering look.', 'maisie' ) . '</p>
								<!-- /wp:paragraph -->
							</div>
							<!-- /wp:group -->
					
							<!-- wp:group {"className":"has-no-grid"} -->
							<div class="wp-block-group has-no-grid">
								<!-- wp:heading {"level":3,"textColor":"primary"} -->
								<h3 class="has-primary-color has-text-color" id="general-foliage"><strong>' . esc_html__( 'General foliage', 'maisie' ) . '</strong></h3>
								<!-- /wp:heading -->
							
								<!-- wp:paragraph {"fontSize":"x-large"} -->
								<p class="has-x-large-font-size">' . esc_html__( 'Belly scratch go crazy trip up human 3pm treat.', 'maisie' ) . '</p>
								<!-- /wp:paragraph -->
							</div>
							<!-- /wp:group -->
						</div>
						<!-- /wp:group -->
					</div>
					<!-- /wp:group -->',
);
