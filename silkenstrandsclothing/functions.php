<?php 

function silkenstrands_files() {
   wp_enqueue_style('reset', get_template_directory_uri() . '/styles/reset.css');
   wp_enqueue_style('slick_styles', get_template_directory_uri() . '/styles/slick.css', array('reset'));
   wp_enqueue_style('mmenu-styles', get_template_directory_uri() . '/styles/mmenu-light.css', array('reset'));
   wp_enqueue_style('silkenstrands_styles', get_template_directory_uri() . '/styles/main.css', array('slick_styles'));
   //wp_enqueue_style('silkenstrands_styles_map', get_template_directory_uri() . '/styles/main.css.map', array('silkenstrands_styles'));
   
   wp_register_script('jquery', '//code.jquery.com/jquery-3.6.0.min.js', NULL, '3.6.0', false);
   wp_enqueue_script('slick-js', get_template_directory_uri() . '/scripts/slick.js', array('jquery'), null, true);
   wp_enqueue_script('waypoint-js', get_template_directory_uri() . '/scripts/waypoint.js', array(), null, true);
  //  wp_enqueue_script('mmenu-js', get_template_directory_uri() . '/scripts/mmenu-lite.js', array('jquery'), null, true);
  //  wp_enqueue_script('mmenu2-js', get_template_directory_uri() . '/scripts/mmenu-lite.polyfills.js', array('mmenu-js'), null, true);
   wp_enqueue_script('custom-js', get_template_directory_uri() . '/scripts/functions.js', array('waypoint-js', 'slick-js'), '1.0', true);
   wp_enqueue_script('home-js', get_template_directory_uri() . '/scripts/home.js', array('waypoint-js', 'slick-js'), '1.0', true);
   wp_enqueue_script('shop-js', get_template_directory_uri() . '/scripts/shop.js', array('waypoint-js', 'slick-js'), '1.0', true);
}

add_action('wp_enqueue_scripts', 'silkenstrands_files');









// ACF OPTIONS PAGES

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Global Settings',
		'menu_title'	=> 'Global Settings',
		'menu_slug' 	=> 'global-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> true
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Global',
		'menu_title'	=> 'Global',
		'parent_slug'	=> 'global-settings',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Footer Info',
		'menu_title'	=> 'Footer Info',
		'parent_slug'	=> 'global-settings',
	));
	
}




   // This theme uses post thumbnails
   add_theme_support( 'post-thumbnails' );



   // Remove content field from Product Editor
  function remove_product_editor() {
    remove_post_type_support( 'product', 'editor' );
  }
  add_action( 'init', 'remove_product_editor' );



   

    // Register Nav Menus
    function silkenstrands_nav_menus() {
      register_nav_menus( array( 
        'header' => 'Header menu', 
        'footer' => 'Footer menu',
        'banner' => 'Banner menu',
        'account' => 'Account menu',
        'mobile' => 'Mobile menu'
      ) );
     }
    
    add_action( 'after_setup_theme', 'silkenstrands_nav_menus' );


// Register page templates
// function add_page_templates() {
//   add_theme_support( 'block-templates' );
// }

// add_action('after_setup_theme', 'add_page_templates');


   // WooCommerce Setup
   function add_woocommerce_support() {
      add_theme_support( 'woocommerce' );
      // add_theme_support( 'wc-product-gallery-zoom' );
      add_theme_support( 'wc-product-gallery-lightbox' );
      add_theme_support( 'wc-product-gallery-slider' );
  }
  
  add_action( 'after_setup_theme', 'add_woocommerce_support' );

  function remove_image_zoom_support() {
    remove_theme_support( 'wc-product-gallery-zoom' );
}
add_action( 'wp', 'remove_image_zoom_support', 100 );



  // Product Image Flip
  // function add_on_hover_shop_loop_image() {
  //   $image_id = wc_get_product()->get_gallery_image_ids()[1] ; 
  //   if ( $image_id ) {
  //     echo wp_get_attachment_image( $image_id );
  //   } else {  
  //     echo wp_get_attachment_image( wc_get_product()->get_image_id() ) ; 
  //   }
  // }
  // add_action( 'woocommerce_before_shop_loop_item_title', 'add_on_hover_shop_loop_image' ) ; 


 

  // Rename My Account if not logged in
  add_filter( 'wp_nav_menu_items', 'ssc_dynamic_menu_item_label', 9999, 2 ); 
  
  function ssc_dynamic_menu_item_label( $items, $args ) { 
    if ( ! is_user_logged_in() ) { 
        $items = str_replace( "My Account", "Login", $items ); 
    } 
    return $items; 
  } 




  // Merge Address Info to Account Details section
 
  add_filter( 'woocommerce_account_menu_items', 'ssc_remove_address_my_account', 999 );
  
  function ssc_remove_address_my_account( $items ) {
    unset( $items['edit-address'] );
    return $items;
  }
  
  // 2. Second, print the ex tab content (woocommerce_account_edit_address) into an existing tab (woocommerce_account_edit-account_endpoint). See notes below!
  
  add_action( 'woocommerce_account_edit-account_endpoint', 'woocommerce_account_edit_address' );


  

  // Remove Logout confirmation
  add_action('check_admin_referer', 'logout_without_confirm', 10, 2);

   function logout_without_confirm($action, $result) {

      if ($action == "log-out" && !isset($_GET['_wpnonce'])) {

      $redirect_to = isset($_REQUEST['redirect_to']) ?

      $_REQUEST['redirect_to'] : '';

      $location = str_replace('&amp;', '&', wp_logout_url($redirect_to));

      header("Location: $location");

      die();

    }
  }




  // Remove Country field from WooCommerce checkout
  // function custom_override_checkout_fields( $fields )    
  //   {
  //   unset($fields['billing']['billing_country']);
  //   return $fields;
  //   }
  //   add_filter('woocommerce_checkout_fields','custom_override_checkout_fields');




  // Disable Log Out Confirmation
  function wc_bypass_logout_confirmation() {
    global $wp;
    
    if ( isset( $wp->query_vars['customer-logout'] ) ) {
    wp_redirect( str_replace( '&amp;', '&', wp_logout_url( wc_get_page_permalink( 'myaccount' ) ) ) );
    exit;
    }
    }
    
    add_action( 'template_redirect', 'wc_bypass_logout_confirmation' );



// Shortcodes

include('custom-shortcodes.php')



?>