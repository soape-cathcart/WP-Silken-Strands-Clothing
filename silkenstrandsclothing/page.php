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
?>
</div>
</main>

<?php

get_footer();

?>





