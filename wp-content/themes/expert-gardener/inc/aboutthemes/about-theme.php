<?php
/**
 * Theme Page
 *
 * @package Expert Gardener
 */

if ( ! defined( 'EXPERT_GARDENER_FREE_THEME_URL' ) ) {
	define( 'EXPERT_GARDENER_FREE_THEME_URL', 'https://www.seothemesexpert.com/products/free-gardener-wordpress-theme' );
}
if ( ! defined( 'EXPERT_GARDENER_PRO_THEME_URL' ) ) {
	define( 'EXPERT_GARDENER_PRO_THEME_URL', 'https://www.seothemesexpert.com/products/gardener-website-template' );
}
if ( ! defined( 'EXPERT_GARDENER_FREE_DOCS_THEME_URL' ) ) {
    define( 'EXPERT_GARDENER_FREE_DOCS_THEME_URL', 'https://demo.seothemesexpert.com/documentation/expert-gardener/' );
}
if ( ! defined( 'EXPERT_GARDENER_DEMO_THEME_URL' ) ) {
	define( 'EXPERT_GARDENER_DEMO_THEME_URL', 'https://demo.seothemesexpert.com/expert-gardener/' );
}
if ( ! defined( 'EXPERT_GARDENER_RATE_THEME_URL' ) ) {
    define( 'EXPERT_GARDENER_RATE_THEME_URL', 'https://wordpress.org/support/theme/expert-gardener/reviews/#new-post' );
}
if ( ! defined( 'EXPERT_GARDENER_SUPPORT_THEME_URL' ) ) {
    define( 'EXPERT_GARDENER_SUPPORT_THEME_URL', 'https://wordpress.org/support/theme/expert-gardener/' );
}
if ( ! defined( 'EXPERT_GARDENER_THEME_BUNDLE_URL' ) ) {
    define( 'EXPERT_GARDENER_THEME_BUNDLE_URL', 'https://www.seothemesexpert.com/products/wordpress-theme-bundle' );
}

/**
 * Add theme page
 */
function expert_gardener_menu() {
	add_theme_page( esc_html__( 'About Theme', 'expert-gardener' ), esc_html__( 'About Theme', 'expert-gardener' ), 'edit_theme_options', 'expert-gardener-about', 'expert_gardener_about_display' );
}
add_action( 'admin_menu', 'expert_gardener_menu' );

/**
 * Display About page
 */
function expert_gardener_about_display() { ?>
	<div class="wrap about-wrap full-width-layout">		
		<nav class="nav-tab-wrapper wp-clearfix" aria-label="<?php esc_attr_e( 'Secondary menu', 'expert-gardener' ); ?>">
			<a href="<?php echo esc_url( admin_url( add_query_arg( array( 'page' => 'expert-gardener-about' ), 'themes.php' ) ) ); ?>" class="nav-tab<?php echo ( isset( $_GET['page'] ) && 'expert-gardener-about' === $_GET['page'] && ! isset( $_GET['tab'] ) ) ?' nav-tab-active' : ''; ?>"><?php esc_html_e( 'About', 'expert-gardener' ); ?></a>

			<a href="<?php echo esc_url( admin_url( add_query_arg( array( 'page' => 'expert-gardener-about', 'tab' => 'free_vs_pro' ), 'themes.php' ) ) ); ?>" class="nav-tab<?php echo ( isset( $_GET['tab'] ) && 'free_vs_pro' === $_GET['tab'] ) ?' nav-tab-active' : ''; ?>"><?php esc_html_e( 'Compare free Vs Pro', 'expert-gardener' ); ?></a>
		</nav>

		<?php
			expert_gardener_main_screen();

			expert_gardener_free_vs_pro();
		?>

		<div class="return-to-dashboard">
			<?php if ( current_user_can( 'update_core' ) && isset( $_GET['updated'] ) ) : ?>
				<a href="<?php echo esc_url( self_admin_url( 'update-core.php' ) ); ?>">
					<?php is_multisite() ? esc_html_e( 'Return to Updates', 'expert-gardener' ) : esc_html_e( 'Return to Dashboard &rarr; Updates', 'expert-gardener' ); ?>
				</a> |
			<?php endif; ?>
			<a href="<?php echo esc_url( self_admin_url() ); ?>"><?php is_blog_admin() ? esc_html_e( 'Go to Dashboard &rarr; Home', 'expert-gardener' ) : esc_html_e( 'Go to Dashboard', 'expert-gardener' ); ?></a>
		</div>
	</div>
	<?php
}

/**
 * Output the main about screen.
 */
