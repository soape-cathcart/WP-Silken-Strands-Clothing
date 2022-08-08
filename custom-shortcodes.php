<?php 

function insertLogin() {
   wp_login_form();
}

add_shortcode('login', 'insertLogin');

?>