<?php
function expert_gardener_blog_setting( $wp_customize ) {

$wp_customize->register_control_type( 'Expert_Gardener_Control_Upgrade' );

$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	$wp_customize->add_panel(
		'expert_gardener_frontpage_sections', array(
			'priority' => 32,
			'title' => esc_html__( 'Frontpage Sections', 'expert-gardener' ),
		)
	);
	
	/*=========================================
	Slider Section
	=========================================*/
	$wp_customize->add_section(
		'expert_gardener_slider_section', array(
			'title' => esc_html__( 'Slider Section', 'expert-gardener' ),
			'priority' => 13,
			'panel' => 'expert_gardener_frontpage_sections',
		)
	);

	// Slider Hide/ Show Setting // 
	$wp_customize->add_setting( 
		'expert_gardener_slider_setting' , 
			array(
			'default' => false,
			'sanitize_callback' => 'expert_gardener_sanitize_checkbox',
			'capability' => 'edit_theme_options',
			'priority' => 2,
		) 
	);
	
	$wp_customize->add_control(
	'expert_gardener_slider_setting', 
		array(
			'label'	      => esc_html__( 'Hide / Show Section', 'expert-gardener' ),
			'section'     => 'expert_gardener_slider_section',
			'settings'    => 'expert_gardener_slider_setting',
			'type'        => 'checkbox'
		) 
	);
	
	for ( $expert_gardener_count = 1; $expert_gardener_count <= 4; $expert_gardener_count++ ) {

	// Add color scheme setting and control.
	$wp_customize->add_setting( 'expert_gardener_slider_page' . $expert_gardener_count, array(
		'default'           => '',
		'sanitize_callback' => 'expert_gardener_sanitize_dropdown_pages'
	) );

	$wp_customize->add_control( 'expert_gardener_slider_page' . $expert_gardener_count, array(
		'label'    => __( 'Select Slide Image Page', 'expert-gardener' ),
		'section'  => 'expert_gardener_slider_section',
		'type'     => 'dropdown-pages'
	) );
	}

	// Slider Text
	$wp_customize->add_setting( 
    	'expert_gardener_slider_short_heading',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'sanitize_text_field',
			'priority'      => 1,
		)
	);	

	$wp_customize->add_control( 
		'expert_gardener_slider_short_heading',
		array(
		    'label'   		=> __('Slider Top Text','expert-gardener'),
		    'section'		=> 'expert_gardener_slider_section',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)
	);

	$wp_customize->add_setting(
    	'expert_gardener_slider_btn_text',
    	array(
			'default' => 'BOOK APPOINTMENT',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		'expert_gardener_slider_btn_text',
		array(
		    'label'   		=> __('Slider Button Text 2','expert-gardener'),
		    'section'		=> 'expert_gardener_slider_section',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);

	$wp_customize->add_setting(
    	'expert_gardener_slider_btn_link',
    	array(
			'default' => '',
			'sanitize_callback' => 'esc_url_raw',
		)
	);
	$wp_customize->add_control( 
		'expert_gardener_slider_btn_link',
		array(
		    'label'   		=> __('Slider Button Link 2','expert-gardener'),
		    'section'		=> 'expert_gardener_slider_section',
			'type' 			=> 'url',
			'transport'         => $selective_refresh,
		)
	);

	$wp_customize->add_setting( 'expert_gardener_upgrade_page_settings_1',
        array(
            'sanitize_callback' => 'sanitize_text_field'
        )
    );
    $wp_customize->add_control( new Expert_Gardener_Control_Upgrade(
        $wp_customize, 'expert_gardener_upgrade_page_settings_1',
            array(
                'priority'      => 200,
                'section'       => 'expert_gardener_slider_section',
                'settings'      => 'expert_gardener_upgrade_page_settings_1',
                'label'         => __( 'LED TV Pro comes with additional features.', 'expert-gardener' ),
                'choices'       => array( __( '12+ Sections', 'expert-gardener' ), __( 'One Click Demo Importer', 'expert-gardener' ), __( 'Section Reordering Facility', 'expert-gardener' ),__( 'Advance Typography', 'expert-gardener' ),__( 'Easy Customization', 'expert-gardener' ),__( '24x7 Support', 'expert-gardener' ), )
            )
        )
    );

	/*=========================================
	product Section
	=========================================*/
	$wp_customize->add_section(
		'expert_gardener_our_products_section', array(
			'title' => esc_html__( 'Products Section', 'expert-gardener' ),
			'priority' => 13,
			'panel' => 'expert_gardener_frontpage_sections',
		)
	);

	// About Us Hide/ Show Setting // 
	$wp_customize->add_setting( 
		'expert_gardener_our_products_show_hide_section' , 
			array(
			'default' => true,
			'sanitize_callback' => 'expert_gardener_sanitize_checkbox',
			'capability' => 'edit_theme_options',
			'priority' => 2,
		) 
	);
	
	$wp_customize->add_control(
	'expert_gardener_our_products_show_hide_section', 
		array(
			'label'	      => esc_html__( 'Hide / Show Section', 'expert-gardener' ),
			'section'     => 'expert_gardener_our_products_section',
			'settings'    => 'expert_gardener_our_products_show_hide_section',
			'type'        => 'checkbox'
		) 
	);

	// About Heading
	$wp_customize->add_setting( 
    	'expert_gardener_our_products_heading_section',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);	

	$wp_customize->add_control( 
		'expert_gardener_our_products_heading_section',
		array(
		    'label'   		=> __('Add Heading','expert-gardener'),
		    'section'		=> 'expert_gardener_our_products_section',
			'type' 			=> 'text',
		)
	);

	$expert_gardener_args = array(
	    'type'           => 'product',
	    'child_of'       => 0,
	    'parent'         => '',
	    'orderby'        => 'term_group',
	    'order'          => 'ASC',
	    'hide_empty'     => false,
	    'hierarchical'   => 1,
	    'number'         => '',
	    'taxonomy'       => 'product_cat',
	    'pad_counts'     => false
	);
	$categories = get_categories($expert_gardener_args);
	$expert_gardener_cats = array();
	$i = 0;
	foreach ($categories as $category) {
	    if ($i == 0) {
	        $default = $category->slug;
	        $i++;
	    }
	    $expert_gardener_cats[$category->slug] = $category->name;
	}

	// Set the default value to "none"
	$expert_gardener_default_value = 'product_cat1';

	$wp_customize->add_setting(
	    'expert_gardener_our_product_product_category',
	    array(
	        'default'           => $expert_gardener_default_value,
	        'sanitize_callback' => 'expert_gardener_sanitize_select',
	    )
	);

	// Add "None" as an option in the select dropdown
	$expert_gardener_cats_with_none = array_merge(array('none' => 'None'), $expert_gardener_cats);

	$wp_customize->add_control(
	    'expert_gardener_our_product_product_category',
	    array(
	        'type'    => 'select',
	        'choices' => $expert_gardener_cats_with_none,
	        'label'   => __('Select Trending Products Category', 'expert-gardener'),
	        'section' => 'expert_gardener_our_products_section',
	    )
	);

	$wp_customize->add_setting( 'expert_gardener_upgrade_page_settings_16',
        array(
            'sanitize_callback' => 'sanitize_text_field'
        )
    );
    $wp_customize->add_control( new Expert_Gardener_Control_Upgrade(
        $wp_customize, 'expert_gardener_upgrade_page_settings_16',
            array(
                'priority'      => 200,
                'section'       => 'expert_gardener_our_products_section',
                'settings'      => 'expert_gardener_upgrade_page_settings_16',
                'label'         => __( 'LED TV Pro comes with additional features.', 'expert-gardener' ),
                'choices'       => array( __( '12+ Sections', 'expert-gardener' ), __( 'One Click Demo Importer', 'expert-gardener' ), __( 'Section Reordering Facility', 'expert-gardener' ),__( 'Advance Typography', 'expert-gardener' ),__( 'Easy Customization', 'expert-gardener' ),__( '24x7 Support', 'expert-gardener' ), )
            )
        )
    ); 
    	
}

add_action( 'customize_register', 'expert_gardener_blog_setting' );

// service selective refresh
function expert_gardener_blog_section_partials( $wp_customize ){	
	// blog_title
	$wp_customize->selective_refresh->add_partial( 'blog_title', array(
		'selector'            => '.home-blog .title h6',
		'settings'            => 'blog_title',
		'render_callback'  => 'expert_gardener_blog_title_render_callback',
	
	) );
	
	// blog_subtitle
	$wp_customize->selective_refresh->add_partial( 'blog_subtitle', array(
		'selector'            => '.home-blog .title h2',
		'settings'            => 'blog_subtitle',
		'render_callback'  => 'expert_gardener_blog_subtitle_render_callback',
	
	) );
	
	// blog_description
	$wp_customize->selective_refresh->add_partial( 'blog_description', array(
		'selector'            => '.home-blog .title p',
		'settings'            => 'blog_description',
		'render_callback'  => 'expert_gardener_blog_description_render_callback',
	
	) );	
	}

add_action( 'customize_register', 'expert_gardener_blog_section_partials' );

// blog_title
function expert_gardener_blog_title_render_callback() {
	return get_theme_mod( 'blog_title' );
}

// blog_subtitle
function expert_gardener_blog_subtitle_render_callback() {
	return get_theme_mod( 'blog_subtitle' );
}

// service description
function expert_gardener_blog_description_render_callback() {
	return get_theme_mod( 'blog_description' );
}