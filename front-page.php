 <div class="bg-intro" id="home">
      <div class="layer-intro">
        <div class="container">
          <div class="row">
            <div class="col-sm-12">
              <h1 class="text-center">Beautiful Themes <br> that will make you fall in love.</h1>
				
			

            </div>
          </div>
        </div>
      </div>
    </div>

<div class="wrap container">
<div class="row">
<div class = "col-md-3 col-sm-6">
	<div class = "services-box">

	 <i class = "fa fa-heart"></i>
    <h4>Pretty Themes</h4>
    <p>Fall in love with great and useful design. Our themes will suit your need</p> 
	
	</div>
    </div>

	<div class = "col-md-3 col-sm-6">
    <div class = "services-box">
   <i class="fa fa-desktop"></i> 	
    <h4>Responsive Themes</h4>
    <p>All our themes are responsive and works with any screen size</p> </div>
    </div>

	<div class = "col-md-3 col-sm-6">
    <div class = "services-box">
    <i class="fa fa-code"></i>  
    <h4>Clean Code</h4>
    <p>With clean code and documentation, you can modify the theme as you wish to.</p> </div>
    </div>

	<div class = "col-md-3 col-sm-6">
    <div class = "services-box">
    <i class="fa fa-cogs"></i>
    <h4>Lot of Options</h4>
    <p>Lot of included shortcodes and options to help you customize the theme as you wish to.</p> </div>
    </div>

	</div>


<div class="space-70"></div>

<div class="row">
	<div class="col-md-12">
           <h3 class="heading-sec">Latest Themes</h3>
        </div>
	</div>
	<?php
	global $post, $product;
query_posts( array ( 'post_type' => 'product' ,  'posts_per_page' => 6) );

?>  <?php if ( have_posts() ) : ?>
<div class="row">
	<?php while ( have_posts() ) : the_post(); ?>
	<div class="col-md-4 col-sm-6 margin-btm-40">
            <div class="portfolio-sec">
                <div class="portfolio-thumnail">
                       <a href="<?php the_permalink(); ?>">
        <?php if (has_post_thumbnail()) :
		the_post_thumbnail('product-thumb');	
		  else: ?>
		<img src="<?php echo get_stylesheet_directory_uri()."/images/dthumb.png"; ?>">  
		<?php
	endif; 
	?>
                    </a>
                </div>
                <div class="portfolio-desc text-center">
                    <h4 class="portfolio-post-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h4>
                     <p><?php the_excerpt(); ?>

                      <a href="<?php the_permalink(); ?>" rel="bookmark" class="btn btn-primary">More Details <i class="fa fa-chevron-circle-right"></i> </a> <?php if ( get_post_meta( get_the_ID(), 'demo_link', true ) ) : ?> <a href="<?php echo get_post_meta( get_the_ID(), 'demo_link', true ); ?>" rel="bookmark" class="btn btn-danger">Theme Preview <i class="fa fa-eye"></i></a><?php endif; ?> </p>
                </div>
            </div>
        </div><!--portfolio item -->
	
		<?php endwhile; ?>


	</div>

		<?php endif; ?>


<div class="space-70"></div>

<div class="row">
	<div class="col-md-12">
           <h3 class="heading-sec">Latest Posts</h3>
        </div>
	</div>
	<?php
	global $post, $product;
query_posts( array ( 'post_type' => 'post' ,  'posts_per_page' => 3) );

?>  <?php if ( have_posts() ) : ?>
<div class="row">
	<?php while ( have_posts() ) : the_post(); ?>
	<div class="col-md-4 col-sm-6 margin-btm-40">
            <div class="news-desc">
                <div class="news-thumnail">
                       <a href="<?php the_permalink(); ?>">
        <?php if (has_post_thumbnail()) :
		the_post_thumbnail('product-thumb');	
		  else: ?>
		<img src="<?php echo get_stylesheet_directory_uri()."/images/dthumb.png"; ?>">  
		<?php
	endif; 
	?>
                    </a>
                </div>
                <div class="news-desc text-center">
                    <h4 class="portfolio-post-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h4>
                     <p><?php the_excerpt(); ?> <a href="<?php the_permalink(); ?>" rel="bookmark" class="btn btn-primary">  Read More <i class="fa fa-arrow-circle-o-right">  </i></a> </p>
                  
                </div>
            </div>
        </div><!--portfolio item -->
	
		<?php endwhile; ?>


	</div>

		<?php endif; ?>


<div class="space-70"></div>

</div>
        <div class="space-70"></div>
