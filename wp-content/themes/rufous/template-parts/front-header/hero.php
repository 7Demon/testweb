<?php $component = \ColibriWP\Theme\View::getData( 'component' ); ?>
<div class="wp-block wp-block-kubio-hero  position-relative wp-block-kubio-hero__outer rufous-front-header__k__J6FPNZyUrn-outer rufous-local-162-outer d-flex h-section-global-spacing align-items-lg-center align-items-md-center align-items-center" data-kubio="kubio/hero" id="hero">
	<?php $component->printBackground(); ?><?php $component->printSeparator(); ?>
	<div class="position-relative wp-block-kubio-hero__inner rufous-front-header__k__J6FPNZyUrn-inner rufous-local-162-inner h-navigation-padding h-section-grid-container h-section-boxed-container">
		<script type='text/javascript'>
			(function () {
				// forEach polyfill
				if (!NodeList.prototype.forEach) {
					NodeList.prototype.forEach = function (callback) {
						for (var i = 0; i < this.length; i++) {
							callback.call(this, this.item(i));
						}
					}
				}
				var navigation = document.querySelector('[data-colibri-navigation-overlap="true"], .h-navigation_overlap');
				if (navigation) {
					var els = document
						.querySelectorAll('.h-navigation-padding');
					if (els.length) {
						els.forEach(function (item) {
							item.style.paddingTop = navigation.offsetHeight + "px";
						});
					}
				}
			})();
		</script>
		<div class="wp-block wp-block-kubio-row  position-relative wp-block-kubio-row__container rufous-front-header__k__bgnhUSaQMl-container rufous-local-163-container gutters-row-lg-3 gutters-row-v-lg-3 gutters-row-md-3 gutters-row-v-md-3 gutters-row-3 gutters-row-v-3" data-kubio="kubio/row">
			<div class="position-relative wp-block-kubio-row__inner rufous-front-header__k__bgnhUSaQMl-inner rufous-local-163-inner h-row align-items-lg-stretch align-items-md-stretch align-items-stretch justify-content-lg-center justify-content-md-center justify-content-center gutters-col-lg-3 gutters-col-v-lg-3 gutters-col-md-3 gutters-col-v-md-3 gutters-col-3 gutters-col-v-3">
				<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container rufous-front-header__k__9IGHpldIpw-container rufous-local-164-container d-flex h-col-lg-auto h-col-md-auto h-col-auto" data-kubio="kubio/column">
					<div class="position-relative wp-block-kubio-column__inner rufous-front-header__k__9IGHpldIpw-inner rufous-local-164-inner d-flex h-flex-basis h-px-lg-3 v-inner-lg-3 h-px-md-3 v-inner-md-3 h-px-3 v-inner-3">
						<div class="position-relative wp-block-kubio-column__align rufous-front-header__k__9IGHpldIpw-align rufous-local-164-align h-y-container h-column__content h-column__v-align flex-basis-100 align-self-lg-center align-self-md-center align-self-center">
							<?php rufous_theme()->get('front-title')->render(); ?><?php rufous_theme()->get('front-subtitle')->render(); ?><?php rufous_theme()->get('buttons')->render(); ?>
						</div>
					</div>
				</div>
				<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container rufous-front-header__k__Oe59O6QZ2-container rufous-local-173-container d-flex h-col-lg-auto h-col-md-auto h-col-auto" data-kubio="kubio/column">
					<div class="position-relative wp-block-kubio-column__inner rufous-front-header__k__Oe59O6QZ2-inner rufous-local-173-inner d-flex h-flex-basis h-px-lg-3 v-inner-lg-3 h-px-md-3 v-inner-md-3 h-px-3 v-inner-3">
						<div class="position-relative wp-block-kubio-column__align rufous-front-header__k__Oe59O6QZ2-align rufous-local-173-align h-y-container h-column__content h-column__v-align flex-basis-100 align-self-lg-center align-self-md-center align-self-center">
							<?php rufous_theme()->get('front-image')->render(); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
