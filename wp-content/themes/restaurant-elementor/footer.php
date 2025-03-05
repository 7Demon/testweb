<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package restaurant-elementor
 */

?>
</div><!-- #main -->

<?php 
$display_copyright = get_theme_mod('restaurant_elementor_enable_cpright_footer_section',true);
$enable_scrolltop = get_theme_mod('restaurant_elementor_enable_scroll_top',true);
$copyright_content = get_theme_mod('restaurant_elementor_cpright_footer_section','Powered by WordPress');
?>

  <footer class="footer footer-one">
        <div class="foot-top">
            <div class="container">
                <div class="row">  
                  <?php if ( is_active_sidebar( 'footer-widgets' ) ) { ?>
                  
                    <div class="footer-top">
                        <div class="row clearfix">
                            <?php dynamic_sidebar('footer-widgets'); ?>      
                        </div>
                    </div>
                  
                  <?php } ?>

                </div>
                <div class="container">
                  <div class="row text-center">
                    <div class="col-md-12">
                      <?php if($display_copyright) { ?>
                      <div class="footer-credits">

                          <p class="footer-copyright">&copy;
                            <?php
                            echo esc_html(date_i18n(
                              /* translators: Copyright date format, see https://www.php.net/manual/datetime.format.php */
                              _x( 'Y', 'copyright date format', 'restaurant-elementor' )
                            ));
                            ?>
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
                          <!-- .footer-copyright -->

                          
                            <?php if($copyright_content == ""){ ?>
                            <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'restaurant-elementor' ) ); ?>">
                              <?php esc_html__( 'Powered by WordPress', 'restaurant-elementor' ); ?>
                            </a>
                          <?php } else { ?>
                            <?php echo esc_html($copyright_content); ?>
                          <?php } ?>
                          </p><!-- .powered-by -->

                      </div><!-- .footer-credits -->
                    <?php } ?>  
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- ====== Go to top ====== -->
    <?php if($enable_scrolltop) { ?>
    <a id="c-scroll" title="<?php esc_attr__('Go to top','restaurant-elementor' ); ?>" href="javascript:void(0)">
      <i class="fa fa-arrow-up" aria-hidden="true"></i>
    </a>
    <?php } ?>
    
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
