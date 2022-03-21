<?php
/**
 * Partial for comments used in post templates.
 *
 * This pattern is hidden from the Editor inserter panel.
 *
 * @package Chthonic/Maisie
 * @since 0.1.0
 */
return array(
	'title'    => __( 'Comments for single templates', 'maisie' ),
	'inserter' => false,
	'content'  => '<!-- wp:group {"tagName":"article","className":"has-no-margin-top","style":{"spacing":{"padding":{"bottom":"var(--wp--custom--spacing--block-gap--large)","top":"var(--wp--custom--spacing--block-gap--large)"}}},"backgroundColor":"secondary-tint","layout":{"inherit":true},"align":"full"} -->
	<article class="wp-block-group alignfull has-no-margin-top has-secondary-tint-background-color has-background" style="padding-bottom:var(--wp--custom--spacing--block-gap--large);padding-top:var(--wp--custom--spacing--block-gap--large);">
		<!-- wp:post-comments /-->
	</article>
	<!-- /wp:group -->',
);
