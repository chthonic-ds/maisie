<?php
/**
 * Partial for theme attribution used in footer parts.
 *
 * This pattern is hidden from the Editor inserter panel.
 *
 * @package Chthonic/Maisie
 * @since 0.1.0
 */
return array(
	'title'      => __( 'Theme attribution', 'maisie' ),
	'inserter'   => false,
	'blockTypes' => array( 'core/template-part/footer' ),
	'content'    => '<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"fontSize":"tiny"} -->
					<p class="has-link-color has-tiny-font-size">' .
					sprintf(
						/* Translators: Theme link. */
						esc_html__( 'Created with %s', 'maisie' ),
						'<a href="' . esc_url( __( 'https://example.com', 'maisie' ) ) . '" rel="nofollow">Maisie</a>'
					) . '
					<br>
					©2022</p>
					<!-- /wp:paragraph -->',
);
