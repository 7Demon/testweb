<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package restaurant-elementor
 */

if ( ! is_active_sidebar( 'main-sidebar' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area">
	<?php dynamic_sidebar( 'main-sidebar' ); ?>
</aside><!-- #secondary -->
