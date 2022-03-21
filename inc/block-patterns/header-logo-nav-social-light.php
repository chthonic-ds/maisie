<?php
/**
 * Makes `Header (Social links, light)` part available as a pattern.
 *
 * @package Chthonic/Maisie
 * @since 0.0.1
 * @version 0.0.1
 */

/**
 * Configures pattern.
 */
$content = maisie_get_part_by_slug( 'header-logo-nav-social-light' );

return array(
	'title'      => __( 'Header (Social links) — Light', 'maisie' ),
	'categories' => array( 'maisie-headers' ),
	'content'    => $content,
);
