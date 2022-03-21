<?php
/**
 * Manage block overrides for this theme.
 *
 * @package Chthonic/Maisie
 * @since 0.1.0
 */


/**
 * Filters Site Title block if HTML heading detected.
 *
 * Fixes an unfortunate option in the Site Title block to set the wrapper to an HTML
 * heading. This filters block markup for an HTML heading and replaces it with a <span> while
 * maintaining generated classes.
 *
 * @since 0.1.0
 * @return string
 */
function maisie_filter_site_title_with_heading( $block_content, $block ) {
	$block_content = preg_replace( '#<h([1-6]).*?class="(.*?)".*?>(.*?)<\/h[1-6]>#si', '<span class="${2}">${3}</span>', $block_content );

	return $block_content;
}

add_filter( 'render_block_core/site-title', 'maisie_filter_site_title_with_heading', 10, 2 );


/**
 * Manages Navigation block burger menu
 *
 * Filters Navigation block markup and loads script for burger menu functionality if:
 *
 * - no overlayMenu attribute exists
 * - overlayMenu value equals 'always
 *
 * Dequeues microModal script supplied by WordPress.
 *
 * @since 0.1.0
 * @param string $block_content The block content data.
 * @param array  $block         The block data.
 * @return string
 */
function maisie_navigation_has_burger_menu( $block_content, $block ) {
	$state = isset( $block['attrs']['overlayMenu'] ) ? $block['attrs']['overlayMenu'] : null;

	if ( 'always' === $state || null === $state ) :
		// Remove the WordPress-generated burger buttons.
		$block_content = preg_replace( '/<button([\s\S]*?)micromodal([\s\S]*?)<\/button>/i', '', $block_content );

		// Remove native navigation script.
		add_action(
			'wp_print_scripts',
			function() use ( $state ) {
				wp_dequeue_script( 'wp-block-navigation-view' );
			}
		);

		// Load styles and script for burger menu.
		add_action(
			'wp_enqueue_scripts',
			function() use ( $state ) {
				wp_enqueue_style( 'maisie-burger-menu', get_template_directory_uri() . '/' . maisie_get_hashed_name( 'styleBurgerMenu.css' ), array(), wp_get_theme()->get( 'Version' ) );
				wp_enqueue_script( 'maisie-burger-menu', get_template_directory_uri() . '/' . maisie_get_hashed_name( 'burgerMenu.js' ), array(), wp_get_theme()->get( 'Version' ), true );

				// Pass the overlay type as JS global.
				wp_add_inline_script(
					'maisie-burger-menu',
					'const maisieBurgerMenu = ' . wp_json_encode(
						array(
							'overlay' => $state,
						)
					),
					'before'
				);
			}
		);
	endif;

	return $block_content;
}

add_filter( 'render_block_core/navigation', 'maisie_navigation_has_burger_menu', 10, 2 );


/**
 * Generates the CSS corresponding to the provided layout.
 *
 * @since 0.1.0
 * @param string $selector CSS selector.
 * @param array  $layout   Layout object.
 * @return string
 */
