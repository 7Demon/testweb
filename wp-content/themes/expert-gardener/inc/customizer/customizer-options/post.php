<?php
function expert_gardener_post_setting( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	$wp_customize->add_panel(
		'expert_gardener_post', array(
			'priority' => 31,
			'title' => esc_html__( 'Post Option', 'expert-gardener' ),
		)
	);

	/*=========================================
	Archive Post  Section
	=========================================*/
	$wp_customize->add_section(
		'expert_gardener_archive_post_setting', array(
			'title' => esc_html__( 'Archive Post', 'expert-gardener' ),
			'priority' => 1,
			'panel' => 'expert_gardener_post',
		)
	);

	// Layouts Post
	$wp_customize->add_setting('expert_gardener_blog_layout_option_setting',array(
	  'default' => 'Default',
	  'sanitize_callback' => 'expert_gardener_sanitize_choices'
	));
	$wp_customize->add_control(new Expert_Gardener_Image_Radio_Control($wp_customize, 'expert_gardener_blog_layout_option_setting', array(
	  'type' => 'select',
	  'label' => __('Blog Post Layouts','expert-gardener'),
	  'section' => 'expert_gardener_archive_post_setting',
	  'choices' => array(
		'Default' => esc_url(get_template_directory_uri()).'/assets/images/layout-1.png',
		'Left' => esc_url(get_template_directory_uri()).'/assets/images/layout-2.png',
		'Right' => esc_url(get_template_directory_uri()).'/assets/images/layout-3.png',
	))));
		
	// Post Heading Hide/ Show Setting // 
	$wp_customize->add_setting( 
		'expert_gardener_post_heading_settings' , 
			array(
			'default' => '1',
			'sanitize_callback' => 'expert_gardener_sanitize_checkbox',
			'capability' => 'edit_theme_options',
			'priority' => 2,
		) 
	);
	
	$wp_customize->add_control(
		'expert_gardener_post_heading_settings', 
		array(
			'label'	      => esc_html__( 'Hide / Show Post Heading', 'expert-gardener' ),
			'section'     => 'expert_gardener_archive_post_setting',
			'settings'    => 'expert_gardener_post_heading_settings',
			'type'        => 'checkbox'
		) 
	);

	// Post Content Hide/ Show Setting // 
	$wp_customize->add_setting( 
		'expert_gardener_post_content_settings' , 
			array(
			'default' => '1',
			'sanitize_callback' => 'expert_gardener_sanitize_checkbox',
			'capability' => 'edit_theme_options',
			'priority' => 2,
		) 
	);
	
	$wp_customize->add_control(
	'expert_gardener_post_content_settings', 
		array(
			'label'	      => esc_html__( 'Hide / Show Post Content', 'expert-gardener' ),
			'section'     => 'expert_gardener_archive_post_setting',
			'settings'    => 'expert_gardener_post_content_settings',
			'type'        => 'checkbox'
		) 
	);

	// Post Featured Hide/ Show Setting // 
	$wp_customize->add_setting( 
		'expert_gardener_post_featured_image_settings' , 
			array(
			'default' => '1',
			'sanitize_callback' => 'expert_gardener_sanitize_checkbox',
			'capability' => 'edit_theme_options',
			'priority' => 2,
		) 
	);
	
	$wp_customize->add_control(
	'expert_gardener_post_featured_image_settings', 
		array(
			'label'	      => esc_html__( 'Hide / Show Post Feature Image', 'expert-gardener' ),
			'section'     => 'expert_gardener_archive_post_setting',
			'settings'    => 'expert_gardener_post_featured_image_settings',
			'type'        => 'checkbox'
		) 
	);

	// Post Date Hide/ Show Setting // 
	$wp_customize->add_setting( 
		'expert_gardener_post_date_settings' , 
			array(
			'default' => '1',
			'sanitize_callback' => 'expert_gardener_sanitize_checkbox',
			'capability' => 'edit_theme_options',
			'priority' => 2,
		) 
	);
	
	$wp_customize->add_control(
	'expert_gardener_post_date_settings', 
		array(
			'label'	      => esc_html__( 'Hide / Show Post Date', 'expert-gardener' ),
			'section'     => 'expert_gardener_archive_post_setting',
			'settings'    => 'expert_gardener_post_date_settings',
			'type'        => 'checkbox'
		) 
	);

	// Post Date Hide/ Show Setting // 
	$wp_customize->add_setting( 
		'expert_gardener_post_comments_settings' , 
			array(
			'default' => '1',
			'sanitize_callback' => 'expert_gardener_sanitize_checkbox',
			'capability' => 'edit_theme_options',
			'priority' => 2,
		) 
	);
	
	$wp_customize->add_control(
	'expert_gardener_post_comments_settings', 
		array(
			'label'	      => esc_html__( 'Hide / Show Post Comment', 'expert-gardener' ),
			'section'     => 'expert_gardener_archive_post_setting',
			'settings'    => 'expert_gardener_post_comments_settings',
			'type'        => 'checkbox'
		) 
	);

	// Post Date Hide/ Show Setting // 
	$wp_customize->add_setting( 
		'expert_gardener_post_author_settings' , 
			array(
			'default' => '1',
			'sanitize_callback' => 'expert_gardener_sanitize_checkbox',
			'capability' => 'edit_theme_options',
			'priority' => 2,
		) 
	);
	
	$wp_customize->add_control(
	'expert_gardener_post_author_settings', 
		array(
			'label'	      => esc_html__( 'Hide / Show Post Author', 'expert-gardener' ),
			'section'     => 'expert_gardener_archive_post_setting',
			'settings'    => 'expert_gardener_post_author_settings',
			'type'        => 'checkbox'
		) 
	);

	// Post Timing Hide/ Show Setting // 
	$wp_customize->add_setting( 
		'expert_gardener_post_timing_settings' , 
			array(
			'default' => '1',
			'sanitize_callback' => 'expert_gardener_sanitize_checkbox',
			'capability' => 'edit_theme_options',
			'priority' => 2,
		) 
	);
	
	$wp_customize->add_control(
	'expert_gardener_post_timing_settings', 
		array(
			'label'	      => esc_html__( 'Hide / Show Post Timings', 'expert-gardener' ),
			'section'     => 'expert_gardener_archive_post_setting',
			'settings'    => 'expert_gardener_post_timing_settings',
			'type'        => 'checkbox'
		) 
	);

	// Post Tags Hide/ Show Setting // 
	$wp_customize->add_setting( 
		'expert_gardener_post_tags_settings' , 
			array(
			'default' => '1',
			'sanitize_callback' => 'expert_gardener_sanitize_checkbox',
			'capability' => 'edit_theme_options',
			'priority' => 2,
		) 
	);
	
	$wp_customize->add_control(
	'expert_gardener_post_tags_settings', 
		array(
			'label'	      => esc_html__( 'Hide / Show Post Tags', 'expert-gardener' ),
			'section'     => 'expert_gardener_archive_post_setting',
			'settings'    => 'expert_gardener_post_tags_settings',
			'type'        => 'checkbox'
		) 
	);

	$wp_customize->add_setting('expert_gardener_excerpt_limit', array(
        'default'           => 50,
        'sanitize_callback' => 'absint',
    ));

    $wp_customize->add_control('expert_gardener_excerpt_limit', array(
        'label'   => __('Excerpt Word Limit', 'expert-gardener'),
        'section' => 'expert_gardener_archive_post_setting',
        'type'    => 'number',
    ));

	$wp_customize->add_setting( 'expert_gardener_upgrade_page_settings_133',
	array(
		'sanitize_callback' => 'sanitize_text_field'
		)
	);
	$wp_customize->add_control( new Expert_Gardener_Control_Upgrade(
		$wp_customize, 'expert_gardener_upgrade_page_settings_133',
			array(
				'priority'      => 200,
				'section'       => 'expert_gardener_archive_post_setting',
				'settings'      => 'expert_gardener_upgrade_page_settings_133',
				'label'         => __( 'Expert Gardener Pro comes with additional features.', 'expert-gardener' ),
				'choices'       => array( __( '12+ Sections', 'expert-gardener' ), __( 'One Click Demo Importer', 'expert-gardener' ), __( 'Section Reordering Facility', 'expert-gardener' ),__( 'Advance Typography', 'expert-gardener' ),__( 'Easy Customization', 'expert-gardener' ),__( '24x7 Support', 'expert-gardener' ), )
			)
		)
	); 

	/*=========================================
	Single Post  Section
	=========================================*/
	$wp_customize->add_section(
		'expert_gardener_single_post', array(
			'title' => esc_html__( 'Single Post', 'expert-gardener' ),
			'priority' => 3,
			'panel' => 'expert_gardener_post',
		)
	);
	
	// Post Heading Hide/ Show Setting // 
	$wp_customize->add_setting( 
		'expert_gardener_single_post_heading_settings' , 
			array(
			'default' => '1',
			'sanitize_callback' => 'expert_gardener_sanitize_checkbox',
			'capability' => 'edit_theme_options',
			'priority' => 2,
		) 
	);
	
	$wp_customize->add_control(
	'expert_gardener_single_post_heading_settings', 
		array(
			'label'	      => esc_html__( 'Hide / Show Post Heading', 'expert-gardener' ),
			'section'     => 'expert_gardener_single_post',
			'settings'    => 'expert_gardener_single_post_heading_settings',
			'type'        => 'checkbox'
		) 
	);

	// Post Content Hide/ Show Setting // 
	$wp_customize->add_setting( 
		'expert_gardener_single_post_content_settings' , 
			array(
			'default' => '1',
			'sanitize_callback' => 'expert_gardener_sanitize_checkbox',
			'capability' => 'edit_theme_options',
			'priority' => 2,
		) 
	);
	
	$wp_customize->add_control(
	'expert_gardener_single_post_content_settings', 
		array(
			'label'	      => esc_html__( 'Hide / Show Post Content', 'expert-gardener' ),
			'section'     => 'expert_gardener_single_post',
			'settings'    => 'expert_gardener_single_post_content_settings',
			'type'        => 'checkbox'
		) 
	);

	// Post Featured Hide/ Show Setting // 
	$wp_customize->add_setting( 
		'expert_gardener_single_post_featured_image_settings' , 
			array(
			'default' => '1',
			'sanitize_callback' => 'expert_gardener_sanitize_checkbox',
			'capability' => 'edit_theme_options',
			'priority' => 2,
		) 
	);
	
	$wp_customize->add_control(
	'expert_gardener_single_post_featured_image_settings', 
		array(
			'label'	      => esc_html__( 'Hide / Show Post Feature Image', 'expert-gardener' ),
			'section'     => 'expert_gardener_single_post',
			'settings'    => 'expert_gardener_single_post_featured_image_settings',
			'type'        => 'checkbox'
		) 
	);

	// Post Date Hide/ Show Setting // 
	$wp_customize->add_setting( 
		'expert_gardener_single_post_date_settings' , 
			array(
			'default' => '1',
			'sanitize_callback' => 'expert_gardener_sanitize_checkbox',
			'capability' => 'edit_theme_options',
			'priority' => 2,
		) 
	);
	
	$wp_customize->add_control(
	'expert_gardener_single_post_date_settings', 
		array(
			'label'	      => esc_html__( 'Hide / Show Post Date', 'expert-gardener' ),
			'section'     => 'expert_gardener_single_post',
			'settings'    => 'expert_gardener_single_post_date_settings',
			'type'        => 'checkbox'
		) 
	);

	// Post Date Hide/ Show Setting // 
	$wp_customize->add_setting( 
		'expert_gardener_single_post_comments_settings' , 
			array(
			'default' => '1',
			'sanitize_callback' => 'expert_gardener_sanitize_checkbox',
			'capability' => 'edit_theme_options',
			'priority' => 2,
		) 
	);
	
	$wp_customize->add_control(
	'expert_gardener_single_post_comments_settings', 
		array(
			'label'	      => esc_html__( 'Hide / Show Post Comment', 'expert-gardener' ),
			'section'     => 'expert_gardener_single_post',
			'settings'    => 'expert_gardener_single_post_comments_settings',
			'type'        => 'checkbox'
		) 
	);

	// Post Date Hide/ Show Setting // 
	$wp_customize->add_setting( 
		'expert_gardener_single_post_author_settings' , 
			array(
			'default' => '1',
			'sanitize_callback' => 'expert_gardener_sanitize_checkbox',
			'capability' => 'edit_theme_options',
			'priority' => 2,
		) 
	);
	
	$wp_customize->add_control(
	'expert_gardener_single_post_author_settings', 
		array(
			'label'	      => esc_html__( 'Hide / Show Post Author', 'expert-gardener' ),
			'section'     => 'expert_gardener_single_post',
			'settings'    => 'expert_gardener_single_post_author_settings',
			'type'        => 'checkbox'
		) 
	);

	// Post Date Hide/ Show Setting // 
	$wp_customize->add_setting( 
		'expert_gardener_single_post_timing_settings' , 
			array(
			'default' => '1',
			'sanitize_callback' => 'expert_gardener_sanitize_checkbox',
			'capability' => 'edit_theme_options',
			'priority' => 2,
		) 
	);
	
	$wp_customize->add_control(
	'expert_gardener_single_post_timing_settings', 
		array(
			'label'	      => esc_html__( 'Hide / Show Post Timings', 'expert-gardener' ),
			'section'     => 'expert_gardener_single_post',
			'settings'    => 'expert_gardener_single_post_timing_settings',
			'type'        => 'checkbox'
		) 
	);

	// Post Tags Hide/ Show Setting // 
	$wp_customize->add_setting( 
		'expert_gardener_single_post_tags_settings' , 
			array(
			'default' => '1',
			'sanitize_callback' => 'expert_gardener_sanitize_checkbox',
			'capability' => 'edit_theme_options',
			'priority' => 2,
		) 
	);
	
	$wp_customize->add_control(
	'expert_gardener_single_post_tags_settings', 
		array(
			'label'	      => esc_html__( 'Hide / Show Post Tags', 'expert-gardener' ),
			'section'     => 'expert_gardener_single_post',
			'settings'    => 'expert_gardener_single_post_tags_settings',
			'type'        => 'checkbox'
		) 
	);

	$wp_customize->add_setting( 'expert_gardener_upgrade_page_settings_58',
	array(
		'sanitize_callback' => 'sanitize_text_field'
	)
	);
	$wp_customize->add_control( new Expert_Gardener_Control_Upgrade(
		$wp_customize, 'expert_gardener_upgrade_page_settings_58',
			array(
				'priority'      => 200,
				'section'       => 'expert_gardener_single_post',
				'settings'      => 'expert_gardener_upgrade_page_settings_58',
				'label'         => __( 'Expert Gardener Pro comes with additional features.', 'expert-gardener' ),
				'choices'       => array( __( '12+ Sections', 'expert-gardener' ), __( 'One Click Demo Importer', 'expert-gardener' ), __( 'Section Reordering Facility', 'expert-gardener' ),__( 'Advance Typography', 'expert-gardener' ),__( 'Easy Customization', 'expert-gardener' ),__( '24x7 Support', 'expert-gardener' ), )
			)
		)
	); 
}

add_action( 'customize_register', 'expert_gardener_post_setting' );