<?php $component = \ColibriWP\Theme\View::getData( 'component' ); ?>
<div class="wp-block wp-block-kubio-navigation  position-relative wp-block-kubio-navigation__outer <?php echo $component->printNavigationClasses(); ?> rufous-header__k__DioegVJlkoc-outer rufous-local-600-outer h-navigation_overlap" data-kubio="kubio/navigation" data-kubio-component="overlap" data-kubio-settings="true" id="navigation">
	<?php rufous_theme()->get('inner-top-bar')->render(); ?>
	<div class="wp-block wp-block-kubio-navigation-section  position-relative wp-block-kubio-navigation-section__nav rufous-header__k__bqqNA1jdTsz-nav rufous-local-617-nav h-section h-navigation" data-kubio="kubio/navigation-section" data-kubio-component="navigation" data-kubio-settings="{&quot;sticky&quot;:{&quot;startAfterNode&quot;:{&quot;enabled&quot;:false},&quot;animations&quot;:{&quot;enabled&quot;:false,&quot;duration&quot;:0,&quot;name&quot;:&quot;slideDown&quot;}},&quot;overlap&quot;:true}">
		<div class="position-relative wp-block-kubio-navigation-section__nav-section rufous-header__k__bqqNA1jdTsz-nav-section rufous-local-617-nav-section    <?php echo $component->printContainerClasses(); ?>">
			<div class="wp-block wp-block-kubio-navigation-items  position-relative wp-block-kubio-navigation-items__outer rufous-header__k__qjaVb8v913S-outer rufous-local-618-outer" data-kubio="kubio/navigation-items" data-nav-normal="true">
				<div class="wp-block wp-block-kubio-row  position-relative wp-block-kubio-row__container rufous-header__k__iSa63jOLv68-container rufous-local-619-container gutters-row-lg-2 gutters-row-v-lg-0 gutters-row-md-2 gutters-row-v-md-0 gutters-row-0 gutters-row-v-0" data-kubio="kubio/row">
					<div class="position-relative wp-block-kubio-row__inner rufous-header__k__iSa63jOLv68-inner rufous-local-619-inner h-row align-items-lg-stretch align-items-md-stretch align-items-stretch justify-content-lg-center justify-content-md-center justify-content-center gutters-col-lg-2 gutters-col-v-lg-0 gutters-col-md-2 gutters-col-v-md-0 gutters-col-0 gutters-col-v-0">
						<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container rufous-header__k__W-uGibVCZhy-container rufous-local-620-container d-flex h-col-lg-auto h-col-md-auto h-col" data-kubio="kubio/column">
							<div class="position-relative wp-block-kubio-column__inner rufous-header__k__W-uGibVCZhy-inner rufous-local-620-inner d-flex h-flex-basis h-px-lg-3 v-inner-lg-0 h-px-md-0 v-inner-md-0 h-px-2 v-inner-0">
								<div class="position-relative wp-block-kubio-column__align rufous-header__k__W-uGibVCZhy-align rufous-local-620-align h-y-container h-column__content h-column__v-align flex-basis-auto align-self-lg-center align-self-md-center align-self-center">
									<?php rufous_theme()->get('logo')->render(array (
  'wrapper_class' => 'wp-block wp-block-kubio-logo position-relative wp-block-kubio-logo__container  kubio-logo-direction-row rufous-header__k__J6McH4z0dR0-container rufous-local--container',
  'logo_image_class' => 'position-relative wp-block-kubio-logo__image  kubio-logo-image  rufous-header__k__J6McH4z0dR0-image rufous-local--image',
  'alt_logo_image_class' => 'position-relative wp-block-kubio-logo__alternateImage kubio-logo-image kubio-alternate-logo-image   rufous-header__k__J6McH4z0dR0-alternateImage rufous-local--alternateImage',
  'logo_text_class' => 'position-relative wp-block-kubio-logo__text  rufous-header__k__J6McH4z0dR0-text rufous-local--text',
)); ?>
								</div>
							</div>
						</div>
						<div class="wp-block wp-block-kubio-column  kubio-hide-on-mobile position-relative wp-block-kubio-column__container rufous-header__k__lZ3bWyPxUHD-container rufous-local-622-container d-flex h-col-lg h-col-md h-col-auto" data-kubio="kubio/column">
							<div class="position-relative wp-block-kubio-column__inner rufous-header__k__lZ3bWyPxUHD-inner rufous-local-622-inner d-flex h-flex-basis h-px-lg-0 v-inner-lg-0 h-px-md-0 v-inner-md-0 h-px-0 v-inner-0">
								<div class="position-relative wp-block-kubio-column__align rufous-header__k__lZ3bWyPxUHD-align rufous-local-622-align h-y-container h-column__content h-column__v-align flex-basis-100 align-self-lg-center align-self-md-center align-self-center">
									<div class="wp-block wp-block-kubio-spacer  position-relative wp-block-kubio-spacer__container rufous-header__k__JDEJKJgiM-D-container rufous-local-623-container" data-kubio="kubio/spacer"></div>
								</div>
							</div>
						</div>
						<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container rufous-header__k__EHxXhqNqvCg-container rufous-local-624-container d-flex h-col-lg-auto h-col-md-auto h-col-auto" data-kubio="kubio/column">
							<div class="position-relative wp-block-kubio-column__inner rufous-header__k__EHxXhqNqvCg-inner rufous-local-624-inner d-flex h-flex-basis h-px-lg-3 v-inner-lg-0 h-px-md-0 v-inner-md-0 h-px-2 v-inner-0">
								<div class="position-relative wp-block-kubio-column__align rufous-header__k__EHxXhqNqvCg-align rufous-local-624-align h-y-container h-column__content h-column__v-align flex-basis-auto align-self-lg-center align-self-md-center align-self-center">
									<?php rufous_theme()->get('header-menu')->render(); ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
