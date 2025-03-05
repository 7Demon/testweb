<?php
/**
 * Recommended plugins
 *
 * @package restaurant-elementor
 */

if ( ! function_exists( 'restaurant_elementor_recommended_plugins' ) ) :

    /**
     * Recommend plugins.
     *
     * @since 1.0.0
     */
    function restaurant_elementor_recommended_plugins() {

        $plugins = array(  

            array(
                'name'     => esc_html__( 'Testerwp Ecommerce Companion', 'restaurant-elementor' ),
                'slug'     => 'testerwp-ecommerce-companion',
                'required' => false,
            ),              
            array(
                'name'     => esc_html__( 'One Click Demo Import', 'restaurant-elementor' ),
                'slug'     => 'one-click-demo-import',
                'required' => false,
            ),
            array(
                'name'     => esc_html__( 'Elementor Website Builder', 'restaurant-elementor' ),
                'slug'     => 'elementor',
                'required' => false,
            ),
             array(
                'name'     => esc_html__( 'ElementsKit Lite', 'restaurant-elementor' ),
                'slug'     => 'elementskit-lite',
                'required' => false,
            ),
             array(
                'name'     => esc_html__( 'WooCommerce', 'restaurant-elementor' ),
                'slug'     => 'woocommerce',
                'required' => false,
            ),
        );

        tgmpa( $plugins );

    }

endif;

add_action( 'tgmpa_register', 'restaurant_elementor_recommended_plugins' );