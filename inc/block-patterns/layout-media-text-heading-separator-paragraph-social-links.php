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
	'title'      => __( 'Layout (Profile)', 'maisie' ),
	'categories' => array( 'maisie-layouts' ),
	'content'    => '<!-- wp:media-text {"mediaId":7522,"mediaLink":"' . esc_url( get_template_directory_uri() ) . '/dist/images/maisie-square.webp","mediaType":"image","verticalAlignment":"center","backgroundColor":"grey-dark","textColor":"white"} -->
					<div class="wp-block-media-text is-stacked-on-mobile is-vertically-aligned-center has-white-color has-grey-dark-background-color has-text-color has-background">
						<figure class="wp-block-media-text__media">
							<img src="' . esc_url( get_template_directory_uri() ) . '/dist/images/maisie-square.webp" alt="" class="wp-image-7522 size-full"/>
						</figure>
						
						<div class="wp-block-media-text__content">
							<!-- wp:heading {"fontSize":"x-large"} -->
							<h2 class="has-x-large-font-size" id="always-napping"><strong>' . esc_html__( 'Always napping', 'maisie' ) . '</strong></h2>
							<!-- /wp:heading -->
					
							<!-- wp:separator {"color":"white"} -->
							<hr class="wp-block-separator has-text-color has-background has-white-background-color has-white-color"/>
							<!-- /wp:separator -->
					
							<!-- wp:paragraph -->
							<p>' . esc_html__( 'Belly scratches, watching things closely. A recent fur ball really tied the room together. Miaow!', 'maisie' ) . '</p>
							<!-- /wp:paragraph -->
					
							<!-- wp:social-links {"iconColor":"grey-dark","iconColorValue":"#201c1d","iconBackgroundColor":"white","iconBackgroundColorValue":"#fff"} -->
							<ul class="wp-block-social-links has-icon-color has-icon-background-color">
								<!-- wp:social-link {"url":"#","service":"bandcamp"} /-->
								<!-- wp:social-link {"url":"#","service":"spotify"} /-->
								<!-- wp:social-link {"url":"#","service":"soundcloud"} /-->
							</ul>
							<!-- /wp:social-links -->
						</div>
					</div>
					<!-- /wp:media-text -->',
);
