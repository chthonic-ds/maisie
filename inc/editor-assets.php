<?php
/**
 * Manage setup for this theme.
 *
 * @package Chthonic/Maisie
 * @since 0.1.0
 */

if ( ! function_exists( 'maisie_editor_styles' ) ) :

	/**
	 * Enqueue editor styles.
	 *
	 * Fonts are defined individually to ensure they load in the editor. When loaded
	 * as a single query string, only the first font will load.
	 *
	 * @since 0.1.0
	 * @return void
	 */
	function maisie_editor_styles() {
		add_editor_style(
			array(
				maisie_get_hashed_name( 'editor.css' ),
				'https://fonts.googleapis.com/css2?family=Red+Hat+Display:wght@500;700&amp;display=swap',
				'https://fonts.googleapis.com/css2?family=Red+Hat+Text:ital,wght@0,400;0,600;1,400;1,600&amp;display=swap',
			)
		);
	}

endif;

add_action( 'after_setup_theme', 'maisie_editor_styles' );


if ( ! function_exists( 'maisie_editor_scripts' ) ) :

	/**
	 * Enqueue editor scripts.
	 *
	 * @since 0.1.0
	 * @return void
	 */
	function maisie_editor_scripts() {
		wp_enqueue_script( 'maisie-editor', get_template_directory_uri() . '/' . maisie_get_hashed_name( 'bundleEditor.js' ), array( 'wp-edit-post', 'wp-dom-ready', 'wp-components', 'wp-blocks', 'wp-element', 'wp-i18n' ), wp_get_theme()->get( 'Version' ), true );
	}

endif;

add_action( 'enqueue_block_editor_assets', 'maisie_editor_scripts' );
