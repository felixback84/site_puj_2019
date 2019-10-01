<?php
get_header();?>

  <!-- ========== MAIN CONTENT ========== -->
<main id="content" role="main">
  <!-- Hero Section -->
  <?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'pageBanner' );?>
  <div class="gradient-overlay-half-dark-v1 bg-img-hero" style="background-image: url('<?php echo $thumb['0'];?>');">
    <div class="d-lg-flex align-items-lg-center flex-lg-column">
      <div class="container space-3 space-4-top--lg">
        <!-- Title -->
        <div class="w-md-50">
          <h1 class="display-4 font-size-48--md-down text-white"><?php 
          $txtMain = get_field('field_5d936cd4a8a09'); 
          echo $txtMain;?>
          </h1>
          <p class="lead text-white"><?php 
          $txtSec = get_field('field_5d936d11a8a0a'); 
          echo $txtSec;?></p>
        </div>
        <!-- End Title -->
      </div>
    </div>

    <div class="container space-1-bottom">
      <!-- Fancybox -->
      <div class="d-inline-block">
        <a class="js-fancybox u-media-player media align-items-center text-white" href="javascript:;"
           data-src="//vimeo.com/167434033"
           data-speed="700"
           data-animate-in="zoomIn"
           data-animate-out="zoomOut"
           data-caption="Space - Responsive Website Template">
          <span class="u-media-player__icon mr-3">
            <span class="fa fa-play u-media-player__icon-inner"></span>
          </span>
          <span class="media-body">
            <small class="d-block text-uppercase">Watch</small>
            Intro Video
          </span>
        </a>
      </div>
      <!-- End Fancybox -->
    </div>
  </div>
  <!-- End Hero Section -->
</main>
<!-- ========== END MAIN CONTENT ========== -->

<!-- Icon Blocks Section -->
<div class="bg-gray-100">
  <div class="container space-1 space-1--lg">
    <!-- Title -->
    <div class="w-md-80 w-lg-60 text-center mx-md-auto mb-9">
      <span class="u-label u-label--sm u-label--purple mb-3">Benefits</span>
      <h2 class="h3">Key benefits of project Space template</h2>
      <p>Choose your team to learn more about Space.</p>
    </div>
    <!-- End Title -->

    <div class="row justify-content-center">
      <div class="col-6 col-sm-4 col-lg mb-5 mb-lg-0">
        <!-- Icon Block -->
        <a class="d-block card-frame bg-white text-center rounded py-7 px-5" href="#">
          <?php $icon01 = get_field('field_5d9358d6ee87d');?>
          <img class="d-block max-width-12 mx-auto mb-4" src="<?php  
          echo $icon01{'url'};?>" alt="<?php $icon01{'alt'};?>">
          <h3 class="h6 text-dark mb-0">Marketing</h3>
          <p class="lead text-secondary"><?php 
          $contentFeatures1 = get_field('field_5d935a42ee87f'); 
          echo $contentFeatures1;?></p>
        </a>
        <!-- End Icon Block -->
      </div>

      <div class="col-6 col-sm-4 col-lg mb-5 mb-sm-0">
        <!-- Icon Block -->
        <a class="d-block card-frame bg-white text-center rounded py-7 px-5" href="#">
          <?php $icon02 = get_field('field_5d935ab8a99b9');?>
          <img class="d-block max-width-12 mx-auto mb-4" src="<?php  
          echo $icon02{'url'};?>" alt="<?php $icon02{'alt'};?>">
          <h3 class="h6 text-dark mb-0">Operations</h3>
          <p class="lead text-secondary"><?php 
          $contentFeatures2 = get_field('field_5d935ad6a99bb'); 
          echo $contentFeatures2;?></p>
        </a>
        <!-- End Icon Block -->
      </div>

      <div class="col-6 col-sm-4 col-lg mb-5 mb-sm-0">
        <!-- Icon Block -->
        <a class="d-block card-frame bg-white text-center rounded py-7 px-5" href="#">
          <?php $icon03 = get_field('field_5d935da259b52');?>
          <img class="d-block max-width-12 mx-auto mb-4" src="<?php  
          echo $icon03{'url'};?>" alt="<?php $icon03{'alt'};?>">
          <h3 class="h6 text-dark mb-0">HR</h3>
          <p class="lead text-secondary"><?php 
          $contentFeatures3 = get_field('field_5d935db959b54'); 
          echo $contentFeatures3;?></p>
        </a>
        <!-- End Icon Block -->
      </div>

      <div class="col-6 col-sm-4 col-lg mb-5 mb-sm-0">
        <!-- Icon Block -->
        <a class="d-block card-frame bg-white text-center rounded py-7 px-5" href="#">
          <?php $icon04 = get_field('field_5d935f22cf98b');?>
          <img class="d-block max-width-12 mx-auto mb-4" src="<?php  
          echo $icon04{'url'};?>" alt="<?php $icon04{'alt'};?>">
          <h3 class="h6 text-dark mb-0">Legal</h3>
          <p class="lead text-secondary"><?php 
          $contentFeatures4 = get_field('field_5d935f2dcf98d'); 
          echo $contentFeatures4;?></p>
        </a>
        <!-- End Icon Block -->
      </div>

      <div class="col-6 col-sm-4 col-lg">
        <!-- Icon Block -->
        <a class="d-block card-frame bg-white text-center rounded py-7 px-5" href="#">
          <?php $icon05 = get_field('field_5d935f36cf98e');?>
          <img class="d-block max-width-12 mx-auto mb-4" src="<?php  
          echo $icon05{'url'};?>" alt="<?php $icon05{'alt'};?>">
          <h3 class="h6 text-dark mb-0">Finance</h3>
          <p class="lead text-secondary"><?php 
          $contentFeatures5 = get_field('field_5d935f4acf991'); 
          echo $contentFeatures5;?></p>
        </a>
        <!-- End Icon Block -->
      </div>
    </div>
  </div>
