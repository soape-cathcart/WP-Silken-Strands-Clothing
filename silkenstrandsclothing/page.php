<?php

get_header();

while(have_posts()) {
	the_post();
}

?>

<main class="page-main">
	<div class="container">

	<h1 class="page-title"><?php the_title(); ?></h1>

<?php



the_content();


// If Wholesale page
if (get_the_ID() === 245):

	function loggedIn() {
		echo 'loggedIn';
	}

	function loggedOut() {
		echo 'loggedOut';
	}
	
?>

	<?php if (!is_user_logged_in()): ?>
	<div class="wholesale-container">
		<?php endif; ?>

		<section class="wholesale <?php is_user_logged_in() ? loggedIn() :  loggedOut(); ?>">
			<p>Store owners can take advantage of our wholesale discounts! Please fill out the information below to apply and we’ll get back with you as soon as possible.</p>
			<?php echo do_shortcode('[contact-form-7 id="244" title="Wholesaler Application"]'); ?>
		</section>

		<?php if (!is_user_logged_in()): ?>
		<section class="login">
			<p>Already have an account? Log in here.</p>
			<?php echo do_shortcode("[wp_login_form]"); ?>
		</section>
		<?php endif; ?>
	</div>
	<?php endif; // if Wholesale page ?>

	</div> <!-- /.container -->
</main>

<?php

get_footer();

?>





