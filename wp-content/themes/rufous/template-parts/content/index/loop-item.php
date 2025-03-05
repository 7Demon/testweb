<div class="<?php rufous_print_archive_entry_class('wp-block wp-block-kubio-query-loop-item  position-relative wp-block-kubio-query-loop-item__container rufous-index__k__QtetVXHJ9I-container rufous-local-370-container d-flex   '); ?>"" data-kubio="kubio/query-loop-item">
	<div class="position-relative wp-block-kubio-query-loop-item__inner rufous-index__k__QtetVXHJ9I-inner rufous-local-370-inner d-flex h-flex-basis h-px-lg-0 v-inner-lg-0 h-px-md-0 v-inner-md-0 h-px-0 v-inner-0">
		<div class="position-relative wp-block-kubio-query-loop-item__align rufous-index__k__QtetVXHJ9I-align rufous-local-370-align h-y-container h-column__content h-column__v-align flex-basis-100 align-self-lg-start align-self-md-start align-self-start">
			<figure class="wp-block wp-block-kubio-post-featured-image  position-relative wp-block-kubio-post-featured-image__container rufous-index__k__iE82N7AEu-container rufous-local-371-container h-aspect-ratio--4-3 <?php rufous_post_missing_featured_image_class(); ?>" data-kubio="kubio/post-featured-image" data-kubio-settings="{{kubio_settings_value}}">
				<?php if(has_post_thumbnail()): ?>
				<img class='position-relative wp-block-kubio-post-featured-image__image rufous-index__k__iE82N7AEu-image rufous-local--image' src='<?php echo esc_url(get_the_post_thumbnail_url());?>' />
				<?php endif; ?>
				<div class="position-relative wp-block-kubio-post-featured-image__inner rufous-index__k__iE82N7AEu-inner rufous-local-371-inner">
					<div class="position-relative wp-block-kubio-post-featured-image__align rufous-index__k__iE82N7AEu-align rufous-local-371-align h-y-container align-self-lg-start align-self-md-start align-self-start"></div>
				</div>
			</figure>
			<div class="wp-block wp-block-kubio-post-meta  position-relative wp-block-kubio-post-meta__metaDataContainer rufous-index__k__in2mlwF4a-metaDataContainer rufous-local-372-metaDataContainer h-blog-meta" data-kubio="kubio/post-meta">
				<span class="metadata-item">
					<a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta("ID"))); ?>">
						<span class="h-svg-icon">
							<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="user" viewBox="0 0 512 545.5">
								<path d="M240 112c61.666 0 112 50.334 112 112 0 38.54-19.698 72.834-49.5 93 57.074 24.477 97.5 81.1 97.5 147h-32c0-70.89-57.11-128-128-128s-128 57.11-128 128H80c0-65.9 40.426-122.522 97.5-147-29.802-20.166-49.5-54.46-49.5-93 0-61.666 50.334-112 112-112zm0 32c-44.372 0-80 35.628-80 80s35.628 80 80 80 80-35.628 80-80-35.628-80-80-80z" /></svg>
							</span>
							<?php echo esc_html(get_the_author_meta("display_name",get_post_field("post_author"))); ?>
						</a>
					</span>
					<span class="metadata-separator">
						|
					</span>
					<span class="metadata-item">
						<a href="<?php echo esc_url(get_day_link(get_post_time( 'Y' ),get_post_time( 'm' ),get_post_time( 'j' ))); ?>">
							<span class="h-svg-icon">
								<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="calendar" viewBox="0 0 512 545.5">
									<path d="M144 96h32v16h160V96h32v16h64v352H80V112h64V96zm-32 48v32h288v-32h-32v16h-32v-16H176v16h-32v-16h-32zm0 64v224h288V208H112zm96 32h32v32h-32v-32zm64 0h32v32h-32v-32zm64 0h32v32h-32v-32zm-192 64h32v32h-32v-32zm64 0h32v32h-32v-32zm64 0h32v32h-32v-32zm64 0h32v32h-32v-32zm-192 64h32v32h-32v-32zm64 0h32v32h-32v-32zm64 0h32v32h-32v-32z" /></svg>
								</span>
								<?php echo esc_html(get_the_date('F j')); ?>
							</a>
						</span>
					</div>
					<a class="position-relative wp-block-kubio-post-title__link rufous-index__k__tstzQ_uACq-link rufous-local-373-link d-block" href="<?php echo esc_url(get_the_permalink()); ?>">
						<h4 class="wp-block wp-block-kubio-post-title  position-relative wp-block-kubio-post-title__container rufous-index__k__tstzQ_uACq-container rufous-local-373-container" data-kubio="kubio/post-title">
							<?php the_title(); ?>
						</h4>
					</a>
					<p class="wp-block wp-block-kubio-post-excerpt  position-relative wp-block-kubio-post-excerpt__text rufous-index__k__-hWWlFyCEF-text rufous-local-374-text" data-kubio="kubio/post-excerpt">
						<?php rufous_post_excerpt(array (
  'max_length' => 16,
)); ?>
					</p>
					<div class="position-relative wp-block-kubio-read-more-button__spacing rufous-index__k__7TrnS1SQ70-spacing rufous-local-375-spacing">
						<span class="wp-block wp-block-kubio-read-more-button  position-relative wp-block-kubio-read-more-button__outer rufous-index__k__7TrnS1SQ70-outer rufous-local-375-outer kubio-button-container" data-kubio="kubio/read-more-button">
							<a class="position-relative wp-block-kubio-read-more-button__link rufous-index__k__7TrnS1SQ70-link rufous-local-375-link h-w-100 h-global-transition" href="<?php echo esc_url(get_the_permalink()); ?>">
								<span class="position-relative wp-block-kubio-read-more-button__text rufous-index__k__7TrnS1SQ70-text rufous-local-375-text kubio-inherit-typography">
									<?php esc_html_e('Read more', 'rufous'); ?>
								</span>
							</a>
						</span>
					</div>
				</div>
			</div>
		</div>
