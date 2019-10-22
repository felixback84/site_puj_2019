<?php
get_header();

  while(have_posts()) {
    the_post(); ?>

<!-- ========== MAIN CONTENT ========== -->
<main id="content" role="main">
	<!-- Hero Section -->
    <div class="bg-img-hero" style="background-image: url(../../assets/img/bg/bg1.png);">
      	<div class="js-slick-carousel u-slick space-2"
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
		      $products->the_post(); ?>

        	<div class="js-slide">
          		<!-- Product Item -->
          		<div class="container">
            		<div class="row justify-content-lg-center align-items-lg-center">
              			<div class="col-lg-5">
                			<div class="pr-lg-4">
                  				<!-- Title -->
                  				<div class="mb-5">
                   					<span class="d-block h2 text-primary mb-0">$99</span>
                    				<h1>The Space shoes</h1>
                    				<p>Our Space Design Makeup collection – to create your coolest look, then switch it up again tomorrow. Make every day, night and everything in-between as extraordinary as you are.</p>
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
    	<?php };?>
      	</div>
    </div>
    <!-- End Hero Section -->


    <!-- Products Section -->
    <div class="container space-2 space-3--lg">
        <!-- Title -->
	    <div class="w-md-80 w-lg-60 text-center mx-md-auto mb-9">
	        <span class="u-label u-label--sm u-label--purple mb-3">Space products</span>
	        <h2 class="h3">High-quality brands by Space</h2>
	        <p>Blending fine fabrics and brilliant colors, our spring assortment of handcrafted accessories are the perfect option for the warm months ahead.</p>
	    </div>
	    <!-- End Title -->

	    <!-- Categories -->
	    <div class="card-deck d-block d-lg-flex mb-9">
	        <article class="card border-0 mb-5 mb-lg-0">
		        <!-- Category -->
		        <div class="card-body row align-items-stretch no-gutters p-0">
		            <div class="col-6 border border-right-0">
		                <div class="space-2 px-3 px-sm-5">
			                <div class="mb-4">
				                <h3 class="h4">Space hats</h3>
				                <p class="mb-0">Experience a legend</p>
			                </div>
		                	<a href="#">Show Now</a>
		                </div>
		            </div>
		            <div class="col-6 border border-left-0 bg-img-hero-center" data-bg-img-src="../../assets/img/500x550/img13.jpg"></div>
		        </div>
		        <!-- End Category -->
	        </article>
	    </div>
	    <!-- End Categories -->

	    <div class="row mb-9">
	        <div class="col-sm-6 col-lg-3 mb-5">
		        <!-- Shop Item -->
		        <a class="d-block border text-dark text-center" href="single-product.html">
		            <img class="img-fluid" src="../../assets/img/500x550/img15.jpg" alt="Image Description">
		            <div class="border-top p-4">
		              	<h2 class="h5">Longline t-shirt</h2>
		             	<span class="d-block h5 text-primary mb-0">$21</span>
		            </div>
		        </a>
		        <!-- End Shop Item -->
	        </div>	
	    </div>

      	<div class="text-center">
        	<a class="btn btn-dark btn-wide" href="#">View More</a>
      	</div>
	</div>
	<!-- End Products Section -->

    <!-- CTA -->
    <div class="gradient-half-primary-v1">
	    <div class="bg-img-hero" style="background-image: url(../../assets/img/bg/bg2.png);">
	        <div class="container">
	          	<div class="row justify-content-lg-center align-items-md-center text-center text-md-left space-2">
	            	<div class="col-md-6 col-lg-4 mb-5 mb-md-0">
	              		<img class="img-fluid" src="../../assets/img/mockups/img7.png" alt="Image Descriptio">
	            	</div>

	            	<div class="col-md-6 col-lg-5">
	              		<div class="pl-md-4">
	                		<h2 class="h1 text-white mb-0">Get <strong>20% off</strong> your next purchase</h2>
	              		</div>
	            	</div>
	          	</div>
	        </div>
	    </div>
    </div>
    <!-- End CTA -->
</main>
<!-- ========== END MAIN CONTENT ========== -->


<?php
 }; 
 wp_reset_postdata();
 get_footer();