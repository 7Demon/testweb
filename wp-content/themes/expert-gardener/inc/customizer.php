<?php
/**
 * Expert Gardener Theme Customizer.
 *
 * @package Expert Gardener
 */

 if ( ! class_exists( 'Expert_Gardener_Customizer' ) ) {

	/**
	 * Customizer Loader
	 *
	 * @since 1.0.0
	 */
	class Expert_Gardener_Customizer {

		/**
		 * Instance
		 *
		 * @access private
		 * @var object
		 */
		private static $expert_gardener_instance;

		/**
		 * Initiator
		 */
		public static function get_instance() {
			if ( ! isset( self::$expert_gardener_instance ) ) {
				self::$expert_gardener_instance = new self;
			}
			return self::$expert_gardener_instance;
		}

		/**
		 * Constructor
		 */
		public function __construct() {
			/**
			 * Customizer
			 */
			add_action( 'customize_preview_init',                  array( $this, 'Expert_Gardener_Customize_preview_js' ) );
			add_action( 'customize_controls_enqueue_scripts', 	   array( $this, 'Expert_Gardener_Customizer_script' ) );
			add_action( 'customize_register',                      array( $this, 'Expert_Gardener_Customizer_register' ) );
			add_action( 'after_setup_theme',                       array( $this, 'Expert_Gardener_Customizer_settings' ) );
		}
		
		/**
		 * Add postMessage support for site title and description for the Theme Customizer.
		 *
		 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
		 */
		function Expert_Gardener_Customizer_register( $wp_customize ) {
			
			$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
			$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
			$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
			$wp_customize->get_setting( 'background_color' )->transport = 'postMessage';
			$wp_customize->get_setting('custom_logo')->transport = 'refresh';			
			
			/**
			 * Helper files
			 */
			require EXPERT_GARDENER_PARENT_INC_DIR . '/customizer/sanitization.php';
		} 
		
		/**
		 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
		 */
		function Expert_Gardener_Customize_preview_js() {
			wp_enqueue_script( 'expert-gardener-customizer', EXPERT_GARDENER_PARENT_INC_URI . '/customizer/assets/js/customizer-preview.js', array( 'customize-preview' ), '20151215', true );
		}		
		
		function Expert_Gardener_Customizer_script() {
			 wp_enqueue_script( 'expert-gardener-customizer-section', EXPERT_GARDENER_PARENT_INC_URI .'/customizer/assets/js/customizer-section.js', array("jquery"),'', true  );
		}

		// Include customizer customizer settings.
			
		function Expert_Gardener_Customizer_settings() {
			require EXPERT_GARDENER_PARENT_INC_DIR . '/customizer/customizer-options/header.php';
			require EXPERT_GARDENER_PARENT_INC_DIR . '/customizer/customizer-options/upper-header.php';
			require EXPERT_GARDENER_PARENT_INC_DIR . '/customizer/customizer-options/frontpage.php';
			require EXPERT_GARDENER_PARENT_INC_DIR . '/customizer/customizer-options/footer.php';
			require EXPERT_GARDENER_PARENT_INC_DIR . '/customizer/customizer-options/post.php';
			require EXPERT_GARDENER_PARENT_INC_DIR . '/customizer/customizer-options/sidebar-option.php';
			require EXPERT_GARDENER_PARENT_INC_DIR . '/customizer/customizer-options/typography.php';
			require EXPERT_GARDENER_PARENT_INC_DIR . '/customizer/customizer-pro/customizer-upgrade-class.php';
			require EXPERT_GARDENER_PARENT_INC_DIR . '/customizer/customizer-options/general.php';
			require EXPERT_GARDENER_PARENT_INC_DIR . '/customizer/customizer-pro/class-customize.php';
		}

	}
}

/**
 *  Kicking this off by calling 'get_instance()' method
 */
Expert_Gardener_Customizer::get_instance();