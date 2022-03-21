<?php
/**
 * Makes `Footer (Page links, dark)` part available as a pattern.
 *
 * @package Chthonic/Maisie
 * @since 0.0.1
 * @version 0.0.1
 */

/**
 * Configures pattern.
 */
$content = maisie_get_part_by_slug( 'footer-columns-separator-meta-dark' );

return array(
	'title'      => __( 'Footer (Page links) — Dark', 'maisie' ),
	'categories' => array( 'maisie-footers' ),
	'content'    => $content,
);
