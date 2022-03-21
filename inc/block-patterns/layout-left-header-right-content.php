<?php
/**
 * Manages pattern for a left-aligned header with content to the right.
 *
 * @package Chthonic/Maisie
 * @since 0.1.0
 */

/**
 * Configures pattern.
 */
return array(
	'title'      => __( 'Layout (List, heading on left)', 'maisie' ),
	'categories' => array( 'maisie-layouts' ),
	'content'    => '<!-- wp:group -->
					<div class="wp-block-group">
						<!-- wp:columns {"className":"wp-block-columns--1:2 has-no-row-gap"} -->
						<div class="wp-block-columns wp-block-columns--1:2 has-no-row-gap">
							<!-- wp:column -->
							<div class="wp-block-column">
								<!-- wp:heading {"fontSize":"medium"} -->
								<h2 class="has-medium-font-size" id="what-we-do-2"><strong>' . esc_html__( 'Couches', 'maisie' ) . '</strong></h2>
								<!-- /wp:heading -->
							</div>
							<!-- /wp:column -->
					
							<!-- wp:column -->
							<div class="wp-block-column">
								<!-- wp:paragraph {"fontSize":"medium"} -->
								<p class="has-medium-font-size">' . esc_html__( 'Attack feet behind the couch flop over give attitude lick paws swat at butterfly sneak around go crazy go zoooom trip up human three PM treat clean tail give withering look belly scratch eat that leaf.', 'maisie' ) . '</p>
								<!-- /wp:paragraph -->
							</div>
							<!-- /wp:column -->
						</div>
						<!-- /wp:columns -->
					
						<!-- wp:columns {"className":"wp-block-columns--1:2 has-no-row-gap"} -->
						<div class="wp-block-columns wp-block-columns--1:2 has-no-row-gap">
							<!-- wp:column -->
							<div class="wp-block-column">
								<!-- wp:heading {"fontSize":"medium"} -->
								<h2 class="has-medium-font-size" id="what-we-do-2"><strong>' . esc_html__( 'Hallways', 'maisie' ) . '</strong></h2>
								<!-- /wp:heading -->
							</div>
							<!-- /wp:column -->
						
							<!-- wp:column -->
							<div class="wp-block-column">
								<!-- wp:paragraph {"fontSize":"medium"} -->
								<p class="has-medium-font-size">' . esc_html__( 'Trip up human clean tail attack feet three PM treat go crazy sneak around behind the couch eat that leaf flop over give withering look swat at butterfly give attitude lick paws go zoooom belly scratch.', 'maisie' ) . '</p>
								<!-- /wp:paragraph -->
							</div>
							<!-- /wp:column -->
						</div>
						<!-- /wp:columns -->
						
						<!-- wp:columns {"className":"wp-block-columns--1:2 has-no-row-gap"} -->
						<div class="wp-block-columns wp-block-columns--1:2 has-no-row-gap">
							<!-- wp:column -->
							<div class="wp-block-column">
								<!-- wp:heading {"fontSize":"medium"} -->
								<h2 class="has-medium-font-size" id="what-we-do-2"><strong>' . esc_html__( 'Keyboards', 'maisie' ) . '</strong></h2>
								<!-- /wp:heading -->
							</div>
							<!-- /wp:column -->
						
							<!-- wp:column -->
							<div class="wp-block-column">
								<!-- wp:paragraph {"fontSize":"medium"} -->
								<p class="has-medium-font-size">' . esc_html__( 'Give withering look swat at butterfly give attitude lick paws go zoooom belly scratch trip up human clean tail attack feet three PM treat go crazy sneak around behind the couch eat that leaf flop over.', 'maisie' ) . '</p>
								<!-- /wp:paragraph -->
							</div>
							<!-- /wp:column -->
						</div>
						<!-- /wp:columns -->
					</div>
					<!-- /wp:group -->',
);
