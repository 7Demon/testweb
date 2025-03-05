<?php
function expert_gardener_upper_header_settings( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';

	/*=========================================
	top header
	=========================================*/
	$wp_customize->add_section(
        'expert_gardener_topbar',
        array(
        	'priority'      => 3,
            'title' 		=> __('Header Information','expert-gardener'),
			'panel'  		=> 'expert_gardener_header_section',
		)
    );
    
	$wp_customize->add_setting('expert_gardener_mail',array(
		'default'=> 'info@example.com',
		'sanitize_callback'	=> 'sanitize_email'
	));
	$wp_customize->add_control('expert_gardener_mail',array(
		'label'	=> __('Add Mail Address','expert-gardener'),
		'section'=> 'expert_gardener_topbar',
		'type'=> 'text'
	));

	$wp_customize->add_setting(
		'expert_gardener_call',
		array(
			'default'=> '1800 1200 110',
			'sanitize_callback'	=> 'expert_gardener_sanitize_phone_number'
		)
	);
	$wp_customize->add_control(
		'expert_gardener_call',array(
			'label'	=> __('Add Phone Number','expert-gardener'),
			'section'=> 'expert_gardener_topbar',
			'type'=> 'text'
		)
	);

	$wp_customize->add_setting( 'expert_gardener_upgrade_page_settings_5890',
	array(
		'sanitize_callback' => 'sanitize_text_field'
	)
	);
	$wp_customize->add_control( new Expert_Gardener_Control_Upgrade(
		$wp_customize, 'expert_gardener_upgrade_page_settings_5890',
			array(
				'priority'      => 200,
				'section'       => 'expert_gardener_topbar',
				'settings'      => 'expert_gardener_upgrade_page_settings_5890',
				'label'         => __( 'Expert Gardener Pro comes with additional features.', 'expert-gardener' ),
				'choices'       => array( __( '12+ Sections', 'expert-gardener' ), __( 'One Click Demo Importer', 'expert-gardener' ), __( 'Section Reordering Facility', 'expert-gardener' ),__( 'Advance Typography', 'expert-gardener' ),__( 'Easy Customization', 'expert-gardener' ),__( '24x7 Support', 'expert-gardener' ), )
			)
		)
	);

	// Social Link
	$wp_customize->add_section( 'expert_gardener_social_media', array(
    	'title'      => __( 'Social Media Links', 'expert-gardener' ),
    	'description' => __( 'Add your Social Links', 'expert-gardener' ),
		'panel' => 'expert_gardener_header_section',
      'priority' => 4,
	) );

	$wp_customize->add_setting('expert_gardener_facebook_url',array(
		'default'=> '#',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('expert_gardener_facebook_url',array(
		'label'	=> __('Facebook Link','expert-gardener'),
		'section'=> 'expert_gardener_social_media',
		'type'=> 'url'
	));

	$wp_customize->add_setting('expert_gardener_twitter_url',array(
		'default'=> '#',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('expert_gardener_twitter_url',array(
		'label'	=> __('Twitter Link','expert-gardener'),
		'section'=> 'expert_gardener_social_media',
		'type'=> 'url'
	));
	
	$wp_customize->add_setting('expert_gardener_instagram_url',array(
		'default'=> '#',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('expert_gardener_instagram_url',array(
		'label'	=> __('Instagram Link','expert-gardener'),
		'section'=> 'expert_gardener_social_media',
		'type'=> 'url'
	));

	$wp_customize->add_setting('expert_gardener_youtube_url',array(
		'default'=> '#s',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('expert_gardener_youtube_url',array(
		'label'	=> __('Youtube Link','expert-gardener'),
		'section'=> 'expert_gardener_social_media',
		'type'=> 'url'
	));

	$wp_customize->add_setting( 'expert_gardener_upgrade_page_settings_58',
	array(
		'sanitize_callback' => 'sanitize_text_field'
	)
	);
	$wp_customize->add_control( new Expert_Gardener_Control_Upgrade(
		$wp_customize, 'expert_gardener_upgrade_page_settings_58',
			array(
				'priority'      => 200,
				'section'       => 'expert_gardener_social_media',
				'settings'      => 'expert_gardener_upgrade_page_settings_58',
				'label'         => __( 'Expert Gardener Pro comes with additional features.', 'expert-gardener' ),
				'choices'       => array( __( '12+ Sections', 'expert-gardener' ), __( 'One Click Demo Importer', 'expert-gardener' ), __( 'Section Reordering Facility', 'expert-gardener' ),__( 'Advance Typography', 'expert-gardener' ),__( 'Easy Customization', 'expert-gardener' ),__( '24x7 Support', 'expert-gardener' ), )
			)
		)
	);

}
add_action( 'customize_register', 'expert_gardener_upper_header_settings' );