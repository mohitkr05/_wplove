    <footer id="footer" class="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
							  <?php dynamic_sidebar('sidebar-footer-1'); ?>	
                        </div>
                        <!-- /.col-md-4 -->
                        <div class="col-md-4">
                               <?php dynamic_sidebar('sidebar-footer-2'); ?>
                        </div>
                        <!-- /.col-md-4 -->
                        <div class="col-md-4">
                              <?php dynamic_sidebar('sidebar-footer-3'); ?>
                        </div>
                        <!-- /.col-md-4 -->
                     
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container -->
            </footer>
            <!-- /#footer -->
            <footer id="credits" class="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 footer-info-wrapper">
                           <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></p>                     
                        </div>
                        <!-- /.footer-info-wrapper -->
                        <div class="col-xs-12 col-sm-6 social-link-wrapper">
                           
                        </div>
                        <!-- /.social-link-wrapper -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container -->
            </footer>
            <!-- /#footer-2 -->
           

<?php wp_footer(); ?>


