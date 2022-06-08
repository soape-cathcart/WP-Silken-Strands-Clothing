<?php 

function silkenstrands_files() {
   wp_enqueue_style('reset', get_template_directory_uri() . '/styles/reset.css');
   wp_enqueue_style('slick_styles', get_template_directory_uri() . '/styles/slick.css', array('reset'));
   wp_enqueue_style('silkenstrands_styles', get_template_directory_uri() . '/styles/main.css', array('slick_styles'));
   //wp_enqueue_style('silkenstrands_styles_map', get_template_directory_uri() . '/styles/main.css.map', array('silkenstrands_styles'));
   
   wp_register_script('jquery', '//code.jquery.com/jquery-3.6.0.min.js', NULL, '3.6.0', false);
   wp_enqueue_script('slick-js', get_template_directory_uri() . '/scripts/slick.js', array('jquery'), null, true);
   wp_enqueue_script('waypoint-js', get_template_directory_uri() . '/scripts/waypoint.js', array(), null, true);
   wp_enqueue_script('custom-js', get_template_directory_uri() . '/scripts/functions.js', array('waypoint-js', 'slick-js'), '1.0', true);
   wp_enqueue_script('home-js', get_template_directory_uri() . '/scripts/home.js', array('waypoint-js', 'slick-js'), '1.0', true);
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
        'footer' => 'Footer menu' 
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
      add_theme_support( 'wc-product-gallery-zoom' );
      add_theme_support( 'wc-product-gallery-lightbox' );
      add_theme_support( 'wc-product-gallery-slider' );
  }
  
  add_action( 'after_setup_theme', 'add_woocommerce_support' );



  // Product Image Flip
  function add_on_hover_shop_loop_image() {
    $image_id = wc_get_product()->get_gallery_image_ids()[1] ; 
    if ( $image_id ) {
      echo wp_get_attachment_image( $image_id )['300x450'] ;
    } else {  //assuming not all products have galleries set
      echo wp_get_attachment_image( wc_get_product()->get_image_id() ) ; 
    }
  }
  // add_action( 'woocommerce_before_shop_loop_item_title', 'add_on_hover_shop_loop_image' ) ; 


// To change add to cart text on single product page
// add_filter( 'woocommerce_product_single_add_to_cart_text', 'woocommerce_custom_single_add_to_cart_text' ); 
// function woocommerce_custom_single_add_to_cart_text() {
//     return __( 'Buy Now', 'woocommerce' ); 
// }

// To change add to cart text on product archives(Collection) page
// add_filter( 'woocommerce_product_add_to_cart_text', 'woocommerce_custom_product_add_to_cart_text' );  
// function woocommerce_custom_product_add_to_cart_text() {
//     return __( 'Buy Now', 'woocommerce' );
// }


?>