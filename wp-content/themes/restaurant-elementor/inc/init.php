<?php 

get_template_part( 'inc/admin-function');

//custom-style
get_template_part( 'inc/restaurant-elementor-custom-style');

// theme-option
get_template_part( 'lib/texture-option/texture-option');

// customizer
get_template_part('customizer/models/class-restaurant-elementor-singleton');
get_template_part('customizer/models/class-restaurant-elementor-defaults-models');
get_template_part('customizer/repeater/class-restaurant-elementor-repeater');

/*customizer*/

get_template_part('customizer/extend-customizer/class-restaurant-elementor-wp-customize-panel');
get_template_part('customizer/extend-customizer/class-restaurant-elementor-wp-customize-section');
get_template_part('customizer/customizer-radio-image/class/class-restaurant-elementor-customize-control-radio-image');
get_template_part('customizer/customizer-range-value/class/class-restaurant-elementor-customizer-range-value-control');

get_template_part('customizer/color/class-control-color');
get_template_part('customizer/customize-buttonset/class-control-buttonset');

get_template_part('customizer/background/class-restaurant-elementor-background-image-control');

get_template_part('customizer/customizer-toggle/class-restaurant-elementor-toggle-control');

get_template_part('customizer/custom-customizer');
get_template_part('customizer/customizer');

/******************************/
// woocommerce
/******************************/
get_template_part( 'inc/woocommerce/woo-core');
get_template_part( 'inc/woocommerce/woo-function');
get_template_part('inc/woocommerce/woocommerce-ajax');