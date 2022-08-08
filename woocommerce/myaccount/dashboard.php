<?php
/**
 * My Account Dashboard
 *
 * Shows the first intro screen on the account dashboard.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/dashboard.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 4.4.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$allowed_html = array(
	'a' => array(
		'href' => array(),
	),
);
?>

<?php if (is_user_logged_in()): ?>



<div class="myaccount-dashboard">
	<ul class="dash-links">
		
		<li class="orders">
			<a href="<?php echo esc_url(get_site_url()); ?>/my-acount/orders">
				<img src="<?php echo get_template_directory_uri(); ?>/images/icon-orders.svg" alt="Previous Orders" />
				<span class="blue">Previous Orders</span>
			</a>
		</li>

		<li class="account-details">
			<a href="<?php echo esc_url(get_site_url()); ?>/my-acount/account-details">
				<img src="<?php echo get_template_directory_uri(); ?>/images/icon-edit-account.svg" alt="Account Details">
				<span class="green">Account Details</span>
			</a>
		</li>

		<li class="logout">
			<a href="<?php  do_shortcode('[logout]'); ?>">
				<img src="<?php echo get_template_directory_uri(); ?>/images/icon-logout.svg" alt="Log Out">
				<span class="pink">Log Out</span>
			</a>
		</li>

	</ul>
</div>

<p>
	<?php
	printf(
		/* translators: 1: user display name 2: logout url */
		wp_kses( __( 'Hello %1$s (not %1$s? <a href="%2$s">Log out</a>)', 'woocommerce' ), $allowed_html ),
		'<strong>' . esc_html( $current_user->display_name ) . '</strong>',
		esc_url( wc_logout_url() )
	);
	?>
</p>

<?php else: ?>


<?php endif; // if logged in ?>





