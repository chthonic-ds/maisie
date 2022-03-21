<?php
/**
 * Manages pattern for a post meta in a single post.
 * Manages pattern for a full-width "Image & Text" banner.
 *
 * @package Chthonic/Maisie
 * @since 0.0.1
 * @version 0.0.1
 */

/**
 * Configures pattern.
 */
return array(
	'title'      => __( 'Banner (Image & text)', 'maisie' ),
	'categories' => array( 'maisie-banners' ),
	'content'    => '<!-- wp:group {"align":"full"} -->
					<div class="wp-block-group alignfull">
						<!-- wp:media-text {"mediaId":999999,"mediaLink":"' . esc_url( get_template_directory_uri() ) . '/dist/images/maisie-square.webp","mediaType":"image","verticalAlignment":"center","imageFill":false,"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"backgroundColor":"grey-dark","textColor":"white","className":"is-full-width-child"} -->
						<div class="wp-block-media-text is-stacked-on-mobile is-vertically-aligned-center is-full-width-child has-white-color has-grey-dark-background-color has-text-color has-background has-link-color">
							<figure class="wp-block-media-text__media">
								<img src="' . esc_url( get_template_directory_uri() ) . '/dist/images/maisie-square.webp" alt="" class="wp-image-999999 size-full"/>
							</figure>
							
							<div class="wp-block-media-text__content">
								<!-- wp:post-title {"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}}} /-->

								<!-- wp:paragraph {"fontSize":"large"} -->
								<p class="has-large-font-size"><em>' . esc_html__( 'Reinforce the headline with a short blurb to help pique and focus a reader’s interest', 'maisie' ) . '</em></p>
								<!-- /wp:paragraph -->

								<!-- wp:group {"className":"has-no-row-gap","layout":{"type":"flex","justifyContent":"left"}} -->
								<div class="wp-block-group has-no-row-gap">
									<!-- wp:post-author {"showAvatar":false,"showBio":false,"byline":"By","fontSize":"tiny"} /-->
									<!-- wp:post-date {"fontSize":"tiny"} /-->
									<!-- wp:post-terms {"term":"category","fontSize":"tiny"} /-->
								</div>
								<!-- /wp:group -->
							</div>
						</div>
						<!-- /wp:media-text -->
					</div>
					<!-- /wp:group -->',
);
