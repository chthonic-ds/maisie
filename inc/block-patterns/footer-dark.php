<?php
/**
 * Makes `Footer (Minimal, dark)` part available as a pattern.
 *
 * @package Chthonic/Maisie
 * @since 0.0.1
 * @version 0.0.1
 */

/**
 * Configures pattern.
 */
$content = maisie_get_part_by_slug( 'footer-dark' );

return array(
	'title'      => __( 'Footer (Minimal) — Dark', 'maisie' ),
	'categories' => array( 'maisie-footers' ),
	'content'    => $content,
);
