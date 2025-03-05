<header class="main-header">
    <div class="topbar">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-7 text-lg-start mb-md-0 mb-3">
                    <div class="top-left pt-lg-3 pt-md-2">
                        <div class="timebox mail pe-lg-5 pe-md-3 pb-md-0 pb-2">
                            <?php if( get_theme_mod( 'expert_gardener_mail') != 'info@example.com') { ?>
                            <span class="phone"><a href="mailto:<?php echo esc_html( get_theme_mod('expert_gardener_mail','info@example.com') ); ?>"><i class="fas fa-envelope pe-2"></i><?php echo esc_html( get_theme_mod('expert_gardener_mail','info@example.com')); ?></a></span>
                            <?php } ?>
                        </div>
                        <div class="timebox call">
                            <?php if( get_theme_mod( 'expert_gardener_call') != '1800 1200 110') { ?>
                              <span class="phone"><a href="tel:<?php echo esc_html( get_theme_mod('expert_gardener_call','1800 1200 110') ); ?>"><i class="fas fa-phone pe-2"></i><?php echo esc_html( get_theme_mod('expert_gardener_call','1800 1200 110')); ?></a></span>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <!-- Email Section -->
                <div class="col-lg-6 col-md-5 text-lg-end">
                    <div class="top-right">
                        <div class="social-media pt-lg-3 pt-md-2">
                                <?php if (get_theme_mod('expert_gardener_facebook_url','#')) : ?>
                                    <a target="_blank" rel="noopener noreferrer" href="<?php echo esc_url(get_theme_mod('expert_gardener_facebook_url')); ?>">
                                        <i class="fab fa-facebook-f me-2"></i>
                                    </a>
                                <?php endif; ?>
                                <?php if (get_theme_mod('expert_gardener_twitter_url','#')) : ?>
                                    <a target="_blank" rel="noopener noreferrer" href="<?php echo esc_url(get_theme_mod('expert_gardener_twitter_url')); ?>">
                                        <i class="fab fa-twitter me-2"></i>
                                    </a>
                                <?php endif; ?>
                                <?php if (get_theme_mod('expert_gardener_instagram_url','#')) : ?>
                                    <a target="_blank" rel="noopener noreferrer" href="<?php echo esc_url(get_theme_mod('expert_gardener_instagram_url')); ?>">
                                        <i class="fab fa-instagram me-2"></i>
                                    </a>
                                <?php endif; ?>
                                <?php if (get_theme_mod('expert_gardener_youtube_url','#')) : ?>
                                    <a target="_blank" rel="noopener noreferrer" href="<?php echo esc_url(get_theme_mod('expert_gardener_youtube_url')); ?>">
                                        <i class="fab fa-youtube me-2"></i>
                                    </a>
                                <?php endif; ?>
                        </div>
                        <span class="search-bar text-md-end">
                            <button type="button" class="open-search"><i class="fas fa-search"></i></button>
                        </span>
                    </div>
                </div>
                 <!-- Search Form -->
                <div class="search-outer">
                    <div class="inner_searchbox w-100 h-100">
                        <?php get_search_form(); ?>
                    </div>
                    <button type="button" class="search-close"><?php esc_html_e('CLOSE', 'expert-gardener'); ?></button>
                </div>
            </div>
        </div>
    </div>
    <!-- Lower Header Area -->
    <div class="lower-header-area">
        <div class="lower-part container <?php if( get_theme_mod( 'expert_gardener_sticky_header', '0')) { ?>sticky-header<?php } else { ?>close-sticky<?php } ?>">
            <!-- Mobile Toggle -->
            <div class="navbar-menubar responsive-menu navigation_header">
                <div class="toggle-nav mobile-menu">
                    <button onclick="expert_gardener_openNav()">
                        <i class="fa-solid fa-bars"></i> <!-- Initial hamburger icon -->
                    </button>
                </div>
                <div id="mySidenav" class="nav sidenav">
                    <nav id="site-navigation" class="main-navigation navbar navbar-expand-xl" aria-label="<?php esc_attr_e( 'Top Menu', 'expert-gardener' ); ?>">

                        <?php 
                            wp_nav_menu(
                                array(
                                    'theme_location' => 'responsive-menu',
                                    'container_class' => 'main-menu clearfix',
                                    'menu_class' => 'clearfix menu',
                                    'items_wrap' => '<ul id="%1$s" class="%2$s mobile_nav">%3$s</ul>',
                                    'fallback_cb' => 'wp_page_menu',
                                )
                            );
                        ?>
                        <a href="javascript:void(0)" class="closebtn mobile-menu" onclick="expert_gardener_closeNav()">
                            <i class="fa-solid fa-times"></i> <!-- Close icon for the menu -->
                        </a>
                    </nav>
                </div>
            </div>
            <!-- Logo and Menu Sections -->
            <div class="row">
                <!-- Left Menu -->
                <div class="col-lg-5 align-self-center">
                    <div id="leftSidenav" class="nav sidenav navbar-menubar left-menu">
                        <nav id="site-navigation" class="main-navigation navbar navbar-expand-xl" aria-label="<?php esc_attr_e('Top Menu', 'expert-gardener'); ?>">
                            <?php
                            wp_nav_menu(array(
                                'theme_location' => 'primary-left',
                                'container_class' => 'main-menu clearfix',
                                'menu_class' => 'menu clearfix mobile_nav',
                                'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                                'fallback_cb' => 'wp_page_menu',
                            ));
                            ?>
                        </nav>
                    </div>
                </div>
                <!-- Logo Section -->
                <div class="col-lg-2 col-md-12 px-0 position-relative text-center logobox">
                    <div class="logo">
                        <?php
                        if (has_custom_logo()) {
                            the_custom_logo();
                        } else {
                            $expert_gardener_site_title = get_theme_mod('expert_gardener_site_title_setting', '1');
                            if ($expert_gardener_site_title == '1') {
                                if (is_front_page() && is_home()) { ?>
                                    <h1 class="site-title">
                                        <a href="<?php echo esc_url(home_url('/')); ?>">
                                            <?php bloginfo('name'); ?>
                                        </a>
                                    </h1>
                                <?php } else { ?>
                                    <p class="site-title">
                                        <a href="<?php echo esc_url(home_url('/')); ?>">
                                            <?php bloginfo('name'); ?>
                                        </a>
                                    </p>
                                <?php }
                            }
                            $expert_gardener_tagline = get_theme_mod('expert_gardener_tagline_setting');
                            if ($expert_gardener_tagline) {
                                $expert_gardener_site_desc = get_bloginfo('description'); ?>
                                <p class="site-description"><?php echo esc_html($expert_gardener_site_desc); ?></p>
                            <?php }
                        }
                        ?>
                    </div>
                </div>
                <!-- Right Menu -->
                <div class="col-lg-5 align-self-center">
                    <div id="rightSidenav" class="nav sidenav navbar-menubar right-menu">
                        <nav id="site-navigation" class="main-navigation navbar navbar-expand-xl" aria-label="<?php esc_attr_e('Top Menu', 'expert-gardener'); ?>">
                            <?php
                            wp_nav_menu(array(
                                'theme_location' => 'primary-right',
                                'container_class' => 'main-menu clearfix',
                                'menu_class' => 'menu clearfix mobile_nav',
                                'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                                'fallback_cb' => 'wp_page_menu',
                            ));
                            ?>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
