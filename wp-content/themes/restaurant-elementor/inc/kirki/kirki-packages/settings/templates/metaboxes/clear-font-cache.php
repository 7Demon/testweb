<?php
/**
 * Metabox template for displaying clear font cache.
 *
 * @package Kirki
 */

defined( 'ABSPATH' ) || die( "Can't access directly" );
?>

<div class="heatbox kirki-clear-font-cache-metabox">
	<h2><?php _e( 'Clear Font Cache', 'restaurant-elementor' ); ?></h2>
	<div class="heatbox-content">
		<p>
			<?php _e( 'In order to achieve GDPR-compliance, Kirki stores Google Fonts locally on your server.', 'restaurant-elementor' ); ?><br>
			<?php _e( 'If Google Fonts selected in the Customizer are not displayed correctly, please try clearing the font cache.', 'restaurant-elementor' ); ?>
		</p>
		<p>
			<?php _e( 'This is safe to do on production sites.', 'restaurant-elementor' ); ?>
		</p>
		<button
			type="button"
			class="button button-larger button-primary kirki-clear-font-cache"
			data-nonce="<?php echo esc_attr( wp_create_nonce( 'Kirki_Clear_Font_Cache' ) ); ?>"
		>
			<?php _e( 'Clear Cache', 'restaurant-elementor' ); ?>
		</button>
		<span class="submission-status is-hidden"></span>
	</div>
</div>
