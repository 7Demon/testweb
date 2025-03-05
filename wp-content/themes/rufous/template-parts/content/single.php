<div id="post-<?php the_ID(); ?>" class=" <?php get_post_class() ?> wp-block wp-block-kubio-query-layout  position-relative wp-block-kubio-query-layout__outer rufous-single__k__single-lAFSH8Xo9x-outer rufous-local-705-outer d-flex h-section-global-spacing align-items-lg-center align-items-md-center align-items-center" data-kubio="kubio/query-layout" id="blog-layout">
	<div class="position-relative wp-block-kubio-query-layout__inner rufous-single__k__single-lAFSH8Xo9x-inner rufous-local-705-inner h-section-grid-container h-section-boxed-container">
		<div class="wp-block wp-block-kubio-row  position-relative wp-block-kubio-row__container rufous-single__k__single-baLWB4dRKjp-container rufous-local-706-container gutters-row-lg-2 gutters-row-v-lg-0 gutters-row-md-0 gutters-row-v-md-0 gutters-row-3 gutters-row-v-2" data-kubio="kubio/row">
			<div class="position-relative wp-block-kubio-row__inner rufous-single__k__single-baLWB4dRKjp-inner rufous-local-706-inner h-row align-items-lg-stretch align-items-md-stretch align-items-stretch justify-content-lg-center justify-content-md-center justify-content-center gutters-col-lg-2 gutters-col-v-lg-0 gutters-col-md-0 gutters-col-v-md-0 gutters-col-3 gutters-col-v-2">
				<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container rufous-single__k__single-kxeqsSpdy-n-container rufous-local-707-container d-flex h-col-lg h-col-md h-col-auto" data-kubio="kubio/column">
					<div class="position-relative wp-block-kubio-column__inner rufous-single__k__single-kxeqsSpdy-n-inner rufous-local-707-inner d-flex h-flex-basis h-px-lg-3 v-inner-lg-0 h-px-md-3 v-inner-md-0 h-px-3 v-inner-0">
						<div class="position-relative wp-block-kubio-column__align rufous-single__k__single-kxeqsSpdy-n-align rufous-local-707-align h-y-container h-column__content h-column__v-align flex-basis-100 align-self-lg-start align-self-md-start align-self-start">
							<figure class="wp-block wp-block-kubio-post-featured-image  position-relative wp-block-kubio-post-featured-image__container rufous-single__k__iE82N7AEu-container rufous-local-708-container h-aspect-ratio--4-3 <?php rufous_post_missing_featured_image_class(); ?>" data-kubio="kubio/post-featured-image" data-kubio-settings="{{kubio_settings_value}}">
								<?php if(has_post_thumbnail()): ?>
								<img class='position-relative wp-block-kubio-post-featured-image__image rufous-single__k__iE82N7AEu-image rufous-local--image' src='<?php echo esc_url(get_the_post_thumbnail_url());?>' />
								<?php endif; ?>
								<div class="position-relative wp-block-kubio-post-featured-image__inner rufous-single__k__iE82N7AEu-inner rufous-local-708-inner">
									<div class="position-relative wp-block-kubio-post-featured-image__align rufous-single__k__iE82N7AEu-align rufous-local-708-align h-y-container align-self-lg-end align-self-md-end align-self-end"></div>
								</div>
							</figure>
							<div class="wp-block wp-block-kubio-post-meta  position-relative wp-block-kubio-post-meta__metaDataContainer rufous-single__k__in2mlwF4a-metaDataContainer rufous-local-709-metaDataContainer h-blog-meta" data-kubio="kubio/post-meta" id="post-metadata">
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
									<div class="wp-block wp-block-kubio-row  position-relative wp-block-kubio-row__container rufous-single__k__single-SbdKxHs2YI-container rufous-local-710-container gutters-row-lg-0 gutters-row-v-lg-0 gutters-row-md-0 gutters-row-v-md-0 gutters-row-0 gutters-row-v-0" data-kubio="kubio/row">
										<div class="position-relative wp-block-kubio-row__inner rufous-single__k__single-SbdKxHs2YI-inner rufous-local-710-inner h-row align-items-lg-stretch align-items-md-stretch align-items-stretch justify-content-lg-center justify-content-md-center justify-content-center gutters-col-lg-0 gutters-col-v-lg-0 gutters-col-md-0 gutters-col-v-md-0 gutters-col-0 gutters-col-v-0">
											<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container rufous-single__k__single-3VGwAjm9cX-container rufous-local-711-container d-flex h-col-lg-auto h-col-md-auto h-col-auto" data-kubio="kubio/column">
												<div class="position-relative wp-block-kubio-column__inner rufous-single__k__single-3VGwAjm9cX-inner rufous-local-711-inner d-flex h-flex-basis h-px-lg-0 v-inner-lg-0 h-px-md-0 v-inner-md-0 h-px-0 v-inner-0">
													<div class="position-relative wp-block-kubio-column__align rufous-single__k__single-3VGwAjm9cX-align rufous-local-711-align h-y-container h-column__content h-column__v-align flex-basis-100 align-self-lg-start align-self-md-start align-self-start">
														<?php the_content(); ?>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="wp-block wp-block-kubio-row  position-relative wp-block-kubio-row__container rufous-single__k__single-1uGRU27HVz-container rufous-local-712-container gutters-row-lg-0 gutters-row-v-lg-1 gutters-row-md-0 gutters-row-v-md-1 gutters-row-0 gutters-row-v-1" data-kubio="kubio/row">
										<div class="position-relative wp-block-kubio-row__inner rufous-single__k__single-1uGRU27HVz-inner rufous-local-712-inner h-row align-items-lg-stretch align-items-md-stretch align-items-stretch justify-content-lg-start justify-content-md-start justify-content-start gutters-col-lg-0 gutters-col-v-lg-1 gutters-col-md-0 gutters-col-v-md-1 gutters-col-0 gutters-col-v-1">
											<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container rufous-single__k__single-K4Akm2YNqS-container rufous-local-713-container d-flex h-col-lg-auto h-col-md-auto h-col-auto" data-kubio="kubio/column">
												<div class="position-relative wp-block-kubio-column__inner rufous-single__k__single-K4Akm2YNqS-inner rufous-local-713-inner d-flex h-flex-basis h-px-lg-0 v-inner-lg-3 h-px-md-0 v-inner-md-3 h-px-0 v-inner-3">
													<div class="position-relative wp-block-kubio-column__align rufous-single__k__single-K4Akm2YNqS-align rufous-local-713-align h-y-container h-column__content h-column__v-align flex-basis-100 align-self-lg-start align-self-md-start align-self-start">
														<p class="wp-block wp-block-kubio-text  position-relative wp-block-kubio-text__text rufous-single__k__single-1pwRcGAnh-text rufous-local-714-text" data-kubio="kubio/text">
															<?php esc_html_e('TAGS', 'rufous'); ?>
														</p>
														<div class="wp-block wp-block-kubio-post-tags  position-relative wp-block-kubio-post-tags__container rufous-single__k__single-tlSt_AyBi-container rufous-local-715-container kubio-post-tags-container" data-kubio="kubio/post-tags">
															<div class="position-relative wp-block-kubio-post-tags__placeholder rufous-single__k__single-tlSt_AyBi-placeholder rufous-local-715-placeholder kubio-post-tags-placeholder"></div>
															<div class="position-relative wp-block-kubio-post-tags__tags rufous-single__k__single-tlSt_AyBi-tags rufous-local-715-tags">
																<?php rufous_tags_list(__('No tags', 'rufous')); ?>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="wp-block wp-block-kubio-row  position-relative wp-block-kubio-row__container rufous-single__k__oBH0ABWoeL-container rufous-local-716-container gutters-row-lg-0 gutters-row-v-lg-0 gutters-row-md-0 gutters-row-v-md-0 gutters-row-0 gutters-row-v-0" data-kubio="kubio/row">
										<div class="position-relative wp-block-kubio-row__inner rufous-single__k__oBH0ABWoeL-inner rufous-local-716-inner h-row align-items-lg-stretch align-items-md-stretch align-items-stretch justify-content-lg-center justify-content-md-center justify-content-center gutters-col-lg-0 gutters-col-v-lg-0 gutters-col-md-0 gutters-col-v-md-0 gutters-col-0 gutters-col-v-0">
											<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container rufous-single__k__wETEbWZUNc-container rufous-local-717-container d-flex h-col-lg-auto h-col-md-auto h-col-auto" data-kubio="kubio/column">
												<div class="position-relative wp-block-kubio-column__inner rufous-single__k__wETEbWZUNc-inner rufous-local-717-inner d-flex h-flex-basis h-px-lg-0 v-inner-lg-0 h-px-md-0 v-inner-md-0 h-px-0 v-inner-0">
													<div class="position-relative wp-block-kubio-column__align rufous-single__k__wETEbWZUNc-align rufous-local-717-align h-y-container h-column__content h-column__v-align flex-basis-100 align-self-lg-start align-self-md-start align-self-start">
														<p class="wp-block wp-block-kubio-text  position-relative wp-block-kubio-text__text rufous-single__k__single-1pwRcGAnh-text rufous-local-718-text" data-kubio="kubio/text">
															<?php esc_html_e('CATEGORIES', 'rufous'); ?>
														</p>
														<div class="wp-block wp-block-kubio-post-categories  position-relative wp-block-kubio-post-categories__container rufous-single__k__up5pQ_Cww-container rufous-local-719-container kubio-post-categories-container" data-kubio="kubio/post-categories">
															<div class="position-relative wp-block-kubio-post-categories__placeholder rufous-single__k__up5pQ_Cww-placeholder rufous-local-719-placeholder kubio-post-categories-placeholder"></div>
															<div class="position-relative wp-block-kubio-post-categories__tags rufous-single__k__up5pQ_Cww-tags rufous-local-719-tags">
																<?php rufous_categories_list(__('No category', 'rufous')); ?>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<?php if(rufous_has_pagination()): ?>
									<div class="wp-block wp-block-kubio-query-pagination  position-relative wp-block-kubio-query-pagination__container rufous-single__k__single-nqLiVZCaYo-container rufous-local-720-container gutters-row-lg-0 gutters-row-v-lg-2 gutters-row-md-0 gutters-row-v-md-2 gutters-row-0 gutters-row-v-2" data-kubio="kubio/query-pagination">
										<div class="position-relative wp-block-kubio-query-pagination__inner rufous-single__k__single-nqLiVZCaYo-inner rufous-local-720-inner h-row align-items-lg-stretch align-items-md-stretch align-items-stretch justify-content-lg-center justify-content-md-center justify-content-center gutters-col-lg-0 gutters-col-v-lg-2 gutters-col-md-0 gutters-col-v-md-2 gutters-col-0 gutters-col-v-2">
											<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container rufous-single__k__single-3ndM77FkZV-container rufous-local-721-container d-flex h-col-lg h-col-md h-col-auto" data-kubio="kubio/column">
												<div class="position-relative wp-block-kubio-column__inner rufous-single__k__single-3ndM77FkZV-inner rufous-local-721-inner d-flex h-flex-basis h-px-lg-0 v-inner-lg-2 h-px-md-0 v-inner-md-2 h-px-0 v-inner-2">
													<div class="position-relative wp-block-kubio-column__align rufous-single__k__single-3ndM77FkZV-align rufous-local-721-align h-y-container h-column__content h-column__v-align flex-basis-100 align-self-lg-start align-self-md-start align-self-start">
														<?php if(rufous_has_pagination_button(true)): ?>
														<div class="position-relative wp-block-kubio-pagination-nav-button__spacing rufous-single__k__ELgmeRXRD--spacing rufous-local-722-spacing">
															<span class="wp-block wp-block-kubio-pagination-nav-button  position-relative wp-block-kubio-pagination-nav-button__outer rufous-single__k__ELgmeRXRD--outer rufous-local-722-outer kubio-button-container" data-kubio="kubio/pagination-nav-button">
																<a class="position-relative wp-block-kubio-pagination-nav-button__link rufous-single__k__ELgmeRXRD--link rufous-local-722-link h-w-100 h-global-transition" href="<?php rufous_get_navigation_button_link(true); ?>">
																	<span class="position-relative wp-block-kubio-pagination-nav-button__text rufous-single__k__ELgmeRXRD--text rufous-local-722-text kubio-inherit-typography">
																		<?php esc_html_e('Previous', 'rufous'); ?>
																	</span>
																</a>
															</span>
														</div>
														<?php endif; ?>
													</div>
												</div>
											</div>
											<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container rufous-single__k__single-mMPMCQqWfs-container rufous-local-723-container d-flex h-col-lg h-col-md h-col-auto" data-kubio="kubio/column">
												<div class="position-relative wp-block-kubio-column__inner rufous-single__k__single-mMPMCQqWfs-inner rufous-local-723-inner d-flex h-flex-basis h-px-lg-0 v-inner-lg-2 h-px-md-0 v-inner-md-2 h-px-0 v-inner-2">
													<div class="position-relative wp-block-kubio-column__align rufous-single__k__single-mMPMCQqWfs-align rufous-local-723-align h-y-container h-column__content h-column__v-align flex-basis-100 align-self-lg-start align-self-md-start align-self-start">
														<?php if(rufous_has_pagination_button()): ?>
														<div class="position-relative wp-block-kubio-pagination-nav-button__spacing rufous-single__k__ELgmeRXRD--spacing rufous-local-724-spacing">
															<span class="wp-block wp-block-kubio-pagination-nav-button  position-relative wp-block-kubio-pagination-nav-button__outer rufous-single__k__ELgmeRXRD--outer rufous-local-724-outer kubio-button-container" data-kubio="kubio/pagination-nav-button">
																<a class="position-relative wp-block-kubio-pagination-nav-button__link rufous-single__k__ELgmeRXRD--link rufous-local-724-link h-w-100 h-global-transition" href="<?php rufous_get_navigation_button_link(); ?>">
																	<span class="position-relative wp-block-kubio-pagination-nav-button__text rufous-single__k__ELgmeRXRD--text rufous-local-724-text kubio-inherit-typography">
																		<?php esc_html_e('Next', 'rufous'); ?>
																	</span>
																</a>
															</span>
														</div>
														<?php endif; ?>
													</div>
												</div>
											</div>
										</div>
									</div>
									<?php endif; ?>
									<div class="wp-block wp-block-kubio-post-comments kubio-migration--1 position-relative wp-block-kubio-post-comments__commentsContainer rufous-single__k__single-s5UQRGEAN-commentsContainer rufous-local-725-commentsContainer" data-kubio="kubio/post-comments">
										<?php rufous_post_comments(array (
  'none' => __('No responses yet', 'rufous'),
  'one' => __('One response', 'rufous'),
  'multiple' => __('{COMMENTS-COUNT} Responses', 'rufous'),
  'disabled' => __('Comments are closed', 'rufous'),
  'avatar_size' => __('32', 'rufous'),
)); ?>
									</div>
									<div class="wp-block wp-block-kubio-post-comments-form  position-relative wp-block-kubio-post-comments-form__container rufous-single__k__single-oXoikmHxB-container rufous-local-726-container" data-kubio="kubio/post-comments-form">
										<?php comment_form(); ?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
