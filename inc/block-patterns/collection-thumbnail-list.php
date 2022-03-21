<?php
/**
 * Manages pattern for a list of posts.
 *
 * @package Chthonic/Maisie
 * @since 0.1.0
 */

/**
 * Configures pattern.
 */
return array(
	'title'      => __( 'Query (List)', 'maisie' ),
	'categories' => array( 'maisie-query' ),
	'content'    => '<!-- wp:query {"className":"wp-block-query--theme-pattern","query":{"perPage":3,"pages":0,"offset":"0","postType":"post","categoryIds":[],"tagIds":[],"order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"displayLayout":{"type":"list","columns":3}} -->
					<div class="wp-block-query wp-block-query--theme-pattern">
						<!-- wp:post-template -->
							<!-- wp:post-featured-image {"isLink":false,"width":"365px","height":"365px","className":"wp-block-post__media"} /-->
						
							<!-- wp:group {"className":"wp-block-post__text"} -->
							<div class="wp-block-group wp-block-post__text">
								<!-- wp:post-title {"isLink":true,"className":"box-title"} /-->
						
								<!-- wp:group {"className":"has-no-row-gap","layout":{"type":"flex","justifyContent":"left"}} -->
								<div class="wp-block-group has-no-row-gap">
									<!-- wp:post-author {"showAvatar":false,"showBio":false,"byline":"By","fontSize":"small"} /-->
									<!-- wp:post-date {"format":"F j, Y","fontSize":"small"} /-->
									<!-- wp:post-terms {"term":"category","fontSize":"small"} /-->
								</div>
								<!-- /wp:group -->
						
								<!-- wp:post-excerpt {"moreText":"Read","fontSize":"small"} /-->
							</div>
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
