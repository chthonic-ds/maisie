<?php
/**
 * Manages pattern for text columns.
 *
 * @package Chthonic/Maisie
 * @since 0.1.0
 */

/**
 * Configures pattern.
 */
return array(
	'title'      => __( 'Layout (Paragraph columns)', 'maisie' ),
	'categories' => array( 'maisie-layouts' ),
	'content'    => '<!-- wp:group {"className":"is-style-has-children-flow-across-2-columns"} -->
					<div class="wp-block-group is-style-has-children-flow-across-2-columns">
						<!-- wp:paragraph -->
						<p>' . esc_html__( 'Attack feet behind the couch flop over give attitude lick paws swat at butterfly sneak around go crazy go zoooom trip up human three PM treat clean tail give withering look belly scratch eat that leaf.', 'maisie' ) . '</p>
						<!-- /wp:paragraph -->
					
						<!-- wp:paragraph -->
						<p>' . esc_html__( 'Trip up human clean tail attack feet three PM treat go crazy sneak around behind the couch eat that leaf flop over give withering look swat at butterfly give attitude lick paws go zoooom belly scratch.', 'maisie' ) . '</p>
						<!-- /wp:paragraph -->
						
						<!-- wp:paragraph -->
						<p>' . esc_html__( 'Give withering look swat at butterfly give attitude lick paws go zoooom belly scratch trip up human clean tail attack feet three PM treat go crazy sneak around behind the couch eat that leaf flop over.', 'maisie' ) . '</p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->',
);
