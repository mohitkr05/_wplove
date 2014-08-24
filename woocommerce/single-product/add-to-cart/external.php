<?php
/**
 * External product add to cart
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.1.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
?>

<?php do_action( 'woocommerce_before_add_to_cart_btn btn-primary' ); ?>

<p class="cart">
	<a href="<?php echo esc_url( $product_url ); ?>" rel="nofollow" class="single_add_to_cart_btn btn-primary btn btn-primary alt"><?php echo $btn btn-primary_text; ?></a>
</p>

<?php do_action( 'woocommerce_after_add_to_cart_btn btn-primary' ); ?>