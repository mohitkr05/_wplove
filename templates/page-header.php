<?php if(is_home()) { ?>
<section id="page-title-wrapper" class="section page-title-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6 page-title">
                        <h1><?php echo roots_title(); ?></h1>
                    </div>
                    <!-- /.page-title -->
                  
					<div class="col-xs-6 hidden-xs">
							<?php woocommerce_breadcrumb();  ?>
						</div>
                    <!-- /.breadcrumb-wrapper -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </section>

<?php } 
?>