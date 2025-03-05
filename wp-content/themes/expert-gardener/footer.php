</div>
<?php
	$expert_gardener_footer_bg_color = get_theme_mod('expert_gardener_footer_bg_color');
	$expert_gardener_footer_bg_image = get_theme_mod('expert_gardener_footer_bg_image');
?>
<footer class="footer-area" style="background-color: <?php echo esc_attr($expert_gardener_footer_bg_color); ?>; <?php echo ($expert_gardener_footer_bg_image) ? 'background-image: url(' . esc_url($expert_gardener_footer_bg_image) . ');' : ''; ?>">  
	<div class="container"> 
		<?php 
		$expert_gardener_footer_widgets_setting = get_theme_mod('expert_gardener_footer_widgets_setting', '1');

		do_action('expert_gardener_footer_above'); 
		
		if ($expert_gardener_footer_widgets_setting != '') { 
			if (is_active_sidebar('expert-gardener-footer-widget-area')) { ?>
				<div class="row footer-row"> 
					<?php dynamic_sidebar('expert-gardener-footer-widget-area'); ?>
				</div>  
			<?php 
			} else { ?>
				<div class="row footer-row">
					<div class="footer-widget col-lg-3 col-sm-6 wow fadeIn" data-wow-delay="0.2s">
						<aside id="search-3" class="widget widget_search default_footer_search">
							<h2 class="widget-title w-title"><?php esc_html_e('Search', 'expert-gardener'); ?></h2>
							<form method="get" class="search-form" action="<?php echo esc_url(home_url('/')); ?>">
								<label>
									<span class="screen-reader-text">Search for:</span>
									<input type="search" class="search-field" placeholder="Search..." value="" name="s">
								</label>
								<button type="submit" class="search-submit" value="Search">
									<i class="fa fa-search"></i>
								</button>
							</form>
						</aside>
					</div>
					<div class="footer-widget col-lg-3 col-sm-6 wow fadeIn" data-wow-delay="0.2s">
						<aside id="archives-2" class="widget widget_archive">
							<h2 class="widget-title w-title"><?php esc_html_e('Recent Posts', 'expert-gardener'); ?></h2>
							<ul>
								<?php
								wp_get_archives(array(
									'type' => 'postbypost',
									'format' => 'html',
								));
								?>
							</ul>
						</aside>
					</div>
					<div class="footer-widget col-lg-3 col-sm-6 wow fadeIn" data-wow-delay="0.2s">
						<aside id="pages-2" class="widget widget_pages">
							<h2 class="widget-title w-title"><?php esc_html_e('Pages', 'expert-gardener'); ?></h2>
							<ul>
								<?php
								wp_list_pages(array(
									'title_li' => '',
								));
								?>
							</ul>
						</aside>
					</div>
					<div class="footer-widget col-lg-3 col-sm-6 wow fadeIn" data-wow-delay="0.2s">
						<aside id="categories-2" class="widget widget_categories">
							<h2 class="widget-title w-title"><?php esc_html_e('Categories', 'expert-gardener'); ?></h2>
							<ul>
								<?php
								wp_list_categories(array(
									'title_li' => '',
								));
								?>
							</ul>
						</aside>
					</div>
				</div>
			<?php } 
		} ?>
	</div>
	
	<?php 
		$expert_gardener_footer_copyright = get_theme_mod('expert_gardener_footer_copyright','');
	?>
	<?php $expert_gardener_footer_copyright_setting = get_theme_mod('expert_gardener_footer_copyright_setting','1');
	 if( $expert_gardener_footer_copyright_setting != ''){?> 
	<div class="copy-right"> 
		<div class="container">
			<p class="copyright-text">
				<?php
					echo esc_html( apply_filters('expert_gardener_footer_copyright',($expert_gardener_footer_copyright)));
			    ?>
				<?php if (empty($expert_gardener_footer_copyright)) { ?>
				    <?php echo esc_html__('Copyright &copy; 2024,', 'expert-gardener'); ?>
				    <a href="<?php echo esc_url('https://www.seothemesexpert.com/products/free-gardener-wordpress-theme'); ?>" target="_blank">
				        <?php echo esc_html__('Expert Gardener', 'expert-gardener'); ?>
				    </a>
				    <span> | </span>
				    <a href="<?php echo esc_url('https://wordpress.org/'); ?>" target="_blank">
				        <?php echo esc_html__('WordPress Theme', 'expert-gardener'); ?>
				    </a>
				<?php } ?>
			</p>
		</div>
	</div>
	<?php }?>
	<?php $expert_gardener_scroll_top = get_theme_mod('expert_gardener_scroll_top_setting','1');
      if($expert_gardener_scroll_top == '1') { ?>
		<a id="scrolltop"><span><?php esc_html_e('TOP','expert-gardener'); ?><span></a>
	<?php } ?>
</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>