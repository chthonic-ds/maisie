<?php
/**
 * Manage all Maisie functions.
 *
 * @package Chthonic/Maisie
 * @since 0.1.0
 */

/**
 * Auto-include available includes.
 */
foreach ( glob( __DIR__ . '/inc/*.php' ) as $filename ) {
	require_once $filename;
}
