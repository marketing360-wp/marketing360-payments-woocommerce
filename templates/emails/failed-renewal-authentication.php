<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
?>

<?php do_action( 'woocommerce_email_header', $email_heading, $email ); ?>

<p>
	<?php
	// translators: %1$s: name of the blog, %2$s: link to payment re-authentication URL, note: no full stop due to url at the end
	echo wp_kses( sprintf( _x( 'The automatic payment to renew your subscription with %1$s has failed. To reactivate the subscription, please login and authorize the renewal from your account page: %2$s', 'In failed renewal authentication email', 'marketing-360-payments-for-woocommerce' ), esc_html( get_bloginfo( 'name' ) ), '<a href="' . esc_url( $authorization_url ) . '">' . __( 'Authorize the payment &raquo;', 'marketing-360-payments-for-woocommerce' ) . '</a>' ), array( 'a' => array( 'href' => true ) ) ); ?>
</p>

<?php do_action( 'woocommerce_subscriptions_email_order_details', $order, $sent_to_admin, $plain_text, $email ); ?>

<?php do_action( 'woocommerce_email_footer', $email ); ?>
