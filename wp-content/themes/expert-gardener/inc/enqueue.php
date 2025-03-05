<?php

// In your theme's functions.php or equivalent
add_action('customize_controls_enqueue_scripts', function() {
    $version = wp_get_theme()->get('Version');
    
    // Define parameters
    $customizer_params = array(
        'some_key' => 'some_value', // Add your parameters here
    );
    
    wp_enqueue_script(
        'expert-gardener-customize-section-button',
        get_theme_file_uri('assets/js/customize-controls.js'),
        ['customize-controls'],
        $version,
        true
    );

    wp_enqueue_style(
        'expert-gardener-customize-section-button',
        get_theme_file_uri('assets/css/customize-controls.css'),
        ['customize-controls'],
        $version
    );

    wp_localize_script(
        'expert-gardener-customize-section-button',
        'expert_gardener_customizer_params',
        $customizer_params
    );
});


 /**
 * Enqueue scripts and styles.
 */
function expert_gardener_scripts() {
	// Styles	 

	wp_enqueue_style('bootstrap-min',get_template_directory_uri().'/assets/css/bootstrap.min.css');

	// owl
	wp_enqueue_style( 'owl-carousel-css', get_theme_file_uri( '/assets/css/owl.carousel.css' ) );
		
	wp_enqueue_style( 'font-awesome', get_template_directory_uri().'/assets/css/fontawesome-all.css' );
	
	wp_enqueue_style('expert-gardener-editor-style',get_template_directory_uri().'/assets/css/editor-style.css');

	wp_enqueue_style('expert-gardener-main', get_template_directory_uri() . '/assets/css/main.css');

	wp_enqueue_style('expert-gardener-woo', get_template_directory_uri() . '/assets/css/woo.css');
	
	wp_enqueue_style( 'expert-gardener-style', get_stylesheet_uri() );


	wp_enqueue_style('expert-gardener-main', get_stylesheet_uri(), array() );
		wp_style_add_data('expert-gardener-main', 'rtl', 'replace');
	
	// Scripts

	wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array('jquery'), false, true);

	wp_enqueue_script('expert-gardener-theme-js', get_template_directory_uri() . '/assets/js/theme.js', array('jquery'), false, true);

	wp_enqueue_script( 'owl-carousel-js', get_theme_file_uri( '/assets/js/owl.carousel.js' ), array( 'jquery' ), true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

}
add_action( 'wp_enqueue_scripts', 'expert_gardener_scripts' );

// Function to enqueue custom CSS
function expert_gardener_enqueue_custom_css() {
    // Define a unique handle for your inline stylesheet
    $handle = 'expert-gardener-style';
    
    // Get the generated custom CSS
    $expert_gardener_custom_css = "";

    $expert_gardener_blog_layouts = get_theme_mod('expert_gardener_blog_layout_option_setting', 'Default');
    if ($expert_gardener_blog_layouts == 'Default') {
        $expert_gardener_custom_css .= '.blog-item{';
        $expert_gardener_custom_css .= 'text-align:center;';
        $expert_gardener_custom_css .= '}';
    } elseif ($expert_gardener_blog_layouts == 'Left') {
        $expert_gardener_custom_css .= '.blog-item{';
        $expert_gardener_custom_css .= 'text-align:Left;';
        $expert_gardener_custom_css .= '}';
    } elseif ($expert_gardener_blog_layouts == 'Right') {
        $expert_gardener_custom_css .= '.blog-item{';
        $expert_gardener_custom_css .= 'text-align:Right;';
        $expert_gardener_custom_css .= '}';
    }

    // Enqueue the inline stylesheet
    wp_add_inline_style($handle, $expert_gardener_custom_css);

    // slider css
    $expert_gardener_inline_style = '';

    $expert_gardener_slider_setting = get_theme_mod( 'expert_gardener_slider_setting', false);
    if($expert_gardener_slider_setting == false) {
        $expert_gardener_inline_style .= '.page-template-template-frontpage .lower-part{';
        $expert_gardener_inline_style .= 'position:static;';
        $expert_gardener_inline_style .= '}';
    }

    wp_add_inline_style( 'expert-gardener-style', $expert_gardener_inline_style );
}

// Hook the function to the 'wp_enqueue_scripts' action
add_action('wp_enqueue_scripts', 'expert_gardener_enqueue_custom_css');

//Admin Enqueue for Admin
function expert_gardener_admin_enqueue_scripts(){
    wp_enqueue_style('expert-gardener-admin-style', esc_url( get_template_directory_uri() ) . '/inc/aboutthemes/admin.css');
    wp_enqueue_script('dismiss-notice-script', get_stylesheet_directory_uri() . '/inc/aboutthemes/theme-admin-notice.js', array('jquery'), null, true);
}
add_action( 'admin_enqueue_scripts', 'expert_gardener_admin_enqueue_scripts' );