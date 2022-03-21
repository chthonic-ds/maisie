<?php
/**
 * Manages pattern for a posts collection of cards.
 *
 * @package Chthonic/Maisie
 * @since 0.1.0
 */

/**
 * Configures pattern.
 */
return array(
	'title'      => __( 'Query (Linked cards, no excerpt)', 'maisie' ),
	'categories' => array( 'maisie-query' ),
	'content'    => '<!-- wp:query {"className":"wp-block-query--theme-pattern","query":{"perPage":3,"pages":0,"offset":"0","postType":"post","categoryIds":[],"tagIds":[],"order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"flex","columns":3}} -->
						<div class="wp-block-query wp-block-query--theme-pattern">
							<!-- wp:post-template -->
								<!-- wp:group {"tagName":"article","backgroundColor":"black","textColor":"primary","className":"box box--padded"} -->
								<article class="wp-block-group box box--padded has-primary-color has-black-background-color has-text-color has-background">
									<!-- wp:group {"className":"box__body"} -->
									<div class="wp-block-group box__body">
										<!-- wp:post-title {"isLink":true,"className":"box-title","fontSize":"x-large"} /-->
									</div>
									<!-- /wp:group -->
							
									<!-- wp:group {"className":"box__foot"} -->
									<div class="wp-block-group box__foot">
										<!-- wp:post-date {"format":"F j, Y","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.06125em"}},"fontSize":"tiny"} /-->
									</div>
									<!-- /wp:group -->
							
									<!-- wp:post-featured-image {"isLink":false,"width":"","height":"350px","className":"box__media"} /-->
								</article>
								<!-- /wp:group -->
							<!-- /wp:post-template -->
					
							<!-- wp:group {"align":"full","backgroundColor":"white","className":"has-no-margin-top has-no-grid is-style-has-padding-y-large","layout":{"inherit":true}} -->
							<div class="wp-block-group alignfull has-no-margin-top has-no-grid is-style-has-padding-y-large has-white-background-color has-background">
								<!-- wp:query-pagination -->
									<!-- wp:query-pagination-previous {"label":"Previous"} /-->
									<!-- wp:query-pagination-numbers /-->
									<!-- wp:query-pagination-next {"label":"Next"} /-->
								<!-- /wp:query-pagination --></div>
							<!-- /wp:group -->
							</div>
						<!-- /wp:query -->',
);
