<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">

  <title><?php wp_title( '|', true, 'right' ); ?></title>

  <meta name="description" content="Silken Strands, a collection of natural fiber blouses for Spring 2021. Designed for women desiring classic woven blouses that are flattering, feminine and fun." />
  <meta name="revised" content="3/7/2017" />
  <meta name="author" content="Jonathan Soape" />
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Favicon -->
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/images/favicon/apple-touch-icon.png">
   <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/images/favicon/favicon-32x32.png">
   <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/images/favicon/favicon-16x16.png">
   <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/images/favicon/site.webmanifest">
   <link rel="mask-icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon/safari-pinned-tab.svg" color="#5bbad5">
   <meta name="msapplication-TileColor" content="#2b5797">
   <meta name="theme-color" content="#ffffff">
  
  <!-- Pinterest -->
  <meta name="p:domain_verify" content="86d7a9d5825344a984a9d0a19fb2853d"/>


  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
 
   <header>
      <nav class="desktop-nav">

		<?php 
			$menu_args = array(
				'menu'                 => '',
				'container'            => 'false',
				'container_class'      => '',
				'container_id'         => '',
				'container_aria_label' => '',
				'menu_class'           => 'nav-links',
				'menu_id'              => '',
				'echo'                 => true,
				'fallback_cb'          => 'wp_page_menu',
				'before'               => '',
				'after'                => '',
				'link_before'          => '',
				'link_after'           => '',
				'items_wrap'           => '<ul id="%1$s" class="%2$s">%3$s</ul>',
				'item_spacing'         => 'preserve',
				'depth'                => 0,
				'walker'               => '',
				'theme_location'       => 'header',
			);
			wp_nav_menu($args = $menu_args);
		?>

         <!-- <ul class="cart-links">
            <li><a href="./store.html#!/~/cart">
               <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M112 112C112 50.14 162.1 0 224 0C285.9 0 336 50.14 336 112V160H400C426.5 160 448 181.5 448 208V416C448 469 405 512 352 512H96C42.98 512 0 469 0 416V208C0 181.5 21.49 160 48 160H112V112zM160 160H288V112C288 76.65 259.3 48 224 48C188.7 48 160 76.65 160 112V160zM136 256C149.3 256 160 245.3 160 232C160 218.7 149.3 208 136 208C122.7 208 112 218.7 112 232C112 245.3 122.7 256 136 256zM312 208C298.7 208 288 218.7 288 232C288 245.3 298.7 256 312 256C325.3 256 336 245.3 336 232C336 218.7 325.3 208 312 208z"/></svg>
               </a>
            </li>
         </ul> -->
      </nav>
      <nav class="mobile-nav open-menu">
         <div class="nav-toggle">
            <svg class="svg-burger" viewBox="0 0 60 60" width="60" height="60">
               <rect width="60" height="7" fill="#ccc"></rect>
               <rect y="20" width="60" height="7" fill="#ccc"></rect>
               <rect y="40" width="60" height="7" fill="#ccc"></rect>
             </svg>
             <br/>
             <svg class="svg-close" viewBox="0 0 60 60" width="60" height="60">
               <line x1="0" y1="60" x2="60" y2="0" stroke-width="7" stroke="#ccc" />
               <line x1="0" y1="0" x2="60" y2="60" stroke-width="7" stroke="#ccc" />
             </svg>
         </div>

			<?php wp_nav_menu($args = $menu_args); ?>
         <!-- <ul class="nav-links">
            <li><a href="./">HOME</a></li>
            <li><a href="./about">STORE</a></li>
         </ul> -->
         
			<!-- <ul class="cart-links">
            <li>
               <a href="./store.html#!/~/cart"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M112 112C112 50.14 162.1 0 224 0C285.9 0 336 50.14 336 112V160H400C426.5 160 448 181.5 448 208V416C448 469 405 512 352 512H96C42.98 512 0 469 0 416V208C0 181.5 21.49 160 48 160H112V112zM160 160H288V112C288 76.65 259.3 48 224 48C188.7 48 160 76.65 160 112V160zM136 256C149.3 256 160 245.3 160 232C160 218.7 149.3 208 136 208C122.7 208 112 218.7 112 232C112 245.3 122.7 256 136 256zM312 208C298.7 208 288 218.7 288 232C288 245.3 298.7 256 312 256C325.3 256 336 245.3 336 232C336 218.7 325.3 208 312 208z"/></svg></a>
            </li>
         </ul> -->
      </nav>
      <div class="page-title">

      </div>
   </header>