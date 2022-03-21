<?php
/**
 * Manages pattern for a full-width text CTA: heading, short description and call-to-action links.
 *
 * @package Chthonic/Maisie
 * @since 0.1.0
 */

/**
 * Configures pattern.
 */
return array(
	'title'      => __( 'Banner (Text CTA)', 'maisie' ),
	'categories' => array( 'maisie-banners' ),
	'content'    => '<!-- wp:group {"align":"full","borderColor":"primary","textColor":"white","gradient":"vertical-grey-dark-to-black","className":"is-style-has-padding-y-large","layout":{"inherit":true}} -->
					<div class="wp-block-group alignfull is-style-has-padding-y-large has-border-color has-primary-border-color has-white-color has-vertical-grey-dark-to-black-gradient-background has-text-color has-background">
						<!-- wp:heading {"textAlign":"center","level":1,"fontSize":"mega"} -->
						<h1 class="has-text-align-center has-mega-font-size" id="who-is-maisie">' . esc_html__( 'Who is Maisie?', 'maisie' ) . '</h1>
						<!-- /wp:heading -->
					
						<!-- wp:paragraph {"align":"center"} -->
						<p class="has-text-align-center">' . esc_html__( 'A little cat who appeared in the garden at just the right time.', 'maisie' ) . '</p>
						<!-- /wp:paragraph -->
					
						<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
						<div class="wp-block-buttons">
							<!-- wp:button {"textColor":"primary","className":"is-style-outline","fontSize":"tiny"} -->
							<div class="wp-block-button has-custom-font-size is-style-outline has-tiny-font-size">
								<a class="wp-block-button__link has-primary-color has-text-color" href="#">' . esc_html__( 'Learn more', 'maisie' ) . '</a>
							</div>
							<!-- /wp:button -->
						</div>
						<!-- /wp:buttons -->
					</div>
					<!-- /wp:group -->',
);
