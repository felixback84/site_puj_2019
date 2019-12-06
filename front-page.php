<?php
get_header();?>

  <!-- ========== MAIN CONTENT ========== -->
<main id="content" role="main">
  <!-- Hero Section -->
  <?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'banner_main' );?>
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
        <?php 
          $urlVid = get_field('field_5d935784f9af3'); 
        ?>
        <a class="js-fancybox u-media-player media align-items-center text-white" href=""
           data-src="<?php echo $urlVid; ?>"
           data-speed="700"
           data-animate-in="zoomIn"
           data-animate-out="zoomOut"
           data-caption="Space - Responsive Website Template">
          <span class="u-media-player__icon mr-3">
            <span class="fa fa-play u-media-player__icon-inner"></span>
          </span>
          <span class="media-body">
            <small class="d-block text-uppercase">Mira</small>
            Intro Video del prodcuto
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
          3
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
<div class="container u-cubeportfolio py-3">
  <!-- Title -->
  <div class="w-md-80 w-lg-60 text-center mx-md-auto mb-9">
    <span class="u-label u-label--sm u-label--purple mb-3">Benefits</span>
    <h2 class="h3">Key benefits of project Space template</h2>
    <p>Choose your team to learn more about Space.</p>
  </div>
  <!-- End Title -->
  <!-- Content -->
  <div class="cbp"
        data-animation="quicksand"
        data-caption-animation="zoom"
        data-x-gap="15"
        data-y-gap="15"
        data-media-queries='[
          {"width": 1500, "cols": 3},
          {"width": 1100, "cols": 3},
          {"width": 800, "cols": 2},
          {"width": 580, "cols": 2},
          {"width": 300, "cols": 1}
        ]'>
    
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

    <!-- Item -->  
    <div class="cbp-item graphic">
      <div class="cbp-caption">
        <div class="cbp-caption-defaultWrap">
         <img style="width: 500px; height: 550px;" src="<?php if ( has_post_thumbnail() ) { the_post_thumbnail_url('products_home');}?>" alt="<?php the_title_attribute();?>">
        </div>
        <div class="cbp-caption-activeWrap">
          <div class="cbp-l-caption-alignCenter d-flex align-items-start">
            <div class="mb-auto p-3">
              <a href="<?php the_permalink();?>"><span class="u-label u-label--sm u-label--purple mb-3"><h2 class="h5 mb-0"><?php the_title();?></h2></span></a>    
            </div>
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

<!-- Contact form -->
<div style="background-color: #FFF2F2">
  <div class="container-fluid space-1 space-1--lg">
    <!-- Title -->
    <div class="w-md-80 w-lg-60 text-center mx-md-auto mb-9">
      <span class="u-label u-label--sm u-label--purple mb-3">Benefits</span>
      <h2 class="h3">Key benefits of project Space template</h2>
      <p>Choose your team to learn more about Space.</p>
    </div>
    <!-- End Title -->
      <div class="w-lg-80 mx-auto">
        <form class="js-validate">
          <div class="row">
            <!-- Input -->
            <div class="col-sm-6 mb-6">
              <div class="js-form-message">
                <div class="js-focus-state input-group form">
                  <input class="form-control form__input" type="text" name="name" required
                         placeholder="Your name"
                         aria-label="Your name"
                         data-msg="Please enter your name."
                         data-error-class="u-has-error"
                         data-success-class="u-has-success">
                </div>
              </div>
            </div>
            <!-- End Input -->

            <!-- Input -->
            <div class="col-sm-6 mb-6">
              <div class="js-form-message">
                <div class="js-focus-state input-group form">
                  <input class="form-control form__input" type="email" name="email" required
                         placeholder="Your email address"
                         aria-label="Your email address"
                         data-msg="Please enter a valid email address."
                         data-error-class="u-has-error"
                         data-success-class="u-has-success">
                </div>
              </div>
            </div>
            <!-- End Input -->

            <div class="w-100"></div>

            <!-- Input -->
            <div class="col-sm-6 mb-6">
              <div class="js-form-message">
                <div class="js-focus-state input-group form">
                  <input class="form-control form__input" type="text" name="subject" required
                         placeholder="Subject"
                         aria-label="Subject"
                         data-msg="Please enter a subject."
                         data-error-class="u-has-error"
                         data-success-class="u-has-success">
                </div>
              </div>
            </div>
            <!-- End Input -->

            <!-- Input -->
            <div class="col-sm-6 mb-6">
              <div class="js-form-message">
                <div class="js-focus-state input-group form">
                  <input class="form-control form__input" type="number" name="phone" required
                         placeholder="Your phone number"
                         aria-label="Your phone number"
                         data-msg="Please enter a valid phone number."
                         data-error-class="u-has-error"
                         data-success-class="u-has-success">
                </div>
              </div>
            </div>
            <!-- End Input -->
          </div>

          <!-- Input -->
          <div class="js-form-message mb-9">
            <div class="js-focus-state input-group form">
              <textarea class="form-control form__input" rows="6" name="text" required
                        placeholder="How can we help you?"
                        aria-label="How can we help you?"
                        data-msg="Please enter a reason."
                        data-error-class="u-has-error"
                        data-success-class="u-has-success"></textarea>
            </div>
          </div>
          <!-- End Input -->

          <div class="text-center">
            <button type="submit" class="btn btn-primary btn-wide mb-4">Submit</button>
            <p class="small">We'll get back to you in 1-2 business days.</p>
          </div>
        </form>
      </div>
    </div>
    <!-- End Contact Us Form Section -->

  </div> 
</div>   
<!-- End Contact form -->

<?php get_footer();?>