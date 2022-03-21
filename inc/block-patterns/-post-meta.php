<?php
/**
 * Partial for meta data used in post templates.
 *
 * This pattern is hidden from the Editor inserter panel.
 *
 * @package Chthonic/Maisie
 * @since 0.1.0
 */
return array(
	'title'    => __( 'Date and Post Terms in a Row block', 'maisie' ),
	'inserter' => false,
	'content'  => '<!-- wp:group {"tagName":"aside","className":"has-no-row-gap","layout":{"type":"flex","justifyContent":"center"}} -->
					<aside class="wp-block-group has-no-row-gap">
						<!-- wp:post-date {"format":"F j, Y","style":{"typography":{"letterSpacing":"0.06125em","textTransform":"uppercase","fontStyle":"normal","fontWeight":"500"}},"fontSize":"tiny","fontFamily":"display"} /-->
						<!-- wp:post-terms {"term":"category","className":"is-font-display","style":{"typography":{"letterSpacing":"0.06125em","textTransform":"uppercase","fontStyle":"normal","fontWeight":"500"}},"textColor":"primary","fontSize":"tiny"} /-->
					</aside>
					<!-- /wp:group -->',
);
