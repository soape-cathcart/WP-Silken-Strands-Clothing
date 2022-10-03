<?php

get_header();

while(have_posts()) {
	the_post();
}

?>

<main class="home-content">
      <section class="slider-section hero-section" data-bg="<?php echo get_template_directory_uri(); ?>/images/watercolor/watercolor.jpg" data-effect="slide-right">
         <div class="left">
            <div class="slider">
					<?php
					if( have_rows('hero_images') ):
						while( have_rows('hero_images') ) : the_row();
							$image = get_sub_field('image');
							echo '<div class="slide"><img src="' . $image . '" /></div>';
						endwhile;
					// No value.
					//else :
						// Do something...
					endif;
					?>
            </div>
				<div class="overlay"></div>
         </div>
         <div class="right">
            <div class="hero-elements">

               <h1 class="home-title">Silken Strands</h1>

               <div class="tagline">
						<p class="one"><span>Classic</span> Shapes</p>
						<p class="two"><span>Modern</span> Details</p>
						<?php 
							// if (get_field('tagline')) {
							// the_field('tagline');
							// } else {
							// 	echo '<p>CLASSIC SHAPES <span class="star">&starf;</span> MODERN DETAILS</p>';
							// } 
						?>
					</div>
					
               <div class="cta">
						<a href="<?php the_permalink( wc_get_page_id( 'shop' ) ); ?>" class="button clear">
							<?php 
								if (get_field('button_text')) {
									the_field('button_text');
								} else {
									echo 'START SHOPPING';
								} 
							?>
						</a>

						<div class="social">

							<a class="facebook" href="https://www.facebook.com/silkenstrandsclothing/">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"/></svg>
							</a>

							<a class="instagram" href="https://www.instagram.com/silken_strands/">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/></svg>
							</a>

						</div>

					</div>



               
            </div>
            
         </div>
      </section>




      <section class="preview-section">
         <!-- <h2 id="display">Spring 2022</h2> -->


			<?php echo do_shortcode('[woo_product_slider id="253"]');?>

      </section>







      <section class="clothing-section">

         <h2 class="clothing-title-mobile"><?php if (get_field('catalog_title')) {
				the_field('catalog_title');
				} else {
					echo 'Our Catalog';
				} ?>
			</h2>

         <div class="container">

				<div class="right">

					<div class="slider">
						<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/png/1-Maggie.png"></a>
						<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/png/2-Misha.png"></a>
						<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/png/3-Tara.png"></a>
					</div>

				</div>

            <div class="left">

					<h2 class="clothing-title"><?php if (get_field('catalog_title')) {
						the_field('catalog_title');
						} else {
							echo 'Our Catalog';
						} ?>
					</h2>

					<div class="clothing-copy-box">

						<div class="clothing-copy">
							<?php if (get_field('catalog_text')) {
								the_field('catalog_text');
							} ?>
							<p class="tagline"><?php if (get_field('tagline2')) {
								the_field('tagline2');
								} else {
									echo 'We hope you find your style with <em>Silken Strands</em> clothing.';
								} ?>
							</p>
							<a href="<?php the_permalink( wc_get_page_id( 'shop' ) ); ?>" class="button clear"><?php if (get_field('button_text2')) {
									the_field('button_text2');
								} else {
									echo 'SHOP';
								} ?>
							</a>
						</div>

					</div>

				</div>

         </div>

      </section>





      <section class="about-section">

         <h2 class="mobile-title"><?php if (get_field('about_title')) {
					the_field('about_title');
				} else {
					echo 'Our Story';
				} ?>
			</h2>

         <div class="container">

            <div class="left">

               <div class="shaune">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/shaune-square.jpg" alt="Shaune Cathcart | Founder, Silken Strands Clothing">
               </div>

            </div>

            <div class="right">

               <h2 class="title"><?php if (get_field('about_title')) {
							the_field('about_title');
						} else {
							echo 'Our Story';
						} ?>
					</h2>

               <div class="about-copy-box">

                  <div class="about-copy">
							<?php if (get_field('about_text')) {
								the_field('about_text');
								} ?>

							<!-- <p class="tagline"></p> -->

							<p class="signature"><?php if (get_field('signature')) {
									the_field('signature');
								} else {
									echo 'Shaune Cathcart, Owner';
								} ?>
							</p>
                  </div>

               </div>

            </div>

         </div>
         
      </section>





		<section class="care-section">
			<h2 class="care-title">Care For Your Clothing</h2>
			<div class="care-copy-box">
				<div class="care-copy">
					<?php if (get_field('about_text')) {
						the_field('care_text');
						} ?>
				</div>
			</div>
		</section>








      <!-- Instagram Feed Here -->

		<section class="instagram">

			<h2 class="instagram-title"><?php if (get_field('instagram_title')) {
				the_field('instagram_title');
				} else {
					echo 'Follow Us on Instagram';
				} ?>
			</h2>

			<?php echo do_shortcode('[instagram-feed feed=1]') ?>

		</section>

   </main>

<?php

get_footer();



