<?php

/**
 * excerpt lenth.
 */
if (!function_exists('restaurant_elementor_custom_excerpt_length')) :
    function restaurant_elementor_custom_excerpt_length($length)
    {
        if (is_admin()) {
            return $length;
        }

        $excpt_length = get_theme_mod('restaurant_elementor_excerpt_general_section','55');
        if (!empty($excpt_length)) {
            return $excpt_length;
        }
        return 55;
    }
endif;
add_filter('excerpt_length', 'restaurant_elementor_custom_excerpt_length');

function restaurant_elementor_excerpt_more( $more ) {
	if ( is_admin() ) {
        return $more;
    }

    return '...';
}
add_filter('excerpt_more', 'restaurant_elementor_excerpt_more');

function restaurant_elementor_set_post_view() {
    $key = 'post_views_count';
    $post_id = get_the_ID();
    $count = (int) get_post_meta( $post_id, $key, true );
    $count++;
    update_post_meta( $post_id, $key, $count );
}
?>