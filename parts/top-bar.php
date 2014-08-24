<header id="header-1" class="header">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-8 header-info-wrapper">
                            <?php
					if (has_nav_menu('top_menu_left')) :
					  wp_nav_menu(array('theme_location' => 'top_menu_left', 'menu_class' => 'top-bar'));
					endif;
				  ?>
                            <!-- /.list-inline -->
                        </div>
                        <!-- /.header-info-wrapper -->
                        <div class="col-xs-12 col-sm-4 social-link-wrapper">
                         
                        </div>
                        <!-- /.social-link-wrapper -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container -->
            </header>
            <!-- /.header-1 -->