<!-- *****************************************************************************************************************
	 FOOTER
	 ***************************************************************************************************************** -->
	 <div id="footerwrap">
	 	<div class="container">
		 	<div class="row">
		 		<div class="col-lg-4">
		 			 <?php dynamic_sidebar( 'footer-1' ); ?>
		 		</div>
		 		<div class="col-lg-4">
		 			 <?php dynamic_sidebar( 'footer-2' ); ?>
		 		</div>
		 		<div class="col-lg-4">
		 			 <?php dynamic_sidebar( 'footer-3' ); ?>
		 		</div>
		 	
		 	</div><!--/row -->
	 	</div><!--/container -->
	 </div><!--/footerwrap -->
<div class="site-footer ">  
		
			<?php if( of_get_option( 'bluelove_credits' ) == false ) { ?>

			<span class="credit">
				<?php printf( __( 'Powered by <a href="http://wordpress.org/" title="%1$s" rel="generator">%2$s</a> &middot; Theme by <a href="http://kumarmohit.com/" title="%3$s" rel="designer">%4$s</a>', 'tiga' ),
					esc_attr( 'A Semantic Personal Publishing Platform'),
					'WordPress',
					esc_attr( 'Mohit'),
					'Mohit'
				); ?>
			</span>

		<?php } ?>
		
		</div><!-- .site-info -->	
<?php wp_footer(); ?>