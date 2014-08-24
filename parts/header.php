
<div id="page" class="hfeed site"> <!--ends in footer-->
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'bluelove' ); ?></a>

    <div class="navbar navbar-default navbar-static-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
         <a class="navbar-brand" href="<?php echo esc_url(home_url()); ?>/"><?php bloginfo('name'); ?></a>
        </div>
        <div class="navbar-collapse collapse navbar-right">
         <?php
					if (has_nav_menu('primary_navigation')) :
					wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav'));
					endif;
				?>
        </div><!--/.nav-collapse -->
      </div>
   </div>
</div>
	
<div id="blue">
	    <div class="container">
			<div class="row">
				<div class="col-md-8"><h2 class="blue"><?php echo bluelove_title(); ?></h2></div>
				<div class="col-md-4"><?php if(function_exists('bluelove_breadcrumbs')) bavota_breadcrumbs(); ?></div>
			  
			</div><!-- /row -->
	    </div> <!-- /container -->
	</div><!-- /blue -->
	
	
 
<div id="content" class="site-content container mtb">
