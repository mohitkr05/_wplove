
<?php get_template_part('templates/head');?>
<?php do_action('get_header'); ?>	
	
<?php //get_template_part( 'parts/top', 'bar' );?>
   <body <?php body_class(); ?>>    
	 
<?php get_template_part('templates/header-top-navbar'); ?>
<?php get_template_part('templates/page', 'header'); ?>
  <?php include roots_template_path(); ?>
 
        
<?php get_template_part('templates/footer'); ?>

</body>
</html>