function expert_gardener_main_screen() {
	if ( isset( $_GET['page'] ) && 'expert-gardener-about' === $_GET['page'] && ! isset( $_GET['tab'] ) ) {
	?>
		<div class="main-col-box">
			<div class="feature-section two-col">
				<div class="card">
					<h2 class="title"><?php esc_html_e( 'Upgrade To Pro', 'expert-gardener' ); ?></h2>
					<p><?php esc_html_e( 'Take a step towards excellence, try our premium theme. Use Code', 'expert-gardener' ) ?><span class="usecode">" STEPRO10 "</span></p>
					<p><a target="_blank" href="<?php echo esc_url( EXPERT_GARDENER_PRO_THEME_URL ); ?>" class="button button-primary"><?php esc_html_e( 'Upgrade Pro', 'expert-gardener' ); ?></a></p>
				</div>

				<div class="card">
					<h2 class="title"><?php esc_html_e( 'Lite Documentation', 'expert-gardener' ); ?></h2>
					<p><?php esc_html_e( 'The free theme documentation can help you set up the theme.', 'expert-gardener' ) ?></p>
					<p><a target="_blank" href="<?php echo esc_url( EXPERT_GARDENER_FREE_DOCS_THEME_URL ); ?>" class="button button-primary" target="_blank"><?php esc_html_e( 'Lite Documentation', 'expert-gardener' ); ?></a></p>
				</div>

				<div class="card">
					<h2 class="title"><?php esc_html_e( 'Theme Info', 'expert-gardener' ); ?></h2>
					<p><?php esc_html_e( 'Know more about Expert Gardener.', 'expert-gardener' ) ?></p>
					<p><a target="_blank" href="<?php echo esc_url( EXPERT_GARDENER_FREE_THEME_URL ); ?>" class="button button-primary"><?php esc_html_e( 'Theme Info', 'expert-gardener' ); ?></a></p>
				</div>

				<div class="card">
					<h2 class="title"><?php esc_html_e( 'Theme Customizer', 'expert-gardener' ); ?></h2>
					<p><?php esc_html_e( 'You can get all theme options in customizer.', 'expert-gardener' ) ?></p>
					<p><a target="_blank" href="<?php echo esc_url( admin_url( 'customize.php' ) ); ?>" class="button button-primary"><?php esc_html_e( 'Customize', 'expert-gardener' ); ?></a></p>
				</div>

				<div class="card">
					<h2 class="title"><?php esc_html_e( 'Need Support?', 'expert-gardener' ); ?></h2>
					<p><?php esc_html_e( 'If you are having some issues with the theme or you want to tweak some thing, you can contact us our expert team will help you.', 'expert-gardener' ) ?></p>
					<p><a target="_blank" href="<?php echo esc_url( EXPERT_GARDENER_SUPPORT_THEME_URL ); ?>" class="button button-primary"><?php esc_html_e( 'Support Forum', 'expert-gardener' ); ?></a></p>
				</div>

				<div class="card">
					<h2 class="title"><?php esc_html_e( 'Review', 'expert-gardener' ); ?></h2>
					<p><?php esc_html_e( 'If you have loved our theme please show your support with the review.', 'expert-gardener' ) ?></p>
					<p><a target="_blank" href="<?php echo esc_url( EXPERT_GARDENER_RATE_THEME_URL ); ?>" class="button button-primary"><?php esc_html_e( 'Rate Us', 'expert-gardener' ); ?></a></p>
				</div>		
			</div>
			<div class="about-theme">
				<?php $expert_gardener_theme = wp_get_theme(); ?>

				<h1><?php echo esc_html( $expert_gardener_theme ); ?></h1>
				<p class="version"><?php esc_html_e( 'Version', 'expert-gardener' ); ?>: <?php echo esc_html($expert_gardener_theme['Version']);?></p>
				<div class="theme-description">
					<p class="actions">
						<a target="_blank" href="<?php echo esc_url( EXPERT_GARDENER_PRO_THEME_URL ); ?>" class="protheme button button-secondary" target="_blank"><?php esc_html_e( 'Upgrade to pro', 'expert-gardener' ); ?></a>

						<a target="_blank" href="<?php echo esc_url( EXPERT_GARDENER_DEMO_THEME_URL ); ?>" class="demo button button-secondary" target="_blank"><?php esc_html_e( 'View Demo', 'expert-gardener' ); ?></a>

						<a target="_blank" href="<?php echo esc_url( EXPERT_GARDENER_THEME_BUNDLE_URL ); ?>" class="bundle button button-secondary" target="_blank"><?php esc_html_e( 'Buy All Themes', 'expert-gardener' ); ?></a>

						<a target="_blank" href="<?php echo esc_url( EXPERT_GARDENER_FREE_DOCS_THEME_URL ); ?>" class="docs button button-secondary" target="_blank"><?php esc_html_e( 'Theme Instructions', 'expert-gardener' ); ?></a>
					</p>
				</div>
				<div class="theme-screenshot">
					<img src="<?php echo esc_url( $expert_gardener_theme->get_screenshot() ); ?>" />
				</div>
			</div>
		</div>
	<?php
	}
}