function maisie_get_layout_style( $selector, $layout, $has_block_gap_support = false ) {
	$layout_type = isset( $layout['type'] ) ? $layout['type'] : 'default';
	$style       = '';

	if ( 'default' === $layout_type ) {
		$content_size = isset( $layout['contentSize'] ) ? $layout['contentSize'] : null;
		$wide_size    = isset( $layout['wideSize'] ) ? $layout['wideSize'] : null;

		$all_max_width_value = $content_size ? $content_size : $wide_size;

		// Make sure there is a single CSS rule, and all tags are stripped for security.
		// TODO: Use `safecss_filter_attr` instead - once https://core.trac.wordpress.org/ticket/46197 is patched.
		$all_max_width_value = wp_strip_all_tags( explode( ';', $all_max_width_value )[0] );

		$style = '';
		if ( $content_size || $wide_size ) {
			$style  = "$selector {";
			$style .= 'max-width: ' . esc_html( $all_max_width_value ) . ';';
			$style .= 'margin-left: auto;';
			$style .= 'margin-right: auto;';
			$style .= 'width: 100%;';
			$style .= '}';

			$style .= "$selector.alignfull { grid-template-columns: 1fr min($all_max_width_value, calc(100% - var(--wp--custom--layout--margin))) 1fr; }";
			$style .= ".alignfull $selector.alignfull > div { max-width: $all_max_width_value; }";
		}

		$style .= "$selector .alignleft { float: left; margin-right: 2em; }";
		$style .= "$selector .alignright { float: right; margin-left: 2em; }";

	} elseif ( 'flex' === $layout_type ) {
		$layout_orientation = isset( $layout['orientation'] ) ? $layout['orientation'] : 'horizontal';

		$justify_content_options = array(
			'left'   => 'flex-start',
			'right'  => 'flex-end',
			'center' => 'center',
		);

		if ( 'horizontal' === $layout_orientation ) {
			$justify_content_options += array( 'space-between' => 'space-between' );
		}

		$flex_wrap_options = array( 'wrap', 'nowrap' );
		$flex_wrap         = ! empty( $layout['flexWrap'] ) && in_array( $layout['flexWrap'], $flex_wrap_options, true ) ?
			$layout['flexWrap'] :
			'wrap';

		$style  = "$selector {";
		$style .= 'display: flex;';
		$style .= 'gap: var(--wp--custom--spacing--block-gap--small);';

		$style .= "flex-wrap: $flex_wrap;";
		if ( 'horizontal' === $layout_orientation ) {
			$style .= 'align-items: center;';
			/**
			 * Add this style only if is not empty for backwards compatibility,
			 * since we intend to convert blocks that had flex layout implemented
			 * by custom css.
			 */
			if ( ! empty( $layout['justifyContent'] ) && array_key_exists( $layout['justifyContent'], $justify_content_options ) ) {
				$style .= "justify-content: {$justify_content_options[ $layout['justifyContent'] ]};";
				if ( ! empty( $layout['setCascadingProperties'] ) && $layout['setCascadingProperties'] ) {
					// --layout-justification-setting allows children to inherit the value regardless or row or column direction.
					$style .= "--layout-justification-setting: {$justify_content_options[ $layout['justifyContent'] ]};";
					$style .= '--layout-direction: row;';
					$style .= "--layout-wrap: $flex_wrap;";
					$style .= "--layout-justify: {$justify_content_options[ $layout['justifyContent'] ]};";
					$style .= '--layout-align: center;';
				}
			}
		} else {
			$style .= 'flex-direction: column;';
			if ( ! empty( $layout['justifyContent'] ) && array_key_exists( $layout['justifyContent'], $justify_content_options ) ) {
				$style .= "align-items: {$justify_content_options[ $layout['justifyContent'] ]};";
				if ( ! empty( $layout['setCascadingProperties'] ) && $layout['setCascadingProperties'] ) {
					// --layout-justification-setting allows children to inherit the value regardless or row or column direction.
					$style .= "--layout-justification-setting: {$justify_content_options[ $layout['justifyContent'] ]};";
					$style .= '--layout-direction: column;';
					$style .= '--layout-justify: initial;';
					$style .= "--layout-align: {$justify_content_options[ $layout['justifyContent'] ]};";
				}
			}
		}
		$style .= '}';

		$style .= "$selector > * { margin: 0; }";
	}

	return $style;
}


/**
 * Manages block layout support for CSS Grid.
 *
 * Renders the layout config to the block wrapper. Layout config for this theme
 * is based on CSS Grid, superseding the native max-width & left/right auto
 * margins layout presumed by core/Gutenberg.
 *
 * Overrides core implementation at wp-includes/block-supports/layout.php.
 *
 * @since 1.0.0
 * @param  string $block_content Rendered block content.
 * @param  array  $block         Block object.
 * @return string                Filtered block content.
 */
function maisie_render_layout_support_flag( $block_content, $block ) {
	$block_type     = WP_Block_Type_Registry::get_instance()->get_registered( $block['blockName'] );
	$support_layout = block_has_support( $block_type, array( '__experimentalLayout' ), false );

	if ( ! $support_layout ) {
		return $block_content;
	}

	$block_gap             = wp_get_global_settings( array( 'spacing', 'blockGap' ) );
	$default_layout        = wp_get_global_settings( array( 'layout' ) );
	$has_block_gap_support = isset( $block_gap ) ? null !== $block_gap : false;
	$default_block_layout  = _wp_array_get( $block_type->supports, array( '__experimentalLayout', 'default' ), array() );
	$used_layout           = isset( $block['attrs']['layout'] ) ? $block['attrs']['layout'] : $default_block_layout;

	if ( isset( $used_layout['inherit'] ) && $used_layout['inherit'] ) {
		if ( ! $default_layout ) {
			return $block_content;
		}
		$used_layout = $default_layout;
	}

	$id    = uniqid();
	$style = maisie_get_layout_style( ".wp-container-$id", $used_layout, $has_block_gap_support );
	// This assumes the hook only applies to blocks with a single wrapper.
	// I think this is a reasonable limitation for that particular hook.
	$content = preg_replace(
		'/' . preg_quote( 'class="', '/' ) . '/',
		'class="wp-container-' . $id . ' ',
		$block_content,
		1
	);

	// Ideally styles should be loaded in the head, but blocks may be parsed
	// after that, so loading in the footer for now.
	// See https://core.trac.wordpress.org/ticket/53494.
	add_action(
		'wp_head', // Opting to load in head, anyway...
		function () use ( $style ) {
			if ( $style ) { // Added by Maisie theme to prevent empty <style> tags.
				echo '<style>' . $style . '</style>'; // phpcs:ignore.
			}
		}
	);

	return $content;
}

add_filter( 'render_block', 'maisie_render_layout_support_flag', 10, 2 );

// Filter WordPress & Gutenberg functions replaced by maisie_render_layout_support_flag().
if ( function_exists( 'maisie_render_layout_support_flag' ) ) {
	remove_filter( 'render_block', 'wp_render_layout_support_flag', 10, 2 );
	remove_filter( 'render_block', 'gutenberg_render_layout_support_flag', 10, 2 );
}
