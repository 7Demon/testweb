<?php
function expert_gardener_general_setting( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	$wp_customize->add_panel(
		'expert_gardener_general', array(
			'priority' => 31,
			'title' => esc_html__( 'General', 'expert-gardener' ),
		)
	);

	/*=========================================
	Breadcrumb  Section
	=========================================*/
	$wp_customize->add_section(
		'expert_gardener_breadcrumb_setting', array(
			'title' => esc_html__( 'Breadcrumb Section', 'expert-gardener' ),
			'priority' => 1,
			'panel' => 'expert_gardener_general',
		)
	);
	
	// Settings 
	$wp_customize->add_setting(
		'expert_gardener_breadcrumb_settings'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'expert_gardener_sanitize_text',
			'priority' => 1,
		)
	);

	$wp_customize->add_control(
	'expert_gardener_breadcrumb_settings',
		array(
			'type' => 'hidden',
			'label' => __('Settings','expert-gardener'),
			'section' => 'expert_gardener_breadcrumb_setting',
		)
	);
	
	// Breadcrumb Hide/ Show Setting // 
	$wp_customize->add_setting( 
		'expert_gardener_hs_breadcrumb' , 
			array(
			'default' => '1',
			'sanitize_callback' => 'expert_gardener_sanitize_checkbox',
			'capability' => 'edit_theme_options',
			'priority' => 2,
		) 
	);
	
	$wp_customize->add_control(
	'expert_gardener_hs_breadcrumb', 
		array(
			'label'	      => esc_html__( 'Hide / Show Section', 'expert-gardener' ),
			'section'     => 'expert_gardener_breadcrumb_setting',
			'settings'    => 'expert_gardener_hs_breadcrumb',
			'type'        => 'checkbox'
		) 
	);


	$wp_customize->add_setting(
    	'expert_gardener_breadcrumb_seprator',
    	array(
			'default' => '/',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		'expert_gardener_breadcrumb_seprator',
		array(
		    'label'   		=> __('Breadcrumb separator','expert-gardener'),
		    'section'		=> 'expert_gardener_breadcrumb_setting',
			'type' 			=> 'text',
		)  
	);

	$wp_customize->add_setting( 'expert_gardener_upgrade_page_settings_5',
        array(
            'sanitize_callback' => 'sanitize_text_field'
        )
    );
    $wp_customize->add_control( new Expert_Gardener_Control_Upgrade(
        $wp_customize, 'expert_gardener_upgrade_page_settings_5',
            array(
                'priority'      => 200,
                'section'       => 'expert_gardener_breadcrumb_setting',
                'settings'      => 'expert_gardener_upgrade_page_settings_5',
                'label'         => __( 'Expert Gardener Pro comes with additional features.', 'expert-gardener' ),
                'choices'       => array( __( '12+ Sections', 'expert-gardener' ), __( 'One Click Demo Importer', 'expert-gardener' ), __( 'Section Reordering Facility', 'expert-gardener' ),__( 'Advance Typography', 'expert-gardener' ),__( 'Easy Customization', 'expert-gardener' ),__( '24x7 Support', 'expert-gardener' ), )
            )
        )
    ); 

	/*=========================================
	Preloader Section
	=========================================*/
	$wp_customize->add_section(
		'expert_gardener_preloader_section_setting', array(
			'title' => esc_html__( 'Preloader', 'expert-gardener' ),
			'priority' => 3,
			'panel' => 'expert_gardener_general',
		)
	);

	// Preloader Hide/ Show Setting // 
	$wp_customize->add_setting( 
		'expert_gardener_preloader_setting' , 
			array(
			'sanitize_callback' => 'expert_gardener_sanitize_checkbox',
			'capability' => 'edit_theme_options',
		) 
	);
	
	$wp_customize->add_control(
	'expert_gardener_preloader_setting', 
		array(
			'label'	      => esc_html__( 'Hide / Show Preloader', 'expert-gardener' ),
			'section'     => 'expert_gardener_preloader_section_setting',
			'settings'    => 'expert_gardener_preloader_setting',
			'type'        => 'checkbox'
		) 
	);

	
	$wp_customize->add_setting(
    	'expert_gardener_preloader_text',
    	array(
			'default' => 'Loading',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		'expert_gardener_preloader_text',
		array(
		    'label'   		=> __('Preloader Text','expert-gardener'),
		    'section'		=> 'expert_gardener_preloader_section_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)
	);

	// Preloader Background Color Setting
    $wp_customize->add_setting(
        'expert_gardener_preloader_bg_color',
        array(
            'default' => '#ffffff',
            'sanitize_callback' => 'sanitize_hex_color',
            'capability' => 'edit_theme_options',
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'expert_gardener_preloader_bg_color',
            array(
                'label' => esc_html__('Preloader Background Color', 'expert-gardener'),
                'section' => 'expert_gardener_preloader_section_setting', // Adjust section if needed
                'settings' => 'expert_gardener_preloader_bg_color',
            )
        )
    );

    // Preloader Color Setting
    $wp_customize->add_setting(
        'expert_gardener_preloader_color',
        array(
            'default' => '#82B440',
            'sanitize_callback' => 'sanitize_hex_color',
            'capability' => 'edit_theme_options',
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'expert_gardener_preloader_color',
            array(
                'label' => esc_html__('Preloader Color', 'expert-gardener'),
                'section' => 'expert_gardener_preloader_section_setting', // Adjust section if needed
                'settings' => 'expert_gardener_preloader_color',
            )
        )
    );

    $wp_customize->add_setting( 'expert_gardener_upgrade_page_settings_6',
        array(
            'sanitize_callback' => 'sanitize_text_field'
        )
    );
    $wp_customize->add_control( new Expert_Gardener_Control_Upgrade(
        $wp_customize, 'expert_gardener_upgrade_page_settings_6',
            array(
                'priority'      => 200,
                'section'       => 'expert_gardener_preloader_section_setting',
                'settings'      => 'expert_gardener_upgrade_page_settings_6',
                'label'         => __( 'Expert Gardener Pro comes with additional features.', 'expert-gardener' ),
                'choices'       => array( __( '12+ Sections', 'expert-gardener' ), __( 'One Click Demo Importer', 'expert-gardener' ), __( 'Section Reordering Facility', 'expert-gardener' ),__( 'Advance Typography', 'expert-gardener' ),__( 'Easy Customization', 'expert-gardener' ),__( '24x7 Support', 'expert-gardener' ), )
            )
        )
    ); 


	/*=========================================
	Scroll To Top Section
	=========================================*/
	$wp_customize->add_section(
		'expert_gardener_scroll_to_top_section_setting', array(
			'title' => esc_html__( 'Scroll To Top', 'expert-gardener' ),
			'priority' => 3,
			'panel' => 'expert_gardener_general',
		)
	);

	// Scroll To Top Hide/ Show Setting // 
	$wp_customize->add_setting( 
		'expert_gardener_scroll_top_setting' , 
			array(
			'default' => '1',
			'sanitize_callback' => 'expert_gardener_sanitize_checkbox',
			'capability' => 'edit_theme_options',
		) 
	);
	
	$wp_customize->add_control(
	'expert_gardener_scroll_top_setting', 
		array(
			'label'	      => esc_html__( 'Hide / Show Scroll To Top', 'expert-gardener' ),
			'section'     => 'expert_gardener_scroll_to_top_section_setting',
			'settings'    => 'expert_gardener_scroll_top_setting',
			'type'        => 'checkbox'
		) 
	);

	// Scroll To Top Color Setting
	$wp_customize->add_setting(
		'expert_gardener_scroll_top_color',
		array(
			'default'           => '#fff',
			'sanitize_callback' => 'sanitize_hex_color',
			'capability'        => 'edit_theme_options',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'expert_gardener_scroll_top_color',
			array(
				'label'    => esc_html__( 'Scroll To Top Color', 'expert-gardener' ),
				'section'  => 'expert_gardener_scroll_to_top_section_setting',
				'settings' => 'expert_gardener_scroll_top_color',
			)
		)
	);

	// Scroll To Top Background Color Setting
	$wp_customize->add_setting(
		'expert_gardener_scroll_top_bg_color',
		array(
			'default'           => '#82B440',
			'sanitize_callback' => 'sanitize_hex_color',
			'capability'        => 'edit_theme_options',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'expert_gardener_scroll_top_bg_color',
			array(
				'label'    => esc_html__( 'Scroll To Top Background Color', 'expert-gardener' ),
				'section'  => 'expert_gardener_scroll_to_top_section_setting',
				'settings' => 'expert_gardener_scroll_top_bg_color',
			)
		)
	);

	 $wp_customize->add_setting( 'expert_gardener_upgrade_page_settings_7',
        array(
            'sanitize_callback' => 'sanitize_text_field'
        )
    );
    $wp_customize->add_control( new Expert_Gardener_Control_Upgrade(
        $wp_customize, 'expert_gardener_upgrade_page_settings_7',
            array(
                'priority'      => 200,
                'section'       => 'expert_gardener_scroll_to_top_section_setting',
                'settings'      => 'expert_gardener_upgrade_page_settings_7',
                'label'         => __( 'Expert Gardener Pro comes with additional features.', 'expert-gardener' ),
                'choices'       => array( __( '12+ Sections', 'expert-gardener' ), __( 'One Click Demo Importer', 'expert-gardener' ), __( 'Section Reordering Facility', 'expert-gardener' ),__( 'Advance Typography', 'expert-gardener' ),__( 'Easy Customization', 'expert-gardener' ),__( '24x7 Support', 'expert-gardener' ), )
            )
        )
    ); 

	/*=========================================
	Woocommerce Section
	=========================================*/
	$wp_customize->add_section(
		'expert_gardener_woocommerce_section_setting', array(
			'title' => esc_html__( 'Woocommerce Settings', 'expert-gardener' ),
			'priority' => 3,
			'panel' => 'woocommerce',
		)
	);

	$wp_customize->add_setting(
    	'expert_gardener_custom_shop_per_columns',
    	array(
			'default' => '3',
			'sanitize_callback' => 'absint',
		)
	);	
	$wp_customize->add_control( 
		'expert_gardener_custom_shop_per_columns',
		array(
		    'label'   		=> __('Product Per Columns','expert-gardener'),
		    'section'		=> 'expert_gardener_woocommerce_section_setting',
			'type' 			=> 'number',
			'transport'         => $selective_refresh,
		)  
	);

	$wp_customize->add_setting(
    	'expert_gardener_custom_shop_product_per_page',
    	array(
			'default' => '9',
			'sanitize_callback' => 'absint',
		)
	);	
	$wp_customize->add_control( 
		'expert_gardener_custom_shop_product_per_page',
		array(
		    'label'   		=> __('Product Per Page','expert-gardener'),
		    'section'		=> 'expert_gardener_woocommerce_section_setting',
			'type' 			=> 'number',
			'transport'         => $selective_refresh,
		)  
	);

	// Woocommerce Sidebar Hide/ Show Setting // 
	$wp_customize->add_setting( 
		'expert_gardener_wocommerce_sidebar_setting' , 
			array(
			'default' => '1',
			'sanitize_callback' => 'expert_gardener_sanitize_checkbox',
			'capability' => 'edit_theme_options',
		) 
	);
	
	$wp_customize->add_control(
	'expert_gardener_wocommerce_sidebar_setting', 
		array(
			'label'	      => esc_html__( 'Hide / Show Woocommerce Sidebar', 'expert-gardener' ),
			'section'     => 'expert_gardener_woocommerce_section_setting',
			'settings'    => 'expert_gardener_wocommerce_sidebar_setting',
			'type'        => 'checkbox'
		)
	);
	
	$wp_customize->add_setting( 'expert_gardener_upgrade_page_settings_8',
		array(
			'sanitize_callback' => 'sanitize_text_field'
		)
	);
	$wp_customize->add_control( new Expert_Gardener_Control_Upgrade(
		$wp_customize, 'expert_gardener_upgrade_page_settings_8',
			array(
				'priority'      => 200,
				'section'       => 'woocommerce_section_setting',
				'settings'      => 'expert_gardener_upgrade_page_settings_8',
				'label'         => __( 'Expert Gardener Pro comes with additional features.', 'expert-gardener' ),
				'choices'       => array( __( '12+ Sections', 'expert-gardener' ), __( 'One Click Demo Importer', 'expert-gardener' ), __( 'Section Reordering Facility', 'expert-gardener' ),__( 'Advance Typography', 'expert-gardener' ),__( 'Easy Customization', 'expert-gardener' ),__( '24x7 Support', 'expert-gardener' ), )
			)
		)
	); 

	/*=========================================
	Sticky Header Section
	=========================================*/
	$wp_customize->add_section(
		'sticky_header_section_setting', array(
			'title' => esc_html__( 'Sticky Header Settings', 'expert-gardener' ),
			'priority' => 3,
			'panel' => 'expert_gardener_general',
		)
	);

	// Sticky Header Hide/ Show Setting // 
	$wp_customize->add_setting( 
		'expert_gardener_sticky_header' , 
			array(
			'sanitize_callback' => 'expert_gardener_sanitize_checkbox',
			'capability' => 'edit_theme_options',
		) 
	);

	$wp_customize->add_control(
	'expert_gardener_sticky_header', 
		array(
			'label'	      => esc_html__( 'Hide / Show Sticky Header', 'expert-gardener' ),
			'section'     => 'sticky_header_section_setting',
			'settings'    => 'expert_gardener_sticky_header',
			'type'        => 'checkbox'
		) 
	);

	$wp_customize->add_setting( 'expert_gardener_upgrade_page_settings_9',
		array(
			'sanitize_callback' => 'sanitize_text_field'
		)
	);
	$wp_customize->add_control( new Expert_Gardener_Control_Upgrade(
		$wp_customize, 'expert_gardener_upgrade_page_settings_9',
			array(
				'priority'      => 200,
				'section'       => 'sticky_header_section_setting',
				'settings'      => 'expert_gardener_upgrade_page_settings_9',
				'label'         => __( 'Expert Gardener Pro comes with additional features.', 'expert-gardener' ),
				'choices'       => array( __( '12+ Sections', 'expert-gardener' ), __( 'One Click Demo Importer', 'expert-gardener' ), __( 'Section Reordering Facility', 'expert-gardener' ),__( 'Advance Typography', 'expert-gardener' ),__( 'Easy Customization', 'expert-gardener' ),__( '24x7 Support', 'expert-gardener' ), )
			)
		)
	); 

	/*=========================================
	404 Section
	=========================================*/
	$wp_customize->add_section(
		'expert_gardener_404_section', array(
			'title' => esc_html__( '404 Section', 'expert-gardener' ),
			'priority' => 1,
			'panel' => 'expert_gardener_general',
		)
	);

	$wp_customize->add_setting(
		'expert_gardener_404_title',
		array(
			'default' => '404',
			'sanitize_callback' => 'sanitize_text_field',
			'priority' => 2,
		)
	);	
	$wp_customize->add_control( 
		'expert_gardener_404_title',
		array(
			'label'   		=> __('404 Heading','expert-gardener'),
			'section'		=> 'expert_gardener_404_section',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);

	$wp_customize->add_setting(
		'expert_gardener_404_Text',
		array(
			'default' => 'Page Not Found',
			'sanitize_callback' => 'sanitize_text_field',
			'priority' => 2,
		)
	);	
	$wp_customize->add_control( 
		'expert_gardener_404_Text',
		array(
			'label'   		=> __('404 Title','expert-gardener'),
			'section'		=> 'expert_gardener_404_section',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);

	$wp_customize->add_setting(
		'expert_gardener_404_content',
		array(
			'default' => 'The page you were looking for could not be found.',
			'sanitize_callback' => 'sanitize_text_field',
			'priority' => 2,
		)
	);	
	$wp_customize->add_control( 
		'expert_gardener_404_content',
		array(
			'label'   		=> __('404 Content','expert-gardener'),
			'section'		=> 'expert_gardener_404_section',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);

	$wp_customize->add_setting( 'expert_gardener_upgrade_page_settings_10',
		array(
			'sanitize_callback' => 'sanitize_text_field'
		)
	);
	$wp_customize->add_control( new Expert_Gardener_Control_Upgrade(
		$wp_customize, 'expert_gardener_upgrade_page_settings_10',
			array(
				'priority'      => 200,
				'section'       => 'expert_gardener_404_section',
				'settings'      => 'expert_gardener_upgrade_page_settings_10',
				'label'         => __( 'Expert Gardener Pro comes with additional features.', 'expert-gardener' ),
				'choices'       => array( __( '12+ Sections', 'expert-gardener' ), __( 'One Click Demo Importer', 'expert-gardener' ), __( 'Section Reordering Facility', 'expert-gardener' ),__( 'Advance Typography', 'expert-gardener' ),__( 'Easy Customization', 'expert-gardener' ),__( '24x7 Support', 'expert-gardener' ), )
			)
		)
	); 

}

add_action( 'customize_register', 'expert_gardener_general_setting' );