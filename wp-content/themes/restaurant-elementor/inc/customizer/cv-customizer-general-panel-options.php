<?php
/**
 * Restaurant Elementor manage the Customizer options of general panel.
 *
 * @subpackage restaurant-elementor
 * @since 1.0 
 */
Kirki::add_field(
	'restaurant_elementor_config', array(
		'type'        => 'checkbox',
		'settings'    => 'restaurant_elementor_home_posts',
		'label'       => esc_attr__( 'Checked to hide latest posts in homepage.', 'restaurant-elementor' ),
		'section'     => 'static_front_page',
		'default'     => true,
	)
);
