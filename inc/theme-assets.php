<?php
/**
 * Manages loading for hashed file names.
 *
 * @package Chthonic/Maisie
 * @since 0.1.0
 */

if ( ! function_exists( 'maisie_theme_assets' ) ) :

	/**
	 * Enqueue theme scripts and styles.
	 *
	 * @since 0.1.0
	 * @return void
	 */
	function maisie_theme_assets() {
		// CSS.
		wp_enqueue_style( 'maisie-theme', get_template_directory_uri() . '/' . maisie_get_hashed_name( 'style.css' ), array(), wp_get_theme()->get( 'Version' ) );

		// Preloaded fonts.
		wp_add_inline_style( 'maisie-theme', maisie_font_face_preload_styles() );

		// Javascript.
		wp_enqueue_script( 'maisie-theme', get_template_directory_uri() . '/' . maisie_get_hashed_name( 'bundle.js' ), array(), wp_get_theme()->get( 'Version' ), true );
	}

endif;

add_action( 'wp_enqueue_scripts', 'maisie_theme_assets' );
