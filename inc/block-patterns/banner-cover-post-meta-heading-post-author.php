<?php
/**
 * Manages pattern for a full-width "poster" banner.
 *
 * @package Chthonic/Maisie
 * @since 0.1.0
 */

/**
 * Configures pattern.
 */
return array(
	'title'      => __( 'Banner (Poster)', 'maisie' ),
	'categories' => array( 'maisie-banners' ),
	'content'    => '<!-- wp:cover {"url":"' . get_template_directory_uri() . '/dist/images/maisie-landscape.webp","dimRatio":30,"overlayColor":"grey-dark","focalPoint":{"x":"0.50","y":0.5},"minHeight":80,"minHeightUnit":"vh","contentPosition":"center center","align":"full"} -->
					<div class="wp-block-cover has-background alignfull" style="min-height:80vh">
						<span aria-hidden="true" class="has-grey-dark-background-color has-background-dim-30 wp-block-cover__gradient-background has-background-dim"></span>
						
						<img class="wp-block-cover__image-background" alt="" src="' . esc_url( get_template_directory_uri() ) . '/dist/images/maisie-landscape.webp" style="object-position:50% 50%" data-object-fit="cover" data-object-position="50% 50%"/>

						<div class="wp-block-cover__inner-container">
							<!-- wp:group {"layout":{"inherit":true}} -->
							<div class="wp-block-group">
								<<!-- wp:pattern {"slug":"maisie/-post-meta"} /-->

								<!-- wp:spacer {"className":"is-style-spacer-large"} -->
								<div style="height:100px" aria-hidden="true" class="wp-block-spacer is-style-spacer-large"></div>
								<!-- /wp:spacer -->

								<!-- wp:post-title {"textAlign":"center","level":1,"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"fontSize":"mega"} /-->

								<!-- wp:spacer {"className":"is-style-spacer-small"} -->
								<div style="height:100px" aria-hidden="true" class="wp-block-spacer is-style-spacer-small"></div>
								<!-- /wp:spacer -->

								<!-- wp:post-author {"textAlign":"center","byline":"by","fontSize":"medium"} /-->
							</div>
							<!-- /wp:group -->
						</div>
					</div>
					<!-- /wp:cover -->',
);
