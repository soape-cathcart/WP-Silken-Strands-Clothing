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

<body <?php body_class($class); ?>>

 
      <header id="silkenstrands-header">
         <?php if (!is_front_page()): ?>
            <div class="logo">
               <a href="<?php echo esc_url(get_template_directory_uri()); ?>">Silken Strands</a>
            </div>
         <?php endif; ?>

         <div class="banner-nav">

         <?php 
            $banner_menu_args = array(
               'menu'                 => '',
               'container'            => 'false',
               'container_class'      => '',
               'container_id'         => '',
               'container_aria_label' => '',
               'menu_class'           => 'banner-nav-links',
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
               'theme_location'       => 'banner',
            );
            wp_nav_menu($args = $banner_menu_args);
         ?>

         </div>

         <div class="desktop-nav">
            <nav>
               <!-- <a href="<?php //echo esc_url('/'); ?>" class="home-logo">
                  Silken Strands
               </a> -->
   
            <?php 
               $menu_args1 = array(
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
               wp_nav_menu($args = $menu_args1);
            ?>
   
            </nav>
         </div>

         <nav class="mobile-nav open-menu">
            <div class="nav-toggle">
               <svg class="svg-burger" viewBox="0 0 60 60" width="35" height="35">
                  <rect width="60" height="7" fill="#ccc"></rect>
                  <rect y="20" width="60" height="7" fill="#ccc"></rect>
                  <rect y="40" width="60" height="7" fill="#ccc"></rect>
               </svg>
               <br/>
               <svg class="svg-close" viewBox="0 0 60 60" width="35" height="35">
                  <line x1="0" y1="60" x2="60" y2="0" stroke-width="7" stroke="#ccc" />
                  <line x1="0" y1="0" x2="60" y2="60" stroke-width="7" stroke="#ccc" />
               </svg>
            </div>


<?php 
               $menu_args2 = array(
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
                  'theme_location'       => 'mobile',
               );
               wp_nav_menu($args = $menu_args2);
            ?>

               <span class="mobile-menu-close">
               <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><!--! Font Awesome Pro 6.1.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M310.6 361.4c12.5 12.5 12.5 32.75 0 45.25C304.4 412.9 296.2 416 288 416s-16.38-3.125-22.62-9.375L160 301.3L54.63 406.6C48.38 412.9 40.19 416 32 416S15.63 412.9 9.375 406.6c-12.5-12.5-12.5-32.75 0-45.25l105.4-105.4L9.375 150.6c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0L160 210.8l105.4-105.4c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25l-105.4 105.4L310.6 361.4z"/></svg>
               </span>

            

         </nav>

      </header>


