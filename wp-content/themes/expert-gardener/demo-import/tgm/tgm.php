<?php

	require get_template_directory() . '/demo-import/tgm/class-tgm-plugin-activation.php';
/**
 * Recommended plugins.
 */
function expert_gardener_register_recommended_plugins() {
	$plugins = array(
		
		array(
			'name'             => __( 'WooCommerce', 'expert-gardener' ),
			'slug'             => 'woocommerce',
			'required'         => false,
			'force_activation' => false,
		)

	);
	$config = array();
	tgmpa( $plugins, $config );
}
add_action( 'tgmpa_register', 'expert_gardener_register_recommended_plugins' );