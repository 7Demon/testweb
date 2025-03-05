<div class="wp-block wp-block-kubio-query-layout  position-relative wp-block-kubio-query-layout__outer rufous-search__k__1MCYzfcZN-outer rufous-local-576-outer d-flex h-section-global-spacing align-items-lg-center align-items-md-center align-items-center" data-kubio="kubio/query-layout" id="blog-layout">
	<div class="position-relative wp-block-kubio-query-layout__inner rufous-search__k__1MCYzfcZN-inner rufous-local-576-inner h-section-grid-container h-section-boxed-container">
		<div class="wp-block wp-block-kubio-row  position-relative wp-block-kubio-row__container rufous-search__k__baLWB4dRKjp-container rufous-local-577-container gutters-row-lg-2 gutters-row-v-lg-0 gutters-row-md-0 gutters-row-v-md-0 gutters-row-0 gutters-row-v-0" data-kubio="kubio/row">
			<div class="position-relative wp-block-kubio-row__inner rufous-search__k__baLWB4dRKjp-inner rufous-local-577-inner h-row align-items-lg-stretch align-items-md-stretch align-items-stretch justify-content-lg-center justify-content-md-center justify-content-center gutters-col-lg-2 gutters-col-v-lg-0 gutters-col-md-0 gutters-col-v-md-0 gutters-col-0 gutters-col-v-0">
				<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container rufous-search__k__kxeqsSpdy-n-container rufous-local-578-container d-flex h-col-lg h-col-md h-col-auto" data-kubio="kubio/column">
					<div class="position-relative wp-block-kubio-column__inner rufous-search__k__kxeqsSpdy-n-inner rufous-local-578-inner d-flex h-flex-basis h-px-lg-2 v-inner-lg-0 h-px-md-0 v-inner-md-0 h-px-2 v-inner-0">
						<div class="position-relative wp-block-kubio-column__align rufous-search__k__kxeqsSpdy-n-align rufous-local-578-align h-y-container h-column__content h-column__v-align flex-basis-100 align-self-lg-start align-self-md-start align-self-start">
							<div class="wp-block wp-block-kubio-query  position-relative wp-block-kubio-query__container rufous-search__k__CtKC_EuIZL-container rufous-local-579-container" data-kubio="kubio/query">
								<div class="wp-block wp-block-kubio-query-loop  position-relative wp-block-kubio-query-loop__container rufous-search__k__vrf0UGkWrN-container rufous-local-580-container gutters-row-lg-2 gutters-row-v-lg-2 gutters-row-md-2 gutters-row-v-md-2 gutters-row-0 gutters-row-v-2" data-kubio="kubio/query-loop" data-kubio-component="masonry" data-kubio-settings="{&quot;enabled&quot;:&quot;1&quot;,&quot;targetSelector&quot;:&quot;.wp-block-kubio-query-loop__inner&quot;}">
									<div class="position-relative wp-block-kubio-query-loop__inner rufous-search__k__vrf0UGkWrN-inner rufous-local-580-inner h-row">
										<?php rufous_theme()->get('archive-loop')->render(array (
  'view' => 'content/search/loop-item',
)); ?>
									</div>
								</div>
								<?php if(rufous_has_pagination()): ?>
								<div class="wp-block wp-block-kubio-query-pagination  position-relative wp-block-kubio-query-pagination__container rufous-search__k__vD7AVCTELY-container rufous-local-587-container gutters-row-lg-0 gutters-row-v-lg-2 gutters-row-md-2 gutters-row-v-md-2 gutters-row-0 gutters-row-v-2" data-kubio="kubio/query-pagination">
									<div class="position-relative wp-block-kubio-query-pagination__inner rufous-search__k__vD7AVCTELY-inner rufous-local-587-inner h-row align-items-lg-stretch align-items-md-stretch align-items-stretch justify-content-lg-center justify-content-md-center justify-content-center gutters-col-lg-0 gutters-col-v-lg-2 gutters-col-md-2 gutters-col-v-md-2 gutters-col-0 gutters-col-v-2">
										<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container rufous-search__k__tBYU0uM8Xx-container rufous-local-588-container d-flex h-col-lg-auto h-col-md-auto h-col-auto" data-kubio="kubio/column">
											<div class="position-relative wp-block-kubio-column__inner rufous-search__k__tBYU0uM8Xx-inner rufous-local-588-inner d-flex h-flex-basis h-px-lg-2 v-inner-lg-2 h-px-md-2 v-inner-md-2 h-px-2 v-inner-2">
												<div class="position-relative wp-block-kubio-column__align rufous-search__k__tBYU0uM8Xx-align rufous-local-588-align h-y-container h-column__content h-column__v-align flex-basis-auto align-self-lg-center align-self-md-center align-self-center">
													<?php if(rufous_has_pagination_button(true)): ?>
													<div class="position-relative wp-block-kubio-pagination-nav-button__spacing rufous-search__k__ELgmeRXRD--spacing rufous-local-589-spacing">
														<span class="wp-block wp-block-kubio-pagination-nav-button  position-relative wp-block-kubio-pagination-nav-button__outer rufous-search__k__ELgmeRXRD--outer rufous-local-589-outer kubio-button-container" data-kubio="kubio/pagination-nav-button">
															<a class="position-relative wp-block-kubio-pagination-nav-button__link rufous-search__k__ELgmeRXRD--link rufous-local-589-link h-w-100 h-global-transition" href="<?php rufous_get_navigation_button_link(true); ?>">
																<span class="position-relative wp-block-kubio-pagination-nav-button__text rufous-search__k__ELgmeRXRD--text rufous-local-589-text kubio-inherit-typography">
																	<?php esc_html_e('Previous', 'rufous'); ?>
																</span>
															</a>
														</span>
													</div>
													<?php endif; ?>
												</div>
											</div>
										</div>
										<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container rufous-search__k__P2OarhUKUK-container rufous-local-590-container d-flex h-col-lg h-col-md h-col" data-kubio="kubio/column">
											<div class="position-relative wp-block-kubio-column__inner rufous-search__k__P2OarhUKUK-inner rufous-local-590-inner d-flex h-flex-basis h-px-lg-2 v-inner-lg-2 h-px-md-2 v-inner-md-2 h-px-1 v-inner-2">
												<div class="position-relative wp-block-kubio-column__align rufous-search__k__P2OarhUKUK-align rufous-local-590-align h-y-container h-column__content h-column__v-align flex-basis-100 align-self-lg-center align-self-md-center align-self-center">
													<div class="wp-block wp-block-kubio-pagination-numbers  position-relative wp-block-kubio-pagination-numbers__outer rufous-search__k__tRiQFlrj8q-outer rufous-local-591-outer" data-kubio="kubio/pagination-numbers">
														<?php rufous_pagination_numbers(); ?>
													</div>
												</div>
											</div>
										</div>
										<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container rufous-search__k__tBYU0uM8Xx-container rufous-local-592-container d-flex h-col-lg-auto h-col-md-auto h-col-auto" data-kubio="kubio/column">
											<div class="position-relative wp-block-kubio-column__inner rufous-search__k__tBYU0uM8Xx-inner rufous-local-592-inner d-flex h-flex-basis h-px-lg-2 v-inner-lg-2 h-px-md-2 v-inner-md-2 h-px-2 v-inner-2">
												<div class="position-relative wp-block-kubio-column__align rufous-search__k__tBYU0uM8Xx-align rufous-local-592-align h-y-container h-column__content h-column__v-align flex-basis-100 align-self-lg-center align-self-md-center align-self-center">
													<?php if(rufous_has_pagination_button()): ?>
													<div class="position-relative wp-block-kubio-pagination-nav-button__spacing rufous-search__k__ELgmeRXRD--spacing rufous-local-593-spacing">
														<span class="wp-block wp-block-kubio-pagination-nav-button  position-relative wp-block-kubio-pagination-nav-button__outer rufous-search__k__ELgmeRXRD--outer rufous-local-593-outer kubio-button-container" data-kubio="kubio/pagination-nav-button">
															<a class="position-relative wp-block-kubio-pagination-nav-button__link rufous-search__k__ELgmeRXRD--link rufous-local-593-link h-w-100 h-global-transition" href="<?php rufous_get_navigation_button_link(); ?>">
																<span class="position-relative wp-block-kubio-pagination-nav-button__text rufous-search__k__ELgmeRXRD--text rufous-local-593-text kubio-inherit-typography">
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
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
