<?php
/**
 * Manages pattern for a full-width "Image & Title" banner.
 *
 * @package Chthonic/Maisie
 * @since 0.0.1
 * @version 0.0.1
 */

/**
 * Configures pattern.
 */
return array(
	'title'      => __( 'Banner (Image & title)', 'maisie' ),
	'categories' => array( 'maisie-banners' ),
	'content'    => '<!-- wp:group {"align":"full"} -->
					<div class="wp-block-group alignfull">
						<!-- wp:media-text {"mediaId":5376,"mediaLink":"' . esc_url( get_template_directory_uri() ) . '/dist/images/maisie-square.webp","mediaType":"image","verticalAlignment":"center","imageFill":false,"backgroundColor":"grey-light","textColor":"black","className":"has-link-color is-full-width-child"} -->
						<div class="wp-block-media-text is-stacked-on-mobile is-vertically-aligned-center has-link-color is-full-width-child has-black-color has-grey-light-background-color has-text-color has-background">
							<figure class="wp-block-media-text__media">
								<img src="' . esc_url( get_template_directory_uri() ) . '/dist/images/maisie-square.webp" alt="" class="wp-image-5376 size-full"/>
							</figure>
							
							<div class="wp-block-media-text__content">
								<!-- wp:post-title {"textAlign":"center","level":1,"style":{"typography":{"lineHeight":"var(--wp--custom--typography--line-height--x-large,1.3)"}},"fontSize":"x-large"} /-->

								<!-- wp:spacer {"className":"is-style-spacer-small"} -->
								<div style="height:100px" aria-hidden="true" class="wp-block-spacer is-style-spacer-small"></div>
								<!-- /wp:spacer -->

								<!-- wp:group {"tagName":"aside","className":"has-no-row-gap","layout":{"type":"flex","justifyContent":"center"}} -->
								<aside class="wp-block-group has-no-row-gap">
									<!-- wp:post-date {"format":"F j, Y","style":{"typography":{"letterSpacing":"0.06125em","textTransform":"uppercase","fontStyle":"normal","fontWeight":"500"}},"fontSize":"tiny","fontFamily":"display"} /-->
									<!-- wp:post-terms {"term":"category","style":{"typography":{"letterSpacing":"0.06125em","textTransform":"uppercase","fontStyle":"normal","fontWeight":"500"}},"textColor":"primary","className":"is-font-display","fontSize":"tiny"} /-->
								</aside>
								<!-- /wp:group -->
							</div>
						</div>
						<!-- /wp:media-text -->
					</div>
					<!-- /wp:group -->',
);
