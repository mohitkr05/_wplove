<?php

//Tell WooCommerce that the theme supports it and do not show any pop-up

add_theme_support( 'woocommerce' );


//custom woocommerce functions

global $pagenow;
if ( is_admin() && isset( $_GET['activated'] ) && $pagenow == 'themes.php' ) add_action( 'init', 'yourtheme_woocommerce_image_dimensions', 1 );
 
/**
* Define image sizes
*/
function yourtheme_woocommerce_image_dimensions() {
	$catalog = array(
	'width' => '600',	// px
	'height'	=> '600',	// px
	'crop'	=> 1 // true
);
 
	$single = array(
	'width' => '600',	// px
	'height'	=> '600',	// px
	'crop'	=> 0 // true
);
 
$thumbnail = array(
	'width' => '120',	// px
	'height'	=> '120',	// px
	'crop'	=> 0 // false
);
 
// Image sizes
update_option( 'shop_catalog_image_size', $catalog ); // Product category thumbs
update_option( 'shop_single_image_size', $single ); // Single product image
update_option( 'shop_thumbnail_image_size', $thumbnail ); // Image gallery thumbs
}

remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);
?>