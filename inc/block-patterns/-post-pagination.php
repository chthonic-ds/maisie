<?php
/**
 * Partial for next/previous pagination used in post templates.
 *
 * This pattern is hidden from the Editor inserter panel.
 *
 * @package Chthonic/Maisie
 * @since 0.1.0
 */
return array(
	'title'    => __( 'Next/previous pagination for single templates', 'maisie' ),
	'inserter' => false,
	'content'  => '<!-- wp:group {"className":"has-no-margin-top is-style-has-padding-y-large","backgroundColor":"white","layout":{"inherit":true},"align":"full"} -->
	<div class="wp-block-group alignfull has-no-margin-top is-style-has-padding-y-large has-white-background-color has-background">
		<!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"space-between"}} -->
			<!-- wp:post-navigation-link {"type":"previous","label":"Previous","showTitle":true} /-->
			<!-- wp:post-navigation-link {"type":"next","label":"Next","showTitle":true} /-->
		<!-- /wp:query-pagination -->
	</div>
	<!-- /wp:group -->',
);
