<?php
function expert_gardener_header_settings( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';

    // Site Title Hide/ Show Setting // 
	$wp_customize->add_setting( 
		'expert_gardener_site_title_setting' , 
			array(
			'default' => '1',
			'sanitize_callback' => 'expert_gardener_sanitize_checkbox',
			'capability' => 'edit_theme_options',
		) 
	);
	
	$wp_customize->add_control(
	'expert_gardener_site_title_setting', 
		array(
			'label'	      => esc_html__( 'Hide / Show Site Title', 'expert-gardener' ),
			'section'     => 'title_tagline',
			'settings'    => 'expert_gardener_site_title_setting',
			'type'        => 'checkbox'
		) 
	);

	// Tagline Hide/ Show Setting // 
	$wp_customize->add_setting( 
		'expert_gardener_tagline_setting' , 
			array(
			'default' => '',
			'sanitize_callback' => 'expert_gardener_sanitize_checkbox',
			'capability' => 'edit_theme_options',
		) 
	);
	
	$wp_customize->add_control(
	'expert_gardener_tagline_setting', 
		array(
			'label'	      => esc_html__( 'Hide / Show Tagline', 'expert-gardener' ),
			'section'     => 'title_tagline',
			'settings'    => 'expert_gardener_tagline_setting',
			'type'        => 'checkbox'
		) 
	);

	// Add the setting for logo width
	$wp_customize->add_setting(
		'expert_gardener_logo_width',
		array(
			'default'           => '100',
			'sanitize_callback' => 'expert_gardener_sanitize_logo_width',
			'priority'          => 2,
		)
	);

	// Add control for logo width
	$wp_customize->add_control( 
		'expert_gardener_logo_width',
		array(
			'label'     => __('Logo Width', 'expert-gardener'),
			'section'   => 'title_tagline',
			'type'      => 'number',
			'input_attrs' => array(
				'min'   => 1,
				'max'   => 150,
				'step'  => 1,
			),
			'transport' => $selective_refresh,
		)  
	);
	
	$wp_customize->add_setting( 'expert_gardener_upgrade_page_settings_583',
	array(
		'sanitize_callback' => 'sanitize_text_field'
	)
	);
	$wp_customize->add_control( new Expert_Gardener_Control_Upgrade(
		$wp_customize, 'expert_gardener_upgrade_page_settings_583',
			array(
				'priority'      => 200,
				'section'       => 'title_tagline',
				'settings'      => 'expert_gardener_upgrade_page_settings_583',
				'label'         => __( 'Expert Gardener Pro comes with additional features.', 'expert-gardener' ),
				'choices'       => array( __( '12+ Sections', 'expert-gardener' ), __( 'One Click Demo Importer', 'expert-gardener' ), __( 'Section Reordering Facility', 'expert-gardener' ),__( 'Advance Typography', 'expert-gardener' ),__( 'Easy Customization', 'expert-gardener' ),__( '24x7 Support', 'expert-gardener' ), )
			)
		)
	);

	/*=========================================
	Header Settings Panel
	=========================================*/
	$wp_customize->add_panel( 
		'expert_gardener_header_section', 
		array(
			'priority'      => 2,
			'capability'    => 'edit_theme_options',
			'title'			=> __('Header', 'expert-gardener'),
		) 
	);

	/*=========================================
	Expert Gardener Site Identity
	=========================================*/
	$wp_customize->add_section(
        'title_tagline',
        array(
        	'priority'      => 1,
            'title' 		=> __('Site Identity','expert-gardener'),
			'panel'  		=> 'expert_gardener_header_section',
		)
    );

	$wp_customize->register_panel_type( 'Expert_Gardener_WP_Customize_Panel' );
	$wp_customize->register_section_type( 'Expert_Gardener_WP_Customize_Section' );

}
add_action( 'customize_register', 'expert_gardener_header_settings' );

if ( class_exists( 'WP_Customize_Panel' ) ) {
  	class Expert_Gardener_WP_Customize_Panel extends WP_Customize_Panel {
	   public $panel;
	   public $type = 'expert_gardener_panel';
	   public function json() {

	      $array = wp_array_slice_assoc( (array) $this, array( 'id', 'description', 'priority', 'type', 'panel', ) );
	      $array['title'] = html_entity_decode( $this->title, ENT_QUOTES, get_bloginfo( 'charset' ) );
	      $array['content'] = $this->get_content();
	      $array['active'] = $this->active();
	      $array['instanceNumber'] = $this->instance_number;
	      return $array;
    	}
  	}
}

if ( class_exists( 'WP_Customize_Section' ) ) {
  	class Expert_Gardener_WP_Customize_Section extends WP_Customize_Section {
	   public $section;
	   public $type = 'expert_gardener_section';
	   public function json() {

	      $array = wp_array_slice_assoc( (array) $this, array( 'id', 'description', 'priority', 'panel', 'type', 'description_hidden', 'section', ) );
	      $array['title'] = html_entity_decode( $this->title, ENT_QUOTES, get_bloginfo( 'charset' ) );
	      $array['content'] = $this->get_content();
	      $array['active'] = $this->active();
	      $array['instanceNumber'] = $this->instance_number;

	      if ( $this->panel ) {
	        $array['customizeAction'] = sprintf( 'Customizing &#9656; %s', esc_html( $this->manager->get_panel( $this->panel )->title ) );
	      } else {
	        $array['customizeAction'] = 'Customizing';
	      }
	      return $array;
    	}
  	}
}