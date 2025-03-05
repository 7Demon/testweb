<?php 
$expert_gardener_aboutus = get_theme_mod('expert_gardener_our_products_show_hide_section', true);

if ($expert_gardener_aboutus == '1') : ?>
<section id="product-section" class="py-5 mx-md-0 mx-3">
  <div class="container">
    <?php
    // Section Heading
    $expert_gardener_our_products_heading_section = get_theme_mod('expert_gardener_our_products_heading_section');
    if (!empty($expert_gardener_our_products_heading_section)) : ?>
      <h2 class="mb-5 text-center product-heading">
        <?php echo esc_html($expert_gardener_our_products_heading_section); ?>
      </h2>
    <?php endif; ?>
    
    <?php if (class_exists('woocommerce')) : ?>
      <div class="row">
        <?php
        // Query Products by Selected Category
        $expert_gardener_selected_category = get_theme_mod('expert_gardener_our_product_product_category','product_cat1');
        if ($expert_gardener_selected_category) {
            $expert_gardener_args = array(
                'post_type'      => 'product',
                'posts_per_page' => 50,
                'product_cat'    => $expert_gardener_selected_category,
                'order'          => 'ASC'
            );
            $expert_gardener_loop = new WP_Query($expert_gardener_args);
            if ($expert_gardener_loop->have_posts()) : 
                while ($expert_gardener_loop->have_posts()) : $expert_gardener_loop->the_post();
                global $product;
        ?>
          <div class="col-lg-3 col-md-4 mb-5">
            <div class="product-box">
              <div class="product-image position-relative">
                <?php echo woocommerce_get_product_thumbnail(); ?>
                
                <!-- Show Sale Badge for Products on Sale -->
                <?php if ($product->is_on_sale()) : ?>
                  <span class="sale-badge position-absolute top-0 start-0 bg-danger text-white px-2 py-1"><?php esc_html_e('Sale', 'expert-gardener'); ?></span>
                <?php endif; ?>
              </div>
              <div class="product-content text-center mb-3 px-2">
                <h3 class="my-2"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                <p class="product-price" style="color: <?php echo $product->is_on_sale() ? 'black' : 'gray'; ?>">
                  <?php echo $product->get_price_html(); ?>
                </p>
              </div>
            </div>
          </div>
        <?php
                endwhile;
                wp_reset_postdata();
            endif;
        }
        ?>
      </div>
    <?php endif; ?>
  </div>
</section>
<?php endif; ?>
