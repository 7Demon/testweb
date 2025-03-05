<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package restaurant-elementor
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>


<?php 
$display_topheader = get_theme_mod('restaurant_elementor_enable_top_header_section',false);
$enable_stickyheader = get_theme_mod('restaurant_elementor_enable_sticky_header',true);
$enable_preloader = get_theme_mod('restaurant_elementor_enable_preloader',true);
$display_social_icon = get_theme_mod('restaurant_elementor_enable_social_top_header_section',false);
$facebook_url = get_theme_mod('restaurant_elementor_social_fb_button_link','');
$twitter_url = get_theme_mod('restaurant_elementor_social_tw_button_link','');
$instagram_url = get_theme_mod('restaurant_elementor_social_insta_button_link','');
$linkedin_url = get_theme_mod('restaurant_elementor_social_lkdn_button_link','');
$pinterest_url = get_theme_mod('restaurant_elementor_social_pint_button_link','');
$youtube_url = get_theme_mod('restaurant_elementor_social_youtube_button_link','');
$social_icon_target = get_theme_mod('restaurant_elementor_enable_new_tab_top_header_section',false);
$display_contact = get_theme_mod('restaurant_elementor_enable_contact_top_header_section',false);
$contact_number = get_theme_mod('restaurant_elementor_contact_top_header_section','');
$display_address = get_theme_mod('restaurant_elementor_enable_address_top_header_section',false);
$address = get_theme_mod('restaurant_elementor_address_top_header_section','');
$display_timing = get_theme_mod('restaurant_elementor_enable_timing_top_header_section',false);
$timing = get_theme_mod('restaurant_elementor_timing_top_header_section','');

/*echo $social_icon_target;
die;*/
?>

<!-- Preloader start-->
<?php if($enable_preloader) { ?>

<div class="preloader">
  <div class="preloader-inner">
    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/cart-preloader.gif') ?>" alt="">
  </div>
</div>

<?php } ?>
<!-- Preloader end -->

<div id="page" class="site-wrapper">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'restaurant-elementor' ); ?></a>	
	<header>
    <?php if($display_topheader && ($display_social_icon || $display_contact || $display_address ||$display_timing)) { ?>
    <div class="top-bar">
      <div class="container">
        <div class="row align-item-center">
          <div class="col-md-3">
            <?php if($display_social_icon) { ?>
            <ul class="social-icon">
              
              <?php if($facebook_url != "") { ?>
              <li class="icon-list">
                <a href="<?php echo esc_url($facebook_url); ?>" <?php if($social_icon_target) { ?> target="_blank" <?php } ?>><i class="fa fa-facebook"></i></a>
              </li>
              <?php } ?>

              <?php if($twitter_url != "") { ?>
              <li class="icon-list">
                <a href="<?php echo esc_url($twitter_url); ?>" <?php if($social_icon_target) { ?> target="_blank" <?php } ?>><i class="fa fa-twitter"></i></a>
              </li>
              <?php } ?>

              <?php if($instagram_url != "") { ?>
              <li class="icon-list">
                <a href="<?php echo esc_url($instagram_url); ?>" <?php if($social_icon_target) { ?> target="_blank" <?php } ?>><i class="fa fa-instagram"></i></a>
              </li>
              <?php } ?>

              <?php if($linkedin_url != "") { ?>
              <li class="icon-list">
                <a href="<?php echo esc_url($linkedin_url); ?>" <?php if($social_icon_target) { ?> target="_blank" <?php } ?>><i class="fa fa-linkedin"></i></a>
              </li>
              <?php } ?>

              <?php if($pinterest_url != "") { ?>
              <li class="icon-list">
                <a href="<?php echo esc_url($pinterest_url); ?>" <?php if($social_icon_target) { ?> target="_blank" <?php } ?>><i class="fa fa-pinterest"></i></a>
              </li>
              <?php } ?>

              <?php if($youtube_url != "") { ?>
              <li class="icon-list">
                <a href="<?php echo esc_url($youtube_url); ?>" <?php if($social_icon_target) { ?> target="_blank" <?php } ?>><i class="fa fa-youtube"></i></a>
              </li>
              <?php } ?>

            </ul>
            <?php } ?>
          </div>
          <div class="col-md-9 d-flex justify-content-end">
            <?php if($display_contact) { ?>
            <div class="content">
              <div class="icon">
                <i class="fa fa-phone"></i>
              </div>
              <div class="details">
                <ul>
                  <li><p class="light"><?php echo esc_html($contact_number); ?></p></li>
                </ul>
              </div>
            </div>
            <?php } ?>

            <?php if($display_address) { ?>
            <div class="content">
              <div class="icon">
                <i class="fa fa-location-arrow"></i>
              </div>
              <div class="details">
                <ul>
                  <li><p class="light"><?php echo esc_html($address); ?></p></li>
                </ul>
              </div>
            </div>
           <?php } ?>

            <?php if($display_timing) { ?>
            <div class="content">
              <div class="icon">
                <i class="fa fa-clock-o"></i>
              </div>
              <div class="details">
                <ul>
                  <li><p class="light"><?php echo esc_html($timing); ?></p></li>
                </ul>
              </div>
            </div>
            <?php } ?>

          </div>
        </div>
      </div>
    </div>
  <?php } ?>

