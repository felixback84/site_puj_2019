<?php
get_header();

  while(have_posts()) {
    the_post(); ?>

<!-- ========== MAIN CONTENT ========== -->
<main id="content" role="main">
	<!-- Hero Section -->
		<?php $bgPic = wp_get_attachment_image_url('101','banner_main',true);?>              
    <div class="bg-img-hero" style="background-image: url('<?php echo $bgPic;?>');">    	             
      	<div class="js-slick-carousel u-slick space-1"
           data-infinite="true"
           data-arrows-classes="d-none d-lg-inline-block u-slick__arrow-classic u-slick__arrow-classic--dark u-slick__arrow-centered--y rounded-circle"
           data-arrow-left-classes="fa fa-arrow-left u-slick__arrow-classic-inner u-slick__arrow-classic-inner--left ml-lg-2 ml-xl-4"
           data-arrow-right-classes="fa fa-arrow-right u-slick__arrow-classic-inner u-slick__arrow-classic-inner--right mr-lg-2 mr-xl-4"
           data-pagi-classes="text-center u-slick__pagination mt-7 mb-0">
        <?php 
		    $products = new WP_Query(
		      array(

		      'posts_per_page' => -1,
		      'orderby'   => 'rand',
		      'post_type' => 'productos',
		            )
		      );

		  	while($products->have_posts()) {
		      $products->the_post(); 
		      $precioNormalItem = get_field('field_5d9c8a60680c8');
		      $precioPromoItem = get_field('field_5d9c8a76680c9');
		      ?>

        	<div class="js-slide">
          		<!-- Product Item -->
          		<div class="container">
            		<div class="row justify-content-lg-center align-items-lg-center">
              			<div class="col-lg-5">
                			<div class="pr-lg-4">
                  				<!-- Title -->
                  				<div class="mb-5">

                  					<?php if($precioNormalItem){
                  						echo'<span class="d-block h2 text-primary mb-0">$ ' . $precioNormalItem .' COP</span>';
                  					}else{
                  						echo'<span class="d-block h2 text-primary mb-0">$ ' . $precioPromoItem . ' COP</span>';
                  					} ?>
                   					
                    				<h1><?php the_title();?></h1>
                    				<p><?php the_excerpt();?></p>
                  				</div>
                  				<!-- End Title -->
                			</div>

                			<a class="btn btn-sm btn-primary btn-wide" href="single-product.html">
                  				<span class="fa fa-cart-arrow-down mr-2"></span>
                  				Add to Cart
                			</a>
              			</div>

              			<div class="col-lg-6">
                			<img class="img-fluid" src="<?php if ( has_post_thumbnail() ) { the_post_thumbnail_url('products_home');}?>" alt="Image Description">
              			</div>
            		</div>
          		</div>
          		<!-- End Product Item -->
        	</div>
        <!-- End Slick Carousel -->
        <?php }  wp_reset_postdata();?>
      	</div>
    </div>
    <!-- End Hero Section -->

    <!-- Products Section -->
    <div class="container space-1 space-1--lg">
        <!-- Title -->
	    <div class="w-md-80 w-lg-60 text-center mx-md-auto mb-9">
	        <span class="u-label u-label--sm u-label--purple mb-3">Space products</span>
	        <h2 class="h2">Productos en Hilda</h2>
	        <p>Conoce a tus amigos y las herramientas que tienen para ti.</p>
	    </div>
	    <!-- End Title -->

	    <!--  Categories -->
	    <div class="card-deck d-block d-lg-flex">

	    	<?php 
				// loop through terms of the Markets Taxonomy
				$getArgs = array(
				'parent'       => 0,
				'order' => 'DESC',
				'orderby' => 'count',
		   		'hide_empty'    => false,
				);
				// get the taxonomy we are going to loop through. 
				$taxonomy = get_terms('categorias', $getArgs);
					
				// Start the loop through the terms
				foreach ($taxonomy as $term) { 
			          
			 		// Get acf field Name
			        $image = get_field('field_5db89e9abe55f', $term ); 
			        $url = $image['url'];
			        $title = $image['title'];
			        $alt = $image['alt'];
			     	// which size?
			        $size = 'categories_cover';
			        $thumb = $image['sizes'][ $size ];
		    ?>
	        <article class="card border-0 mb-5 mb-lg-0">
		        <div class="card-body row align-items-stretch no-gutters p-0">
		            <div class="col-6 border border-right-0">
		                <div class="space-1 px-2 px-sm-3">
			                <div class="mb-4">
				                <h3 class="h4"><a href ="<?php echo get_term_link($term)?>"><?php echo $term -> name; ?></a></h3>
				                <p class="mb-0"><?php $littleDesc = $term -> description; 
				                echo wp_trim_words($littleDesc, 15);?></p>
			                </div>
		                	<a href="<?php get_term_link($term)?>">Ver más</a>
		                </div>
		            </div>
		            <div class="col-6 border border-left-0 bg-img-hero-center">
		            	<img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" title="<?php echo $title; ?>"/>
		            </div> 
		        </div>    
	        </article>
	        <?php } wp_reset_postdata(); // end foreach ?>
	    </div>
	    <!-- End Categories --> 
	</div>

    <!-- CTA -->
    <div class="gradient-half-primary-v1">
      <div class="bg-img-hero" style="background-image: url(../../assets/img/bg/bg2.png);">
        <div class="container">
          <div class="row justify-content-lg-center align-items-md-center text-center text-md-left space-2">
            <div class="col-md-12 col-lg-5">
              <div class="pl-md-4">
                <h2 class="h1 text-white mb-0">Get <strong>20% off</strong> your next purchase</h2>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End CTA -->
	
	<div class="container space-1 space-1--lg">    
	    <!-- Products Section -->
	    <div class="row mb-9">
	    	<?php 
			    $products = new WP_Query(
			      array(

			      'posts_per_page' => -1,
			      'orderby'   => 'rand',
			      'post_type' => 'productos',
			            )
			      );

			  	while($products->have_posts()) {
			      $products->the_post(); 
			      $precioNormalItem = get_field('field_5d9c8a60680c8');
			      $precioPromoItem = get_field('field_5d9c8a76680c9');
			      ?>

	        <div class="col-sm-6 col-lg-4 mb-5">
		        <!-- Shop Item -->
		        <a class="d-block border text-dark text-center" href="single-product.html">
		            <img class="img-fluid" src="<?php if ( has_post_thumbnail() ) { the_post_thumbnail_url('products_home');}?>" alt="Image Description">
		            <div class="border-top p-4">
		              	<h2 class="h5"><?php the_title();?></h2>
		              	<?php if($precioNormalItem){
      						echo'<span class="d-block h5 text-primary mb-0">$ ' . $precioNormalItem .' COP</span>';
      					}else{
      						echo'<span class="d-block h5 text-primary mb-0">$ ' . $precioPromoItem . ' COP</span>';
      					} ?>
		            </div>
		        </a>
		        <!-- End Shop Item -->
		        <div class="pt-2 align-items-center">  
		        	<a class="btn btn-outline-info btn-block mb-2 mb-md-0 mr-sm-2" href="<?php the_permalink()?>">Conoce más</a>
		        </div>	
	        </div>	
	        <?php }  wp_reset_postdata();?>
	    </div>
	</div>
	<!-- End Products Section -->
</main>
<!-- ========== END MAIN CONTENT ========== -->


<?php
 }; 
 get_footer();