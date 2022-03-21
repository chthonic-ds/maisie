<?php
/**
 * Manages pattern for a heading before 1:2 columns: text + image.
 *
 * @package Chthonic/Maisie
 * @since 0.1.0
 */

/**
 * Configures pattern.
 */
return array(
	'title'      => __( 'Layout (Heading, text & image columns)', 'maisie' ),
	'categories' => array( 'maisie-layouts' ),
	'content'    => '<!-- wp:heading {"fontSize":"mega"} -->
						<h2 class="has-mega-font-size" id="always-napping">Always napping</h2>
					<!-- /wp:heading -->
					
					<!-- wp:columns {"className":"wp-block-columns\u002d\u002d1:2"} -->
					<div class="wp-block-columns wp-block-columns--1:2">
						<!-- wp:column -->
						<div class="wp-block-column">
							<!-- wp:paragraph -->
							<p>Attack feet behind the couch flop over give attitude lick paws swat at butterfly sneak around go crazy go zoooom trip up human three PM treat clean tail give withering look belly scratch eat leaf. Go crazy trip up human clean tail attack all feet sneak around behind couch.</p>
							<!-- /wp:paragraph -->
						</div>
						<!-- /wp:column -->
					
						<!-- wp:column -->
						<div class="wp-block-column">
							<!-- wp:image {"id":738,"sizeSlug":"large","linkDestination":"none"} -->
							<figure class="wp-block-image size-large"><img src="' . esc_url( get_template_directory_uri() ) . '/dist/images/maisie-square.webp" alt="" class="wp-image-738"/></figure>
							<!-- /wp:image -->
						</div>
						<!-- /wp:column -->
					</div>
					<!-- /wp:columns -->',
);
