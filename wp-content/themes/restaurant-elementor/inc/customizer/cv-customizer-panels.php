<?php
/**
 * Restaurant Elementor manage the Customizer panels.
 *
 * @subpackage restaurant-elementor
 * @since 1.0 
 */

/**
 * General Settings Panel
 */
Kirki::add_panel( 'restaurant_elementor_general_panel', array(
	'priority' => 10,
	'title'    => __( 'General Settings', 'restaurant-elementor' ),
) );

/**
 * Restaurant Elementor Options
 */
Kirki::add_panel( 'restaurant_elementor_options_panel', array(
	'priority' => 20,
	'title'    => __( 'Restaurant Elementor Theme Options', 'restaurant-elementor' ),
) );