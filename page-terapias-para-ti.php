<?php
get_header();

if (is_user_logged_in()) {

	while(have_posts()) {
	    the_post();?>

	<!-- ========== MAIN CONTENT ========== -->
	<main id="content" role="main">
	    <!-- Hero Section -->
	    <div class="js-slick-carousel u-slick"
	         data-infinite="true"
	         data-autoplay="true"
	         data-speed="7000"
	         data-adaptive-height="true"
	         data-arrows-classes="d-none d-lg-inline-block u-slick__arrow-classic u-slick__arrow-centered--y rounded-circle"
	         data-arrow-left-classes="fa fa-arrow-left u-slick__arrow-classic-inner u-slick__arrow-classic-inner--left ml-lg-2 ml-xl-4"
	         data-arrow-right-classes="fa fa-arrow-right u-slick__arrow-classic-inner u-slick__arrow-classic-inner--right mr-lg-2 mr-xl-4"
	         data-numbered-pagination="#slickPaging">

	        <?php 
		    $terapias = new WP_Query(
		      array(

		      'posts_per_page' => 3,
		      'orderby'   => 'rand',
		      'post_type' => 'terapias',
		            )
		      );

		  	while($terapias->have_posts()) {
			      $terapias->the_post(); 
			      $durationTeraphy = get_field('field_5dc32f88b81f6'); 
			      $nivelDolor = hilda_project_get_terms($post->ID, 'nivel_de_dolor');
			      $ubicacionDolor = hilda_project_get_terms($post->ID, 'ubicacion_de_dolor');
			      $etiquetas = hilda_project_get_terms($post->ID, 'etiquetas');
		    
		    ?>

	      	<!-- Slide #1 -->
	      	<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'banner_main' );?>
	      	<div class="js-slide gradient-overlay-half-dark-v1 bg-img-hero" style="background-image: url('<?php echo $thumb['0'];?>');">
	        	<div class="container space-2 space-3--lg">
	          		<!-- Title -->
	          		<div class="w-lg-75 w-xl-65 pt-4">
				        <div class="card-sm-columns card-sm-2-count mb-2">
				           	<!-- Pricing -->
				          	<div style="background-color: rgba(255,255,255, 0.8);" class="card mb-2 mb-sm-0">
				            	<!-- Header -->
				            	<header class="card-header text-center p-2">
					                <h3>
					                  <?php the_title();?>
					                </h3>
				            	</header>
				            	<!-- End Header -->

				            	<!-- Content -->
				            	<div class="card-body p-5">
				              		<ul class="list-unstyled mb-2">
				                		<li class="font-size-14 py-1">
				                			<i class="far fa-sad-cry"></i> 
				                			Nivel de dolor: <?php echo $nivelDolor;?>
				                		</li>
				                		<li class="font-size-14 py-1">Ubicación del dolor: <?php echo $ubicacionDolor;?></li>
				                		<li class="font-size-14 py-1">Lugar: <?php echo $etiquetas;?></li>
				                		<li class="font-size-14 py-1">Duración: <?php echo $durationTeraphy;?> Minuntos</li>
				              		</ul>
				              		<button type="button" class="btn btn-block btn-sm btn-primary">Start Free Trial</button>
				            	</div>
				            	<!-- End Content -->
				          	</div>
				          	<!-- End Pricing -->
				        </div>  	
	          		</div>
	        	</div>
	      	</div>
	      	<!-- End Slide #1 -->
	      	<?php } wp_reset_postdata(); ?>
	    </div>
	    <!-- End Hero Section -->

	   	<!-- News Section -->
    	<div class="bg-gray-100">
      		<div class="container space-2 space-3--lg">
        		<!-- Title -->
        		<div class="w-md-80 w-lg-60 text-center mx-md-auto mb-9">
          			<span class="u-label u-label--sm u-label--purple mb-3">News</span>
          			<h2 class="h3">Read our news &amp; blogs</h2>
          			<p>Our duty towards you is to share our experience we're reaching in our work path with you.</p>
        		</div>
        		<!-- End Title -->

	        	<div class="card-deck d-block d-lg-flex">

		    	<?php 

			    $terapiasChart = new WP_Query(
			      array(

			      'posts_per_page' => -1,
			      'orderby'   => 'rand',
			      'post_type' => 'terapias'
			            )
			      );

			  	while($terapiasChart->have_posts()) {
				      $terapiasChart->the_post(); 
				      $durationTeraphy1 = get_field(''); 
				      $nivelDolor1 = hilda_project_get_terms($post->ID, 'nivel_de_dolor');
				      $ubicacionDolor1 = hilda_project_get_terms($post->ID, 'ubicacion_de_dolor');
				      $etiquetas1 = hilda_project_get_terms($post->ID, 'etiquetas');?>

			    	<article class="card border-0 mb-5">
	            		<div class="card-body row align-items-stretch no-gutters p-0">
	              			<!-- News Blog Card -->
	              			<div class="col-7 border border-right-0 rounded-left">
	                			<div class="p-5">
	                  				<h2 class="h5 mb-3">
	                    			<a href="../blog/single-article-classic.html">Announcing a free plan for small teams</a>
	                  			</h2>
	                 		 	<p class="mb-0">We've always believed that by providing a space where.</p>
	                		</div>
	              		</div>
	              		<div class="col-5 card-img-right border border-left-0 bg-img-hero" data-bg-img-src="../../assets/img/500x550/img1.jpg"></div>
	            		</div>
	            	<!-- End News Blog Card -->
	          		</article>
			    <?php } ?>
		    	</div>
		    </div>	
		</div> 


	</main>
	<?php } 

} else {

	// do login/regiister form
}

get_footer();

