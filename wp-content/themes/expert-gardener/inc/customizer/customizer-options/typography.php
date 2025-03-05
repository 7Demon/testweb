<?php
function expert_gardener_typography_setting( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	$wp_customize->add_panel(
		'expert_gardener_typography', array(
			'priority' => 31,
			'title' => esc_html__( 'Typography', 'expert-gardener' ),
		)
	);

	/*=========================================
	Archive Post  Section
	=========================================*/
	$wp_customize->add_section(
		'expert_gardener_typography_settings', array(
			'title' => esc_html__( 'Typography Option', 'expert-gardener' ),
			'priority' => 1,
			'panel' => 'expert_gardener_typography',
		)
	);
	$expert_gardener_font_choices = array(
		'' => 'Select',
		'Source Sans Pro:400,700,400italic,700italic' => 'Source Sans Pro',
		'Open Sans:400italic,700italic,400,700' => 'Open Sans',
		'Oswald:400,700' => 'Oswald',
		'Playfair Display:400,700,400italic' => 'Playfair Display',
		'Montserrat:400,700' => 'Montserrat',
		'Raleway:400,700' => 'Raleway',
		'Droid Sans:400,700' => 'Droid Sans',
		'Lato:400,700,400italic,700italic' => 'Lato',
		'Arvo:400,700,400italic,700italic' => 'Arvo',
		'Lora:400,700,400italic,700italic' => 'Lora',
		'Merriweather:400,300italic,300,400italic,700,700italic' => 'Merriweather',
		'Oxygen:400,300,700' => 'Oxygen',
		'PT Serif:400,700' => 'PT Serif',
		'PT Sans:400,700,400italic,700italic' => 'PT Sans',
		'PT Sans Narrow:400,700' => 'PT Sans Narrow',
		'Cabin:400,700,400italic' => 'Cabin',
		'Fjalla One:400' => 'Fjalla One',
		'Francois One:400' => 'Francois One',
		'Josefin Sans:400,300,600,700' => 'Josefin Sans',
		'Libre Baskerville:400,400italic,700' => 'Libre Baskerville',
		'Arimo:400,700,400italic,700italic' => 'Arimo',
		'Ubuntu:400,700,400italic,700italic' => 'Ubuntu',
		'Bitter:400,700,400italic' => 'Bitter',
		'Droid Serif:400,700,400italic,700italic' => 'Droid Serif',
		'Roboto:400,400italic,700,700italic' => 'Roboto',
		'Open Sans Condensed:700,300italic,300' => 'Open Sans Condensed',
		'Roboto Condensed:400italic,700italic,400,700' => 'Roboto Condensed',
		'Roboto Slab:400,700' => 'Roboto Slab',
		'Yanone Kaffeesatz:400,700' => 'Yanone Kaffeesatz',
		'Inter:400' => 'Inter',
		'Rokkitt:400' => 'Rokkitt',
		'Damion:400' => 'Damion',
	);

	$wp_customize->add_setting( 'expert_gardener_headings_text', array(
		'sanitize_callback' => 'expert_gardener_sanitize_fonts',
	));

	$wp_customize->add_control( 'expert_gardener_headings_text', array(
		'type' => 'select',
		'description' => __('Select your appropriate font for the headings.', 'expert-gardener'),
		'section' => 'expert_gardener_typography_settings',
		'choices' => $expert_gardener_font_choices

	));

	$wp_customize->add_setting( 'expert_gardener_body_text', array(
		'sanitize_callback' => 'expert_gardener_sanitize_fonts'
	));

	$wp_customize->add_control( 'expert_gardener_body_text', array(
		'type' => 'select',
		'description' => __( 'Select your appropriate font for the body.', 'expert-gardener' ),
		'section' => 'expert_gardener_typography_settings',
		'choices' => $expert_gardener_font_choices
	) );
	
	$wp_customize->add_section(
	'expert_gardener_dynamic_color_settings', array(
		'title' => esc_html__( 'Dynamic Color Options', 'expert-gardener' ),
		'priority' => 1,
		'panel' => 'expert_gardener_typography',
		)
	);

	$wp_customize->add_setting('expert_gardener_dynamic_color_one', array(
        'default'           => '#82B440',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'expert_gardener_dynamic_color_one', array(
        'label'    => __('First Dynamic Color', 'expert-gardener'),
        'section'  => 'expert_gardener_dynamic_color_settings',
    )));

	$wp_customize->add_setting( 'expert_gardener_upgrade_page_settings_20_color',
        array(
            'sanitize_callback' => 'sanitize_text_field'
        )
    );
    $wp_customize->add_control( new Expert_Gardener_Control_Upgrade(
        $wp_customize, 'expert_gardener_upgrade_page_settings_20_color',
            array(
                'priority'      => 200,
                'section'       => 'expert_gardener_dynamic_color_settings',
                'settings'      => 'expert_gardener_upgrade_page_settings_20_color',
                'label'         => __( 'Expert Gardener Pro comes with additional features.', 'expert-gardener' ),
                'choices'       => array( __( '12+ Sections', 'expert-gardener' ), __( 'One Click Demo Importer', 'expert-gardener' ), __( 'Section Reordering Facility', 'expert-gardener' ),__( 'Advance Typography', 'expert-gardener' ),__( 'Easy Customization', 'expert-gardener' ),__( '24x7 Support', 'expert-gardener' ), )
            )
        )
    ); 

	$wp_customize->add_setting( 'expert_gardener_upgrade_page_settings_20',
        array(
            'sanitize_callback' => 'sanitize_text_field'
        )
    );
    $wp_customize->add_control( new Expert_Gardener_Control_Upgrade(
        $wp_customize, 'expert_gardener_upgrade_page_settings_20',
            array(
                'priority'      => 200,
                'section'       => 'expert_gardener_typography_settings',
                'settings'      => 'expert_gardener_upgrade_page_settings_20',
                'label'         => __( 'Expert Gardener Pro comes with additional features.', 'expert-gardener' ),
                'choices'       => array( __( '12+ Sections', 'expert-gardener' ), __( 'One Click Demo Importer', 'expert-gardener' ), __( 'Section Reordering Facility', 'expert-gardener' ),__( 'Advance Typography', 'expert-gardener' ),__( 'Easy Customization', 'expert-gardener' ),__( '24x7 Support', 'expert-gardener' ), )
            )
        )
    ); 

}

add_action( 'customize_register', 'expert_gardener_typography_setting' );