/**
 * Import Demo data for theme using catch themes demo import plugin
 */
function expert_gardener_free_vs_pro() {
	if ( isset( $_GET['tab'] ) && 'free_vs_pro' === $_GET['tab'] ) {
	?>
		<div class="wrap about-wrap">

			<div class="theme-description">
				<p class="actions">
					<a target="_blank" href="<?php echo esc_url( EXPERT_GARDENER_PRO_THEME_URL ); ?>" class="protheme button button-secondary" target="_blank"><?php esc_html_e( 'Upgrade to pro', 'expert-gardener' ); ?></a>

					<a target="_blank" href="<?php echo esc_url( EXPERT_GARDENER_DEMO_THEME_URL ); ?>" class="demo button button-secondary" target="_blank"><?php esc_html_e( 'View Demo', 'expert-gardener' ); ?></a>

					<a target="_blank" href="<?php echo esc_url( EXPERT_GARDENER_THEME_BUNDLE_URL ); ?>" class="bundle button button-secondary" target="_blank"><?php esc_html_e( 'Buy All Themes', 'expert-gardener' ); ?></a>

					<a target="_blank" href="<?php echo esc_url( EXPERT_GARDENER_FREE_DOCS_THEME_URL ); ?>" class="docs button button-secondary" target="_blank"><?php esc_html_e( 'Theme Instructions', 'expert-gardener' ); ?></a>
				</p>
			</div>
			<p class="about-description"><?php esc_html_e( 'View Free vs Pro Table below:', 'expert-gardener' ); ?></p>
			<div class="vs-theme-table">
				<table>
					<thead>
						<tr><th scope="col"></th>
							<th class="head" scope="col"><?php esc_html_e( 'Free Theme', 'expert-gardener' ); ?></th>
							<th class="head" scope="col"><?php esc_html_e( 'Pro Theme', 'expert-gardener' ); ?></th>
						</tr>
					</thead>
					<tbody>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><span><?php esc_html_e( 'One click demo import', 'expert-gardener' ); ?></span></td>
							<td><span class="dashicons dashicons-no-alt"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><?php esc_html_e( 'Color pallete and font options', 'expert-gardener' ); ?></td>
							<td><span class="dashicons dashicons-no-alt"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><?php esc_html_e( 'Demo Content has 8 to 10 sections', 'expert-gardener' ); ?></td>
							<td><span class="dashicons dashicons-no-alt"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><?php esc_html_e( 'Rearrange sections as per your need', 'expert-gardener' ); ?></td>
							<td><span class="dashicons dashicons-no-alt"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><?php esc_html_e( 'Internal Pages', 'expert-gardener' ); ?></td>
							<td><span class="dashicons dashicons-no-alt"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><?php esc_html_e( 'Plugin Integration', 'expert-gardener' ); ?></td>
							<td><span class="dashicons dashicons-no-alt"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><?php esc_html_e( 'Ultimate technical support', 'expert-gardener' ); ?></td>
							<td><span class="dashicons dashicons-no-alt"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><?php esc_html_e( 'Access our Support Forums', 'expert-gardener' ); ?></td>
							<td><span class="dashicons dashicons-no-alt"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><?php esc_html_e( 'Get regular updates', 'expert-gardener' ); ?></td>
							<td><span class="dashicons dashicons-no-alt"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><?php esc_html_e( 'Install theme on unlimited domains', 'expert-gardener' ); ?></td>
							<td><span class="dashicons dashicons-saved"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><?php esc_html_e( 'Mobile Responsive', 'expert-gardener' ); ?></td>
							<td><span class="dashicons dashicons-saved"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><?php esc_html_e( 'Easy Customization', 'expert-gardener' ); ?></td>
							<td><span class="dashicons dashicons-saved"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td class="feature feature--empty"></td>
							<td class="feature feature--empty"></td>
							<td headers="comp-2" class="td-btn-2"><a class="sidebar-button single-btn protheme button button-secondary" href="<?php echo esc_url(EXPERT_GARDENER_PRO_THEME_URL);?>"><?php esc_html_e( 'Go for Premium', 'expert-gardener' ); ?></a></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	<?php
	}
}
