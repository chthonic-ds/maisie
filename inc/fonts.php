<?php
/**
 * Manages font loading.
 *
 * @package Chthonic/Maisie
 * @since 0.1.0
 */

if ( ! function_exists( 'maisie_font_face_preload_styles' ) ) :

	/**
	 * Inlines styles for preloaded fonts.
	 *
	 * @since 0.1.0
	 * @return string
	 */
	function maisie_font_face_preload_styles() {
		return "
		@font-face{
			font-family: 'Red Hat Display';
			font-weight: 500;
			font-style: normal;
			font-display: swap;
			src: url('" . get_theme_file_uri( 'dist/fonts/RedHatDisplay-Medium.woff2' ) . "') format('woff2');
		}

		@font-face{
			font-family: 'Red Hat Text';
			font-weight: 400;
			font-style: normal;
			font-display: swap;
			src: url('" . get_theme_file_uri( 'dist/fonts/RedHatText-Regular.woff2' ) . "') format('woff2');
		}
		";
	}

endif;


if ( ! function_exists( 'maisie_font_face_styles' ) ) :

	/**
	 * Loads non-preloaded fonts.
	 *
	 * @since 0.1.0
	 * @return string
	 * @link http://dev.w3.org/csswg/css-font-loading/
	 */
	function maisie_font_face_styles() {
		?>
			<script>
			(function() {
		"use strict";

		if ( "fonts" in document ) {

			var redHatText400i = new FontFace("Red Hat Text", "url(<?php echo esc_url( get_theme_file_uri( 'dist/fonts/RedHatText-Italic.woff2' ) ); ?>) format('woff2')", { style: "italic" });
			var redHatText600 = new FontFace("Red Hat Text", "url(<?php echo esc_url( get_theme_file_uri( 'dist/fonts/RedHatText-SemiBold.woff2' ) ); ?>) format('woff2')", { weight: "600" });
			var redHatText600i = new FontFace("Red Hat Text", "url(<?php echo esc_url( get_theme_file_uri( 'dist/fonts/RedHatText-SemiBoldItalic.woff2' ) ); ?>) format('woff2')", { style: "italic", weight: "600" });
			var redHatDisplay700 = new FontFace("Red Hat Display", "url(<?php echo esc_url( get_theme_file_uri( 'dist/fonts/RedHatDisplay-Bold.woff2' ) ); ?>) format('woff2')", { weight: "700" });

			Promise.all([ redHatText400i.load(),redHatText600.load(),redHatText600i.load(),redHatDisplay700.load() ]).then(function(fonts) {
				fonts.forEach(function(font) {
					document.fonts.add(font);
				});
			});
		}
	}) ();	
			</script>
		<?php
	}

endif;

add_action( 'wp_head', 'maisie_font_face_styles' );


if ( ! function_exists( 'maisie_preload_fonts' ) ) :

	/**
	 * Targets fonts for preloading.
	 *
	 * @since 0.1.0
	 * @return void
	 */
	function maisie_preload_fonts() {
		?>
		<link rel="preload" href="<?php echo esc_url( get_theme_file_uri( 'dist/fonts/RedHatText-Regular.woff2' ) ); ?>" as="font" type="font/woff2" crossorigin>
		<link rel="preload" href="<?php echo esc_url( get_theme_file_uri( 'dist/fonts/RedHatDisplay-Medium.woff2' ) ); ?>" as="font" type="font/woff2" crossorigin>
		<?php
	}

endif;

add_action( 'wp_head', 'maisie_preload_fonts', 1, 1 );
