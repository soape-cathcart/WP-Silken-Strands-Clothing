
  <!-- Footer -->

  <footer>
     <div class="top">
        <div class="left">
         <h2 class="title">Silken Strands</h2>
         <div class="contact">
            <h5><?php if (get_field('owner')) {
                  the_field('owner');
               } else {
                  echo 'Shaune Cathcart, Owner';
               }?>
            </h5>
            <p><a href="mailto:<?php  ?>shaune.cathcart@silkenstrandsclothing.com"><img src="<?php echo get_template_directory_uri(); ?>/images/icon-mail.png" alt="Mail Icon" width="22px" /> shaune.cathcart<br class="mobile-br" /><?php  ?>@silkenstrandsclothing.com</a></p>
         </div>
      </div>

      <div class="middle">
         <nav class="nav-links">
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
         </nav>
         <!-- <ul class="nav-links">
            <li><a href="./">HOME</a></li>
            <li><a href="./store.html">STORE</a></li>
            <li><a href="./store.html#!/~/cart">CART</a></li>
         </ul> -->
      </div>

      <div class="right">
         <div class="social">
            <a href="https://www.facebook.com/silkenstrandsclothing/"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"/></svg></a>
            <a href="https://www.instagram.com/silken_strands/"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/></svg></a>
         </div>
         <p><?php if (get_field('location_text')){
               the_field('location_text');
            } else {
               echo 'Based in the Dallas &starf; Fort Worth Metroplex';
            }?>
         </p>
         <p><?php if (get_field('clothing_source')){
               the_field('clothing_source');
            } else {
               echo '<em>Silken Strands</em> is proud to sew all clothing in the USA';
            }?>
         </p>
         <p><a href="<?php echo esc_url(get_permalink(3)); ?>">Privacy Policy</a></p>
         </div>
     </div>
     
      <p class="copyright">&copy; <?php if (get_field('copyright')){
               the_field('copyright');
            } else {
               echo 'Silken Strands Clothing 2022';
            }?>
         

      </p>
  </footer>

<script>
// $ = jQuery.noConflict(true);
</script>

<?php wp_footer(); ?>

</body>
</html>