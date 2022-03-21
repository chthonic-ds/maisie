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
	'title'      => __( 'Query (Cards)', 'maisie' ),
	'categories' => array( 'maisie-query' ),
	'content'    => '<!-- wp:query {"queryId":13,"query":{"perPage":3,"pages":0,"offset":"0","postType":"post","categoryIds":[],"tagIds":[],"order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"flex","columns":3},"className":"wp-block-query--theme-pattern"} -->
					<div class="wp-block-query wp-block-query--theme-pattern">
						<!-- wp:post-template -->
							<!-- wp:group {"tagName":"article","backgroundColor":"grey-dark","textColor":"white","className":"box box--padded"} -->
							<article class="wp-block-group box box--padded has-white-color has-grey-dark-background-color has-text-color has-background">
								<!-- wp:group {"className":"box__body"} -->
								<div class="wp-block-group box__body">
									<!-- wp:post-title {"textColor":"primary","className":"box-title","fontSize":"medium"} /-->
						
									<!-- wp:post-excerpt {"moreText":"Read more","fontSize":"small"} /--></div>
								<!-- /wp:group -->
						
								<!-- wp:post-featured-image {"isLink":false,"width":"","height":"250px","className":"box__media"} /-->
							</article>
							<!-- /wp:group -->
						<!-- /wp:post-template -->
					
						<!-- wp:group {"align":"full","backgroundColor":"white","className":"has-no-margin-top has-no-grid is-style-has-padding-y-large","layout":{"inherit":true}} -->
						<div class="wp-block-group alignfull has-no-margin-top has-no-grid is-style-has-padding-y-large has-white-background-color has-background">
							<!-- wp:query-pagination -->
								<!-- wp:query-pagination-previous {"label":"Previous"} /-->
								<!-- wp:query-pagination-numbers /-->
								<!-- wp:query-pagination-next {"label":"Next"} /-->
							<!-- /wp:query-pagination -->
						</div>
						<!-- /wp:group -->
					</div>
					<!-- /wp:query -->',
);
