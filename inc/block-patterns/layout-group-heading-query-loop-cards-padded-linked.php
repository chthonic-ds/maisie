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
	'title'      => __( 'Layout (Recent articles)', 'maisie' ),
	'categories' => array( 'maisie-layouts' ),
	'content'    => '<!-- wp:group {"align":"full","backgroundColor":"primary","className":"is-style-has-padding-y-large","layout":{"inherit":true}} -->
					<div class="wp-block-group alignfull is-style-has-padding-y-large has-primary-background-color has-background">
						<!-- wp:heading {"level":2,"style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.06125em"}},"textColor":"primary-tint","fontSize":"medium"} -->
						<h2 class="has-primary-tint-color has-text-color has-medium-font-size" id="recent-articles" style="text-transform:uppercase;letter-spacing:0.06125em"><strong>' . esc_html__( 'Recent Articles', 'maisie' ) . '</strong></h2>
						<!-- /wp:heading -->

						<!-- wp:spacer {"className":"is-style-spacer-medium"} -->
						<div style="height:100px" aria-hidden="true" class="wp-block-spacer is-style-spacer-medium"></div>
						<!-- /wp:spacer -->

						<!-- wp:query {"queryId":16,"query":{"perPage":3,"pages":0,"offset":"0","postType":"post","categoryIds":[],"tagIds":[],"order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"flex","columns":3},"className":"wp-block-query--theme-pattern"} -->
						<div class="wp-block-query wp-block-query--theme-pattern">
							<!-- wp:post-template -->
								<!-- wp:group {"tagName":"article","style":{"border":{"style":"solid"}},"borderColor":"primary-tint","textColor":"primary","className":"box box--padded"} -->
								<article class="wp-block-group box box--padded has-border-color has-primary-tint-border-color has-primary-color has-text-color" style="border-style:solid">
									<!-- wp:group {"className":"box__body"} -->
									<div class="wp-block-group box__body">
										<!-- wp:post-title {"level":3,"isLink":true,"textColor":"primary-tint","className":"box-title","fontSize":"large"} /-->
									</div>
									<!-- /wp:group -->

									<!-- wp:group {"className":"box__foot"} -->
									<div class="wp-block-group box__foot">
										<!-- wp:post-date {"format":"F j, Y","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.06125em"}},"textColor":"primary-tint","fontSize":"tiny"} /-->
									</div>
									<!-- /wp:group -->

									<!-- wp:post-featured-image {"isLink":false,"width":"","height":"300px","className":"box__media"} /-->
								</article>
								<!-- /wp:group -->
							<!-- /wp:post-template -->
						</div>
						<!-- /wp:query -->
					</div>
					<!-- /wp:group -->',
);