<?php if($enable_stickyheader){ ?> 
  

  <div class="header-two affix <?php if(is_user_logged_in()) { ?> restaurant-elementor-login <?php } ?> <?php if(is_user_logged_in() && is_customize_preview()) { ?> restaurant-elementor-cutomizer <?php } ?>">
<?php } else { ?> 
  <div class="header-two">
<?php } ?>

      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="menu-two">
              <div class="logo-wrap">
                <div class="logo">
                  <?php
                  // Site Custom Logo
                  if ( function_exists( 'the_custom_logo' ) ) {
                    the_custom_logo();
                  }
                  ?>

                  <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>

                  <?php
                  $description = get_bloginfo( 'description', 'display' );
                  if ( $description || is_customize_preview() ) :
                  ?>
                  <p class="site-description">
                    <?php echo esc_html( $description ); ?>
                  </p>
                  <?php endif; ?>
                </div>
              </div>
              <nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'restaurant-elementor' ); ?>">
                
                <!-- Mobile Menu -->
                <div class="main-mobile-nav"> 
                    
                    <div class="main-mobile-menu">
        
                        <div class="menu-collapse-wrap">
                            <div class="hamburger-menu">
                                <button type="button" class="menu-collapsed" aria-label="<?php esc_attr_e('Menu Collapsed','restaurant-elementor'); ?>">
                                    <div class="top-bun"></div>
                                    <div class="meat"></div>
                                    <div class="bottom-bun"></div>
                                </button>
                            </div>
                        </div>
                        <div class="main-mobile-wrapper">
                            <div id="mobile-menu-build" class="main-mobile-build">
                                <button type="button" class="header-close-menu close-style" aria-label="<?php esc_attr_e('Header Close Menu','restaurant-elementor'); ?>"></button>
                            </div>
                        </div>
                
                    </div>
                                
                </div>
                <!-- End of Mobile Menu -->
                <div class="main-navbar">
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'primary-menu',
                        'menu_id'        => 'primary-menu',
                        'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                        'walker' => new WP_Bootstrap_Navwalker()
                    )
                );
                ?>
                </div>
                
                <div class="btn-wrapper">
                  <?php 
                  if ( class_exists( 'WooCommerce' ) ) { 
                  
                  global $woocommerce; 
                    $cart_page_url = function_exists( 'wc_get_cart_url' ) ? wc_get_cart_url() : $woocommerce->cart->get_cart_url();
                    $my_account_page_id  = wc_get_page_id( 'myaccount' );
                    $my_account_page_url = $my_account_page_id ? get_permalink( $my_account_page_id ) : '';  
                  }

                  ?>

                  <?php 
                  if ( class_exists( 'WooCommerce' ) ) { ?>
                  
                  <?php } ?>
                </div>

              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- header end -->

  <!-- offcanvas-area -->
  <div class="offcanvas-menu">
    <button class="menu-close"><i class="fa fa-times"></i></button>
    
      <?php get_search_form();?>
              
  </div>
  <!-- <a class="skip-link-search-skip" href="javascript:void(0)"></a> -->
  <div class="offcanvas-overly"></div>
  <!-- offcanvas-end -->

  <div id="primary" class="site-main">

