<?php 
$expert_gardener_slider = get_theme_mod('expert_gardener_slider_setting', false);

if ($expert_gardener_slider == '1') :
?>

<section id="slider">
    <div id="owl-carousel" class="owl-carousel">
        <?php
        $expert_gardener_slide_pages = array();
        for ($expert_gardener_count = 1; $expert_gardener_count <= 4; $expert_gardener_count++) {
            $expert_gardener_mod = intval(get_theme_mod('expert_gardener_slider_page' . $expert_gardener_count));
            if ('page-none-selected' !== $expert_gardener_mod && $expert_gardener_mod > 0) {
                $expert_gardener_slide_pages[] = $expert_gardener_mod;
            }
        }

        if (!empty($expert_gardener_slide_pages)) :
            $expert_gardener_args = array(
                'post_type' => 'page',
                'post__in' => $expert_gardener_slide_pages,
                'orderby' => 'post__in'
            );
            $expert_gardener_query = new WP_Query($expert_gardener_args);
            if ($expert_gardener_query->have_posts()) :
                while ($expert_gardener_query->have_posts()) : $expert_gardener_query->the_post(); ?>
                    <div class="item">
                        <?php if (has_post_thumbnail()) { ?>
                            <img src="<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'full')); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" />
                        <?php } else { ?>
                            <div class="slider-color-box"></div>
                        <?php } ?>

                        <div class="container">
                            <div class="carousel-caption">
                                <div class="inner_carousel">
                                    <?php if (get_theme_mod('expert_gardener_slider_short_heading') != '') { ?>
                                        <p class="slidetop-text m-0"><?php echo esc_html(get_theme_mod('expert_gardener_slider_short_heading', '')); ?></p>
                                    <?php } ?>
                                    <h1 class="custom-title mb-2">
                                      <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </h1>
                                    <p class="mb-2"><?php echo esc_html(wp_trim_words(get_the_content(), 25)); ?></p>
                                    <div class="slider-mainbtn mt-md-4 mt-3 mb-3">
                                        <!-- First button -->
                                        <span class="slide-btn1">
                                            <a href="<?php the_permalink(); ?>" class="btn-text me-md-3 mb-2">
                                                <?php echo esc_html__('DISCOVER MORE', 'expert-gardener'); ?>
                                            </a>
                                        </span>

                                        <!-- Second button  -->
                                        <span class="slide-btn2">
                                            <?php
                                            $expert_gardener_slider_btn_text = get_theme_mod('expert_gardener_slider_btn_text', 'BOOK APPOINTMENT');
                                            $expert_gardener_slider_btn_link = get_theme_mod('expert_gardener_slider_btn_link');

                                            if (!empty($expert_gardener_slider_btn_text) && !empty($expert_gardener_slider_btn_link)) { ?>
                                                <a href="<?php echo esc_url($expert_gardener_slider_btn_link); ?>" class="btn-text">
                                                    <?php echo esc_html($expert_gardener_slider_btn_text); ?>
                                                </a>
                                            <?php } ?>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile;
                wp_reset_postdata(); ?>
            <?php else : ?>
                <div class="no-postfound"></div>
            <?php endif;
        endif; ?>
    </div>
</section>

<?php endif; ?>
