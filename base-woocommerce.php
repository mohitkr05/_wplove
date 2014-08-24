
<?php get_template_part('templates/head');?>
<?php do_action('get_header'); ?>	
	
<?php //get_template_part( 'parts/top', 'bar' );?>
   <body <?php body_class(); ?>>    
	 
<?php get_template_part('templates/header-top-navbar'); ?>
<?php get_template_part('templates/page', 'header'); ?>
 
 <div class="wrap container" role="document">
    <div class="content row">
      <main class="main <?php echo roots_main_class(); ?>" role="main">
        <?php include roots_template_path(); ?>
      </main><!-- /.main -->
      <?php if (roots_display_sidebar()) : ?>
        <aside class="sidebar <?php echo roots_sidebar_class(); ?>" role="complementary">
          <?php include roots_sidebar_path(); ?>
        </aside><!-- /.sidebar -->
      <?php endif; ?>
    </div><!-- /.content -->
  </div><!-- /.wrap -->
     
        
  <?php get_template_part('templates/footer'); ?>

</body>
</html>
