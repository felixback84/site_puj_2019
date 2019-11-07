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
					                <span class="display-4 text-dark">
					                  <?php the_title();?>
					                </span>
				            	</header>
				            	<!-- End Header -->

				            	<!-- Content -->
				            	<div class="card-body p-5">
				              		<ul class="list-unstyled mb-2">
				                		<li class="font-size-14 py-1"><i class="far fa-sad-cry"></i> Nivel de dolor: <?php echo $nivelDolor;?></li>
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
	      <?php } ?>
	    </div>
	    <!-- End Hero Section -->
	</main>

	<?php } 

} else {

	// do something
}

get_footer();

