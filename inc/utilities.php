<?php
/**
 * Manages theme helper functions.
 *
 * @package Chthonic/Maisie
 * @since 0.1.0
 */


/**
 * Matches assets with hashed file names.
 *
 * Matches a filename against a hash manifest and returns the hash file name if
 * it exists. Uses wp_remote_get() to pass theme checker.
 *
 * @param  string $filename Original file name of asset.
 * @return string $filename Found file name of asset.
 */
function maisie_get_hashed_name( $filename ) {
	$manifest          = '/dist/assets-manifest.json';
	$get_manifest_path = get_theme_file_path( $manifest );

	if ( file_exists( $get_manifest_path ) ) {
		$manifest_uri = get_template_directory_uri() . $manifest;
		$request      = wp_remote_get( $manifest_uri );
		$asset_hashes = json_decode( wp_remote_retrieve_body( $request ) );

		if ( array_key_exists( $filename, $asset_hashes ) ) {
			return 'dist/' . $asset_hashes->$filename;
		}
	}

	return $filename;
}


/**
 * Returns markup for a template part.
 */
function maisie_get_part_by_slug( $slug ) {
	$part = 'parts/' . $slug . '.html';

	if ( locate_template( $part ) ) :
		ob_start();
		include locate_template( $part );
		return ob_get_clean();
	endif;
}
