<?php
/**
 * Template part for displaying single posts content.
 *
 *
 * @subpackage restaurant-elementor
 * @since 1.0 
 */

?>

<?php 
$display_author = get_theme_mod('restaurant_elementor_enable_author_single_section',true); 
$display_comment = get_theme_mod('restaurant_elementor_enable_comment_single_section',true); 
$display_date = get_theme_mod('restaurant_elementor_enable_date_single_section',true); 
$display_tags = get_theme_mod('restaurant_elementor_enable_tags_single_section',true); 
$display_image = get_theme_mod('restaurant_elementor_enable_fimage_single_section',true); 
?>

<div class="blog-detail">
    <?php if($display_image && has_post_thumbnail()) { 
            the_post_thumbnail(); 
        } ?>

    <?php //if(class_exists( 'WooCommerce')) { ?> 
        <?php if(class_exists( 'WooCommerce') && !is_product()) { ?> 
        <ul class="post-meta text-left">

            <?php if($display_author) { ?>
            <li>
                <i class="fa fa-user"></i>
                <?php restaurant_elementor_posted_by(); ?>
            </li>
            <?php } ?>

            <?php if($display_comment) { ?>
            <li>
                <i class="fa fa-comments"></i>
                <?php echo esc_html(get_comments_number());  ?>
            </li>
            <?php } ?>

            <?php if($display_date) { ?>
            <li>
                <i class="fa fa-calendar"></i>
                <?php restaurant_elementor_posted_on(); ?>
            </li>
            <?php } ?>

        </ul>
        <?php } ?>  
    <?php //} ?>  

    <h4 class="text-capitalize"><?php the_title(); ?></h4>
   
   <?php the_content(); ?>
   
   <?php wp_link_pages(); ?>

    <?php if($display_tags && has_tag()) { ?>
    <div class="post-tags mt-4">
        <span class="text-capitalize mr-2 c-black">
            <i class="fa fa-tags"></i> <?php esc_html__("tags:",''); ?></span>
            <?php the_tags('', ', ', '<br />'); ?>
    </div>
    <?php } ?>

   
</div>