<!doctype html>
<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<?php // mobile meta (hooray!) ?><meta name="HandheldFriendly" content="True"><meta name="MobileOptimized" content="320">
  <title><?php wp_title('|', true, 'right'); ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
	<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/logo2x.png">
	<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png">
	
<!--[if IE]>
<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png">
<![endif]-->
	<?php // or, set /favicon.ico for IE10 win ?>
<meta name="msapplication-TileColor" content="#f01d4f">
<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png">
<meta name="google-site-verification" content="WisCbmd4AtN8UNfVQaqnpeuczRamS5eVLpwbCpmDJhI" />

  <?php wp_head(); ?>

  <link rel="alternate" type="application/rss+xml" title="<?php echo get_bloginfo('name'); ?> Feed" href="<?php echo esc_url(get_feed_link()); ?>">
</head>
