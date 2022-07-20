<?php

get_header();

while(have_posts()) {
	the_post();
}

?>

<main class="">
	<div class="container">

	<h1 class="page-title"><?php the_title(); ?></h1>

<?php



the_content();


// If Wholesale page
if (get_the_ID() === 249):

	function loggedIn() {
		echo 'width: 600px; margin: 0 auto';
	}

	function loggedOut() {
		echo 'width: 60%;';
	}
	
?>

	<?php if (!is_user_logged_in()): ?>
	<div class="wholesale-container">
		<?php endif; ?>

		<section class="wholesale" style="<?php is_user_logged_in() ? loggedIn() :  loggedOut(); ?>">
			<p>Apply for Wholesaler status using the form below.</p>
			<?php echo do_shortcode("[wpforms id='246']"); ?>
		</section>

		<?php if (!is_user_logged_in()): ?>
		<section class="login">
			<p>Already have an account? Log in here.</p>
			<?php echo do_shortcode("[wp_login_form]"); ?>
		</section>
	</div>
	<?php endif; ?>
	<?php endif; // if Wholesale page ?>

	</div> <!-- /.container -->
</main>

<?php

get_footer();

?>





