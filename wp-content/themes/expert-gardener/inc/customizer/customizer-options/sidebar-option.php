<?php
function expert_gardener_sidebar_setting( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	$wp_customize->add_panel(
		'expert_gardener_sidebar', array(
			'priority' => 31,
			'title' => esc_html__( 'Sidebar Options', 'expert-gardener' ),
		)
	);

	/*=========================================
	Sidebar Option  Section
	=========================================*/
	$wp_customize->add_section(
		'expert_gardener_sidebar_settings', array(
			'title' => esc_html__( 'Sidebar Options', 'expert-gardener' ),
			'priority' => 1,
			'panel' => 'expert_gardener_sidebar',
		)
	);
	

	// Archive Sidebar Hide/ Show Setting // 
	$wp_customize->add_setting( 
		'expert_gardener_archive_sidebar_setting' , 
			array(
			'default' => '1',
			'sanitize_callback' => 'expert_gardener_sanitize_checkbox',
			'capability' => 'edit_theme_options',
			'priority' => 2,
		) 
	);
	
	$wp_customize->add_control(
	'expert_gardener_archive_sidebar_setting', 
		array(
			'label'	      => esc_html__( 'Hide / Show Archive Sidebar', 'expert-gardener' ),
			'section'     => 'expert_gardener_sidebar_settings',
			'settings'    => 'expert_gardener_archive_sidebar_setting',
			'type'        => 'checkbox'
		) 
	);

	// Index Sidebar Hide/ Show Setting // 
	$wp_customize->add_setting( 
		'expert_gardener_index_sidebar_setting' , 
			array(
			'default' => '1',
			'sanitize_callback' => 'expert_gardener_sanitize_checkbox',
			'capability' => 'edit_theme_options',
			'priority' => 2,
		) 
	);
	
	$wp_customize->add_control(
	'expert_gardener_index_sidebar_setting', 
		array(
			'label'	      => esc_html__( 'Hide / Show Index Sidebar', 'expert-gardener' ),
			'section'     => 'expert_gardener_sidebar_settings',
			'settings'    => 'expert_gardener_index_sidebar_setting',
			'type'        => 'checkbox'
		) 
	);

	// Pages Sidebar Hide/ Show Setting // 
	$wp_customize->add_setting( 
		'expert_gardener_paged_sidebar_setting' , 
			array(
			'default' => '1',
			'sanitize_callback' => 'expert_gardener_sanitize_checkbox',
			'capability' => 'edit_theme_options',
			'priority' => 2,
		) 
	);
	
	$wp_customize->add_control(
	'expert_gardener_paged_sidebar_setting', 
		array(
			'label'	      => esc_html__( 'Hide / Show Pages Sidebar', 'expert-gardener' ),
			'section'     => 'expert_gardener_sidebar_settings',
			'settings'    => 'expert_gardener_paged_sidebar_setting',
			'type'        => 'checkbox'
		) 
	);

	// Search Result Sidebar Hide/ Show Setting // 
	$wp_customize->add_setting( 
		'expert_gardener_search_result_sidebar_setting' , 
			array(
			'default' => '1',
			'sanitize_callback' => 'expert_gardener_sanitize_checkbox',
			'capability' => 'edit_theme_options',
			'priority' => 2,
		) 
	);
	
	$wp_customize->add_control(
	'expert_gardener_search_result_sidebar_setting', 
		array(
			'label'	      => esc_html__( 'Hide / Show Search Result Sidebar', 'expert-gardener' ),
			'section'     => 'expert_gardener_sidebar_settings',
			'settings'    => 'expert_gardener_search_result_sidebar_setting',
			'type'        => 'checkbox'
		) 
	);

	// Single Post Sidebar Hide/ Show Setting // 
	$wp_customize->add_setting( 
		'expert_gardener_single_post_sidebar_setting' , 
			array(
			'default' => '1',
			'sanitize_callback' => 'expert_gardener_sanitize_checkbox',
			'capability' => 'edit_theme_options',
			'priority' => 2,
		) 
	);
	
	$wp_customize->add_control(
	'expert_gardener_single_post_sidebar_setting', 
		array(
			'label'	      => esc_html__( 'Hide / Show Single Post Sidebar', 'expert-gardener' ),
			'section'     => 'expert_gardener_sidebar_settings',
			'settings'    => 'expert_gardener_single_post_sidebar_setting',
			'type'        => 'checkbox'
		) 
	);

	// Sidebar Page Sidebar Date Hide/ Show Setting // 
	$wp_customize->add_setting( 
		'expert_gardener_single_page_sidebar_setting' , 
			array(
			'default' => '1',
			'sanitize_callback' => 'expert_gardener_sanitize_checkbox',
			'capability' => 'edit_theme_options',
			'priority' => 2,
		) 
	);
	
	$wp_customize->add_control(
	'expert_gardener_single_page_sidebar_setting', 
		array(
			'label'	      => esc_html__( 'Hide / Show Page Width Sidebar', 'expert-gardener' ),
			'section'     => 'expert_gardener_sidebar_settings',
			'settings'    => 'expert_gardener_single_page_sidebar_setting',
			'type'        => 'checkbox'
		) 
	);

	$wp_customize->add_setting( 'expert_gardener_sidebar_position', array(
        'default'   => 'right',
        'sanitize_callback' => 'expert_gardener_sanitize_sidebar_position',
    ));

    $wp_customize->add_control( 'expert_gardener_sidebar_position', array(
        'label'    => __( 'Sidebar Position', 'expert-gardener' ),
        'section'  => 'expert_gardener_sidebar_settings',
        'settings' => 'expert_gardener_sidebar_position',
        'type'     => 'radio',
        'choices'  => array(
            'right' => __( 'Right Sidebar', 'expert-gardener' ),
            'left'  => __( 'Left Sidebar', 'expert-gardener' ),
        ),
    ));

	$wp_customize->add_setting( 'expert_gardener_upgrade_page_settings_15',
        array(
            'sanitize_callback' => 'sanitize_text_field'
        )
    );
    $wp_customize->add_control( new Expert_Gardener_Control_Upgrade(
        $wp_customize, 'expert_gardener_upgrade_page_settings_15',
            array(
                'priority'      => 200,
                'section'       => 'expert_gardener_sidebar_settings',
                'settings'      => 'expert_gardener_upgrade_page_settings_15',
                'label'         => __( 'Expert Gardener Pro comes with additional features.', 'expert-gardener' ),
                'choices'       => array( __( '12+ Sections', 'expert-gardener' ), __( 'One Click Demo Importer', 'expert-gardener' ), __( 'Section Reordering Facility', 'expert-gardener' ),__( 'Advance Typography', 'expert-gardener' ),__( 'Easy Customization', 'expert-gardener' ),__( '24x7 Support', 'expert-gardener' ), )
            )
        )
    );
}

add_action( 'customize_register', 'expert_gardener_sidebar_setting' );