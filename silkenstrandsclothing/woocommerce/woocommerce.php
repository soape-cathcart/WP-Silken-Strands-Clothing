<?php

get_header();

while(have_posts()) {
	the_post();
}

?>

<main class="page">


<?php woocommerce_content() ?>
</main>

<?php

get_footer();

?>





