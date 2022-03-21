<?php
/**
 * Makes `Footer (Social links, dark)` part available as a pattern.
 *
 * @package Chthonic/Maisie
 * @since 0.0.1
 * @version 0.0.1
 */

/**
 * Configures pattern.
 */
$content = maisie_get_part_by_slug( 'footer-site-meta-social-links-dark' );

return array(
	'title'      => __( 'Footer (Social links) — Dark', 'maisie' ),
	'categories' => array( 'maisie-footers' ),
	'content'    => $content,
);
