<?php
/**
 * Perform all main WooCommerce configurations for this theme
 *
 * @package OPEN SHOP WordPress theme
 */
// If plugin - 'WooCommerce' not exist then return.
if ( ! class_exists( 'WooCommerce' ) ){
	return;
}
if ( ! function_exists( 'is_plugin_active' ) ) {
         require_once( ABSPATH . 'wp-admin/includes/plugin.php' );
}
/**
 * OPEN SHOP WooCommerce Compatibility
 */
if ( ! class_exists( 'restaurant_elementor_Pro_Woocommerce_Ext' ) ) :
	/**
	 * restaurant_elementor_Pro_Woocommerce_Ext Compatibility
	 *
	 * @since 1.0.0
	 */
	class restaurant_elementor_Pro_Woocommerce_Ext{

        /**
		 * Member Variable
		 *
		 * @var object instance
		 */
		private static $instance;

		/**
		 * Initiator
		 */
		public static function get_instance() {
			if ( ! isset( self::$instance ) ) {
				self::$instance = new self();
			}
			return self::$instance;
		}
        /**
		 * Constructor
		 */
		public function __construct(){

		    add_action( 'wp_enqueue_scripts',array( $this, 'restaurant_elementor_add_scripts' ));	
		    add_action( 'wp_enqueue_scripts',array( $this, 'restaurant_elementor_add_style' ));	

		    add_filter( 'post_class', array( $this, 'restaurant_elementor_post_class' ) );
		   
		    add_action( 'after_setup_theme', array( $this, 'restaurant_elementor_common_actions' ), 999 );
		    add_filter( 'open_theme_js_localize', array( $this, 'restaurant_elementor_js_localize' ) );
		    add_action( 'woocommerce_before_shop_loop_item_title', array( $this, 'restaurant_elementor_product_flip_image' ), 10 );
		    // Register Store Sidebars.
			//add_action( 'widgets_init', array( $this, 'restaurant_elementor_store_widgets_init' ), 15 );
			add_action( 'after_setup_theme', array( $this, 'restaurant_elementor_setup_theme' ) );
			// Replace Store Sidebars.
			add_filter( 'restaurant_elementor_get_sidebar', array( $this, 'restaurant_elementor_replace_store_sidebar' ) );
		    // quick view ajax.
			add_action( 'wp_ajax_alm_load_product_quick_view', array( $this, 'restaurant_elementor_load_product_quick_view_ajax' ) );
			add_action( 'wp_ajax_nopriv_alm_load_product_quick_view', array( $this, 'restaurant_elementor_load_product_quick_view_ajax' ) );
			add_action('restaurant_elementor_woo_quick_view_product_summary', array( $this, 'restaurant_elementor_woo_single_product_content_structure' ), 10, 1 );
			//shop
			 //add_action('woocommerce_before_shop_loop', array($this, 'restaurant_elementor_before_shop_loop'), 35);
			 add_action('woocommerce_after_shop_loop_item', array($this, 'restaurant_elementor_list_after_shop_loop_item'),5);
			 // pagination
            add_action( 'restaurant_elementor_pagination_infinite', array( $this, 'shop_page_styles' ) );
            add_action( 'restaurant_elementor_pagination_infinite', array( $this, 'restaurant_elementor_common_actions' ), 999 );

            add_action( 'wp_ajax_restaurant_elementor_pagination_infinite', array( $this, 'restaurant_elementor_pagination_infinite' ) );
            
			add_action( 'wp_ajax_nopriv_restaurant_elementor_pagination_infinite', array( $this, 'restaurant_elementor_pagination_infinite' ) );
			// Custom Template Quick View.
			$this->restaurant_elementor_quick_view_content_actions();
			
		    add_action( 'wp', array( $this, 'restaurant_elementor_single_product_customization' ) );
           
            // Alter cross-sells display
			remove_action( 'woocommerce_cart_collaterals', 'woocommerce_cross_sell_display' );
			if ( '0' != get_theme_mod( 'restaurant_elementor_cross_num_col_shw', '2' ) ) {
				add_action( 'woocommerce_cart_collaterals', array( $this, 'restaurant_elementor_cross_sell_display' ) );
			}


		 }
		
		/**
		 * Assign shop sidebar for store page.
		 *
		 * @param String $sidebar Sidebar.
		 *
		 * @return String $sidebar Sidebar.
		 */
		function restaurant_elementor_replace_store_sidebar( $sidebar ){

			if ( is_shop() || is_product_taxonomy() || is_checkout() || is_cart() || is_account_page() ){
				$sidebar = 'open-woo-shop-sidebar';
			}elseif ( is_product() ){
				$sidebar = 'open-woo-product-sidebar';
			}
			return $sidebar;
		}
       /**
		 * Setup theme
		 *
		 * @since 1.0.3
		 */
		function restaurant_elementor_setup_theme(){
			// WooCommerce.
			add_theme_support( 'wc-product-gallery-zoom' );
			add_theme_support( 'wc-product-gallery-lightbox' );
			add_theme_support( 'wc-product-gallery-slider' );
		}
		/**
		 * Product Flip Image
		 */
		function restaurant_elementor_product_flip_image(){
			global $product;
			$hover_style = get_theme_mod( 'restaurant_elementor_woo_product_animation' );

			if ( 'swap' === $hover_style ) {

				$attachment_ids = $product->get_gallery_image_ids();

				if ( $attachment_ids ) {

					$image_size = apply_filters( 'single_product_archive_thumbnail_size', 'shop_catalog' );

					echo apply_filters( 'open_woocommerce_restaurant_elementor_product_flip_image', wp_get_attachment_image( reset( $attachment_ids ), $image_size, false, array( 'class' => 'show-on-hover' ) ) );
				}
			}
			if ('slide' === $hover_style ) {

				$attachment_ids = $product->get_gallery_image_ids();

				if ( $attachment_ids ) {

					$image_size = apply_filters( 'single_product_archive_thumbnail_size', 'shop_catalog' );

					echo apply_filters( 'top_store_woocommerce_product_flip_image', wp_get_attachment_image( reset( $attachment_ids ), $image_size, false, array( 'class' => 'show-on-slide' ) ) );
				}
			}
		}
		
		/**
		 * Post Class
		 *
		 * @param array $classes Default argument array.
		 *
		 * @return array;
		 */
		function restaurant_elementor_post_class( $classes ){
			if (!restaurant_elementor_is_blog()|| is_shop() || is_product_taxonomy() || post_type_exists( 'product' )){
                $classes[] = 'texture-woo-product-list';
				$qv_enable = get_theme_mod( 'restaurant_elementor_woo_quickview_enable',true);
				if ( true == $qv_enable ){
					$classes[] = 'opn-qv-enable';

				}
			}
			if (is_shop() || is_product_taxonomy() ||  post_type_exists( 'product' )){
				$hover_style = get_theme_mod( 'restaurant_elementor_woo_product_animation' );
				if ( '' !== $hover_style ) {
					$classes[] = 'restaurant-elementor-woo-hover-' . esc_attr($hover_style);
				}
				
			}
			if (is_shop() || is_product_taxonomy() || post_type_exists( 'product' )){
			$single_product_tab_style = get_theme_mod( 'restaurant_elementor_single_product_tab_layout','horizontal' );
				if ( '' !== $single_product_tab_style ){
					$classes[] = 'open-single-product-tab-'.esc_attr($single_product_tab_style);
				}
			}
			if (is_shop() || is_product_taxonomy() || post_type_exists( 'product' )){
			$shadow_style = get_theme_mod( 'restaurant_elementor_product_box_shadow' );
				if ( '' !== $shadow_style ){
					$classes[] = 'open-shadow-' . esc_attr($shadow_style);
				}	
			}
			if (is_shop() || is_product_taxonomy() || post_type_exists( 'product' )){
			$shadow_hvr_style = get_theme_mod( 'restaurant_elementor_product_box_shadow_on_hover' );
				if ( '' !== $shadow_hvr_style ){
					$classes[] = 'open-shadow-hover-' . esc_attr($shadow_hvr_style);
				}	
			}
			if ( 'swap' === $hover_style && !is_page_template('frontpage.php') && (!is_admin()) && !restaurant_elementor_is_blog()){
            global $product;
			$attachment_ids = $product->get_gallery_image_ids();
			if(count($attachment_ids) > '0'){
                $classes[] ='restaurant-elementor-swap-item-hover';
			  }
			
		    }
		     if ( 'slide' === $hover_style && !is_page_template('frontpage.php') && (!is_admin()) && !restaurant_elementor_is_blog()){
            global $product;

			$attachment_ids = $product->get_gallery_image_ids();
			if(count($attachment_ids) > '0'){
                $classes[] ='restaurant-elementor-slide-item-hover';
			  }
		  
		   }
			return $classes;
		}
		/**
		 * Infinite Products Show on scroll
		 *
		 * @since 1.1.0
		 * @param array $localize   JS localize variables.
		 * @return array
		 */
		function restaurant_elementor_js_localize( $localize ){
			global $wp_query;
			$restaurant_elementor_pagination                   = get_theme_mod( 'restaurant_elementor_pagination' );
			$localize['ajax_url']                   = admin_url( 'admin-ajax.php' );
			$localize['is_cart']                    = is_cart();
			$localize['is_single_product']          = is_product();
			$localize['query_vars']                 = json_encode( $wp_query->query );
			$localize['shop_quick_view_enable']     = get_theme_mod('restaurant_elementor_woo_quickview_enable','true' );
			$localize['shop_infinite_nonce']        = wp_create_nonce( 'opn-shop-load-more-nonce' );
			$localize['shop_infinite_count']        = 2;
			$localize['shop_infinite_total']        = $wp_query->max_num_pages;
			$localize['shop_pagination']            = $restaurant_elementor_pagination;
			$localize['shop_infinite_scroll_event'] = $restaurant_elementor_pagination;
			$localize['query_vars']                 = json_encode( $wp_query->query );
			$localize['shop_no_more_post_message']  = apply_filters( 'restaurant_elementor_no_more_product_text', __( 'No more products to show.', 'restaurant-elementor' ) );
			return $localize;
			
		}
       /**
		 * Common Actions.
		 *
		 * @since 1.1.0
		 * @return void
		 */
		function restaurant_elementor_common_actions(){
			// Shop Pagination.
			$this->shop_pagination();
			// Quick View.
			$this->restaurant_elementor_shop_init_quick_view();

		}
		/**
		 * Init Quick View
		 */
		function restaurant_elementor_shop_init_quick_view(){
			$qv_enable = get_theme_mod( 'restaurant_elementor_woo_quickview_enable','true' );
			if ( true == $qv_enable ){
				add_filter( 'open_theme_js_localize', array( $this, 'restaurant_elementor_restaurant_elementor_qv_js_localize' ) );
				add_action( 'quickview', array( $this,'restaurant_elementor_add_quick_view_on_img' ),15);
				// load modal template.
				add_action( 'wp_footer', array( $this, 'restaurant_elementor_quick_view_html' ) );
			}
		}
		/**
		 * Add Scripts
		 */
		function restaurant_elementor_add_scripts(){
		   wp_enqueue_script( 'restaurant-elementor-woocommerce-js', RESTAURANT_ELEMENTOR_THEME_URI .'/inc/woocommerce/js/woocommerce.js', array( 'jquery' ), '1.0.0', true );
           $localize = array(
				'ajaxUrl'  => admin_url( 'admin-ajax.php' ),
				//cat-tab-filter
				'restaurant_elementor_single_row_slide_cat' => get_theme_mod('restaurant_elementor_single_row_slide_cat',false),
				'restaurant_elementor_cat_slider_optn' => get_theme_mod('restaurant_elementor_cat_slider_optn',false),
				
				//product-slider
				'restaurant_elementor_single_row_prdct_slide' => get_theme_mod('restaurant_elementor_single_row_prdct_slide',false),
				'restaurant_elementor_product_slider_optn' => get_theme_mod('restaurant_elementor_product_slider_optn',false),
				//cat-slider
				'restaurant_elementor_category_slider_optn' => get_theme_mod('restaurant_elementor_category_slider_optn',false),
				//product-list
				'restaurant_elementor_single_row_prdct_list' => get_theme_mod('restaurant_elementor_single_row_prdct_list',false),
				'restaurant_elementor_product_list_slide_optn' => get_theme_mod('restaurant_elementor_product_list_slide_optn',false),
				//cat-tab-list-filter
				'restaurant_elementor_single_row_slide_cat_tb_lst' => get_theme_mod('restaurant_elementor_single_row_slide_cat_tb_lst',false),
				'restaurant_elementor_cat_tb_lst_slider_optn' => get_theme_mod('restaurant_elementor_cat_tb_lst_slider_optn',false),
				//product tab image
				'restaurant_elementor_product_img_sec_single_row_slide' => get_theme_mod('restaurant_elementor_product_img_sec_single_row_slide',true),
				'restaurant_elementor_product_img_sec_slider_optn' => get_theme_mod('restaurant_elementor_product_img_sec_slider_optn',false),
				'restaurant_elementor_product_img_sec_adimg' =>  get_theme_mod('restaurant_elementor_product_img_sec_adimg',''),

				//brand
				'restaurant_elementor_brand_slider_optn' => get_theme_mod('restaurant_elementor_brand_slider_optn',false),
				//big-feature-product
				'restaurant_elementor_feature_product_slider_optn' => get_theme_mod('restaurant_elementor_feature_product_slider_optn',false),
				//category slider coloum
				'restaurant_elementor_cat_item_no' => get_theme_mod('restaurant_elementor_cat_item_no','10'),
				'restaurant_elementor_rtl' => (bool)get_theme_mod('restaurant_elementor_rtl'),
				
				
				
			);
           wp_localize_script( 'restaurant-elementor-woocommerce-js', 'bizEcommerce',  $localize );	
           wp_enqueue_script('open-quick-view', RESTAURANT_ELEMENTOR_THEME_URI.'inc/woocommerce/quick-view/js/quick-view.js', array( 'jquery' ), '', true );
           wp_localize_script('open-quick-view', 'bizEcommerceqv', array('ajaxurl' => admin_url( 'admin-ajax.php' )));
          
		   }
		/**
		 * Add Style
		 */
		function restaurant_elementor_add_style(){
        wp_enqueue_style( 'open-quick-view', RESTAURANT_ELEMENTOR_THEME_URI. 'inc/woocommerce/quick-view/css/quick-view.css', null, '');
		}
        /**
		 * Quick view localize.
		 *
		 * @since 1.0
		 * @param array $localize   JS localize variables.
		 * @return array
		 */
		function restaurant_elementor_restaurant_elementor_qv_js_localize( $localize ){
			global $wp_query;
			$loader = '';
			if ( ! isset( $localize['ajax_url'] ) ){
				$localize['ajax_url'] = admin_url( 'admin-ajax.php', 'relative' );
			}
			$localize['qv_loader'] = $loader;
			return $localize;
		}
		/****************/
        // add to compare
        /****************/
        function restaurant_elementor_add_to_compare($pid=''){
        if( is_plugin_active('yith-woocommerce-compare/init.php') ){
          return '<div class="texture-compare"><span class="compare-list"><div class="woocommerce product compare-button"><a href="'.esc_url(home_url()).'?action=yith-woocompare-add-product&id='.esc_attr($pid).'" class="compare button" data-product_id="'.esc_attr($pid).'" rel="nofollow">Compare</a></div></span></div>';

           }
        }
		/**
		 * Quick view on image
		 */
		function restaurant_elementor_add_quick_view_on_img(){
			global $product;
            $button='';
			$product_id = $product->get_id();

			// Get label.
			$label = __( 'Quick View', 'restaurant-elementor' );

			$button.='<div class="texture-quik">
			             <div class="texture-quickview">
                               <span class="quik-view">
                                   <a href="#" class="opn-quick-view-text" data-product_id="' . esc_attr($product_id). '">
                                      <span>'.esc_html($label).'</span>
                                    
                                   </a>
                            </span>
                          </div>';
            $button.= '</div>';
			$button = apply_filters( 'open_woo_add_quick_view_text_html', $button, $label, $product );
			echo $button;
		}
		/**
		 * Quick view html
		 */
		function restaurant_elementor_quick_view_html(){
			$this->restaurant_elementor_quick_view_dependent_data();
			require_once RESTAURANT_ELEMENTOR_THEME_DIR . 'inc/woocommerce/quick-view/quick-view-modal.php';
		}
		/**
		 * Quick view dependent data
		 */
		function restaurant_elementor_quick_view_dependent_data(){
			wp_enqueue_script( 'wc-add-to-cart-variation' );
			wp_enqueue_script( 'flexslider' );
		}
        /**
		 * Quick view ajax
		 */
		function restaurant_elementor_load_product_quick_view_ajax(){
			if ( ! isset( $_REQUEST['product_id'] ) ){
				die();
			}
			$product_id = intval( $_REQUEST['product_id'] );
			// set the main wp query for the product.
			wp( 'p=' . $product_id . '&post_type=product' );
			// remove product thumbnails gallery.
			remove_action( 'woocommerce_product_thumbnails', 'woocommerce_show_product_thumbnails', 20 );
			ob_start();
			// load content template.
			require_once RESTAURANT_ELEMENTOR_THEME_DIR . 'inc/woocommerce/quick-view/quick-view-product.php';
			echo ob_get_clean();
			die();
		}
		/**
		 * Quick view actions
		 */
		public function restaurant_elementor_quick_view_content_actions(){
			// Image.
			add_action('restaurant_elementor_woo_qv_product_image', 'woocommerce_show_product_sale_flash', 10 );
			add_action('restaurant_elementor_woo_qv_product_image', array( $this, 'restaurant_elementor_qv_product_images_markup' ), 20 );
		} 
			
		/**
		 * Footer markup.
		 */
		function restaurant_elementor_qv_product_images_markup(){
           require_once RESTAURANT_ELEMENTOR_THEME_DIR . 'inc/woocommerce/quick-view/quick-view-product-image.php';
		}
        function restaurant_elementor_woo_single_product_content_structure(){
							/**
							 * Add Product Title on single product page for all products.
							 */
							do_action( 'restaurant_elementor_woo_single_title_before' );
							woocommerce_template_single_title();
							do_action( 'restaurant_elementor_woo_single_title_after' );
							/**
							 * Add Product Price on single product page for all products.
							 */
							do_action( 'restaurant_elementor_woo_single_price_before' );
							woocommerce_template_single_price();
							do_action( 'restaurant_elementor_woo_single_price_after' );
							/**
							 * Add rating on single product page for all products.
							 */
							do_action( 'restaurant_elementor_woo_single_rating_before' );
							woocommerce_template_single_rating();
							do_action( 'restaurant_elementor_woo_single_rating_after' );
							
							do_action( 'restaurant_elementor_woo_single_short_description_before' );
							woocommerce_template_single_excerpt();
							do_action( 'restaurant_elementor_woo_single_short_description_after' );
							
							do_action( 'restaurant_elementor_woo_single_add_to_cart_before' );
							woocommerce_template_single_add_to_cart();
							do_action( 'restaurant_elementor_woo_single_add_to_cart_after' );
							
							do_action( 'restaurant_elementor_woo_single_category_before' );
							woocommerce_template_single_meta();
							do_action( 'restaurant_elementor_woo_single_category_after' );
			
		}

        /**
		 * Single Product customization.
		 *
		 * @return void
		 */
		function restaurant_elementor_single_product_customization(){
			if ( ! is_product() ){
				return;
			}
            remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_upsell_display', 15 );
            add_filter('woocommerce_product_description_heading', '__return_empty_string');
            add_filter('woocommerce_product_reviews_heading', '__return_empty_string');
            add_filter('woocommerce_product_additional_information_heading', '__return_empty_string');
        
			/* Display Related Products */
			if ( ! get_theme_mod( 'restaurant_elementor_related_product_display',true ) ) {
				remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );
			}
			/* Display upsell Products */
			if ( ! get_theme_mod( 'restaurant_elementor_upsell_product_display',true ) ) {
				remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_upsell_display', 20 );
			}

			if(get_theme_mod( 'restaurant_elementor_upsell_product_display',true )==true){
			  add_action( 'woocommerce_after_single_product_summary',array( $this, 'restaurant_elementor_woocommerce_output_upsells' ),15);
             }else{
             remove_action( 'woocommerce_after_single_product_summary',array( $this, 'restaurant_elementor_woocommerce_output_upsells' ));	
             }
             add_filter( 'woocommerce_output_related_products_args', array( $this, 'restaurant_elementor_related_no_col_product_show' ) );

		}
	    /*****************/
		// upsale product
       /*****************/
		function restaurant_elementor_woocommerce_output_upsells(){
		$upsell_columns = get_theme_mod('restaurant_elementor_upsale_num_col_shw','5');
		$upsell_no_product = get_theme_mod( 'restaurant_elementor_upsale_num_product_shw','5');	
        woocommerce_upsell_display($upsell_no_product,$upsell_columns); // Display max 3 products, 3 per row
         }
        /*****************************/ 
        // realted product argument pass
        /*****************************/ 
        function restaurant_elementor_related_no_col_product_show( $args){
		$rel_columns = get_theme_mod('restaurant_elementor_related_num_col_shw','5');
		$rel_no_product = get_theme_mod( 'restaurant_elementor_related_num_product_shw','5');
		$args['posts_per_page'] = $rel_no_product; // related products
	    $args['columns'] = $rel_columns; // arranged in columns
	    return $args;
		}   
		      
        // shop page content
        function restaurant_elementor_list_after_shop_loop_item(){
        ?>
           <div class="os-product-excerpt"><?php the_excerpt(); ?></div>
        <?php   
        }

		/**
		 * Change products per row for crossells.
		 */
		 function restaurant_elementor_cross_sell_display(){
			// Get count
			$count = get_theme_mod( 'restaurant_elementor_cross_num_product_shw', '4' );
			$count = $count ? $count : '4';
			// Get columns
			$columns = get_theme_mod( 'restaurant_elementor_cross_num_col_shw', '2' );
			$columns = $columns ? $columns : '2';
			// Alter cross-sell display
			woocommerce_cross_sell_display( $count, $columns );
		} 

        /**************************
		 * Shop Pagination.
		 **************************/
		function restaurant_elementor_pagination_infinite(){
         	check_ajax_referer( 'opn-shop-load-more-nonce', 'nonce' );
			do_action( 'restaurant_elementor_pagination_infinite' );
			$query_vars                   = json_decode( stripslashes( $_POST['query_vars'] ), true );
			$query_vars['paged']          = isset( $_POST['page_no'] ) ? absint( $_POST['page_no'] ) : 1;
			$query_vars['post_status']    = 'publish';
			$query_vars['posts_per_page'] = wc_get_default_products_per_row() * wc_get_default_product_rows_per_page();
			$query_vars                   = array_merge( $query_vars, wc()->query->get_catalog_ordering_args() );
			$posts = new WP_Query( $query_vars );

			if ( $posts->have_posts() ) {
				while ( $posts->have_posts() ) {
					$posts->the_post();

					/**
					 * Woocommerce: woocommerce_shop_loop hook.
					 *
					 * @hooked WC_Structured_Data::generate_product_data() - 10
					 */
					do_action( 'woocommerce_shop_loop' );

					
					wc_get_template_part( 'content', 'product' );
				}
			}
			wp_reset_query();

			wp_die();
        }

        function shop_pagination(){
			$pagination = get_theme_mod( 'restaurant_elementor_pagination' );
			if ( 'click' == $pagination || 'scroll' == $pagination){
				remove_action( 'woocommerce_after_shop_loop', 'woocommerce_pagination', 10 );
				add_action( 'woocommerce_after_shop_loop', array( $this, 'restaurant_elementor_pagination' ), 10 );
			}
		}
       function restaurant_elementor_pagination( $output ){
			global $wp_query;
			$infinite_event = get_theme_mod( 'restaurant_elementor_pagination' );
			$load_more_text = get_theme_mod( 'restaurant_elementor_pagination_loadmore_btn_text',__( 'Load More','restaurant-elementor'));
			if ( '' === $load_more_text ){
				$load_more_text = __( 'Load More', 'restaurant-elementor' );
			}
			if ( $wp_query->max_num_pages > 1 ){
				?>
				<nav class="opn-shop-pagination-infinite">
					<span class="inifiniteLoader"><div class="loader"></div></span>
					<?php if ( 'click' == $infinite_event ){ ?>
						
							<div class="restaurant-elementor-load-more">
								<button id="load-more-product" class="load-more-product-button texture-button opn-shop-load-more active" >
									<?php echo apply_filters( 'open_load_more_text', esc_html( $load_more_text ) ); ?>
								</button>
							</div>
							
					<?php } ?>
				</nav>
				<?php
			}
		}
        /**
		 * Shop page template.
		 *
		 * @since 1.0.0
		 * @return void if not a shop page.
		 */
		function shop_page_styles(){
			$is_ajax_pagination = $this->is_ajax_pagination();
			if ( ! ( is_shop() || is_product_taxonomy() ) && ! $is_ajax_pagination ) {
				return;
			}
		}

		/**
		 * Check if ajax pagination is calling.
		 *
		 * @return boolean classes
		 */
		function is_ajax_pagination(){
			$pagination = false;
			if ( isset( $_POST['open_infinite'] ) && wp_doing_ajax() && check_ajax_referer( 'opn-shop-load-more-nonce', 'nonce', false ) ){
				$pagination = true;
			}
			return $pagination;
		}


	}
endif;
restaurant_elementor_Pro_Woocommerce_Ext::get_instance();