</div>
<!-- End Icon Blocks Section -->

<!-- Cubeportfolio -->
<div class="container-fluid u-cubeportfolio py-3">
  <!-- Content -->
  <div class="cbp"
        data-animation="quicksand"
        data-caption-animation="zoom"
        data-x-gap="15"
        data-y-gap="15"
        data-media-queries='[
          {"width": 1500, "cols": 4},
          {"width": 1100, "cols": 4},
          {"width": 800, "cols": 3},
          {"width": 580, "cols": 2},
          {"width": 300, "cols": 1}
        ]'>
    <!-- Item -->
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

    <div class="cbp-item graphic">
      <div class="cbp-caption">
        <div class="cbp-caption-defaultWrap">
         <img style="width: 100%; height: 100%;" src="<?php if ( has_post_thumbnail() ) { the_post_thumbnail_url('products_home');}?>" alt="<?php the_title_attribute();?>">
        </div>
        <div class="cbp-caption-activeWrap">
          <div class="cbp-l-caption-alignCenter d-flex align-items-start">
            <div class="mb-auto p-3">
              <span class="u-label u-label--sm u-label--purple mb-3"><h2 class="h5 mb-0"><?php the_title();?></h2></span>     
            </div>
            <ul class="list-inline mt-auto ml-auto p-3 mb-0">
              <li class="list-inline-item">
                <a class="u-icon u-icon--primary rounded-circle" href="<?php the_permalink();?>">
                  <i class="fa fa-link u-icon__inner"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="cbp-lightbox u-icon u-icon--primary rounded-circle" href="../../assets/img/1920x1080/img7.jpg">
                  <i class="fa fa-images u-icon__inner"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  <?php }?>
    <!-- End Item -->
  </div>
  <!-- End Content -->
</div>
<!-- End Cubeportfolio -->

<?php get_footer();?>