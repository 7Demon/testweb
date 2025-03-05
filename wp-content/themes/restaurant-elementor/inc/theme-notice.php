<?php
/**
 * Welcome Screen Class
 */
class restaurant_elementor_screen {

	/**
	 * Constructor for the Notice
	 */
	public function __construct() {

		/* activation notice */
		add_action( 'load-themes.php', array( $this, 'restaurant_elementor_activation_admin_notice' ) );

	}
	
	public function restaurant_elementor_activation_admin_notice() {
		global $pagenow;

		if ( is_admin() && ('themes.php' == $pagenow) ) {
			add_action( 'admin_notices', array( $this, 'restaurant_elementor_admin_notice' ), 99 );
		}
	}

	
	public function restaurant_elementor_admin_notice() {
		?>			
		<div class="updated notice is-dismissible bizzmo-note">
			<h1><?php
			$theme_info = wp_get_theme();
			printf( esc_html__('Thanks for installing  %1$s ', 'restaurant-elementor'), esc_html( $theme_info->Name ), esc_html( $theme_info->Version ) ); ?>
			</h1>
			<p><?php echo  esc_html__("Welcome! Thank you for choosing cleaning elementor WordPress theme. To take full advantage of the features this theme Please Install Our Demo", "restaurant-elementor"); ?></p>
			<p class="note1"><a href="https://testerwp.com/docs/restaurant-elementor/how-to-install-restaurant-elementor-theme/" class="button button-blue-secondary button_info" style="text-decoration: none;" target="_blank"><?php echo esc_html__('Read Documentation','restaurant-elementor'); ?></a> <a href="themes.php?page=texture_started" target="_blank" class="button button-blue-secondary button_info" style="text-decoration: none;"><?php echo esc_html__('View Details','restaurant-elementor'); ?></a></p>
		</div>
		<?php
	}
	
}

$GLOBALS['restaurant_elementor_screen'] = new restaurant_elementor_screen();

function restaurant_elementor_scripts_fn() {

    global $restaurant_elementor_theme_version;

 
    wp_enqueue_script('custm-script', get_template_directory_uri() . '/assets/js/custm-script.js', array(), '', true);
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'admin_enqueue_scripts', 'restaurant_elementor_scripts_fn' );


?>