<?php
/**
 * Makes `Footer (Minimal, light)` part available as a pattern.
 *
 * @package Chthonic/Maisie
 * @since 0.0.1
 * @version 0.0.1
 */

/**
 * Configures pattern.
 */
$content = maisie_get_part_by_slug( 'footer-light' );

return array(
	'title'      => __( 'Footer (Minimal) — Light', 'maisie' ),
	'categories' => array( 'maisie-footers' ),
	'content'    => $content,
);
