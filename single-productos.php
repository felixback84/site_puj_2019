<?php
get_header();

while(have_posts()) {
    the_post();?>
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
            echo the_title();?>
            </h1>
            <p class="lead text-white"><?php 
            $powersProduct = get_field('field_5d9ca1a67e74d'); 
            echo $powersProduct;?></p>
          </div>
          <!-- End Title -->
        </div>
      </div>
    </div>  
    <!-- Product Description Section -->
    <div class="container space-2 space-3--lg">
      <div class="row">
        <div class="col-lg-7 mb-7 mb-lg-0">
          <!-- Red Product Gallery -->
          <div id="redShoeProduct" data-target-group="idProductSwitcher">
            <div class="row align-items-center">
              <div class="col-2">
                <!-- Slick Carousel - Thumbnail Shop Product -->
                <div id="redShoeNavThumb" class="js-slick-carousel u-slick u-slick--transform-off-lg u-slick--pagination-active-border"
                     data-infinite="true"
                     data-center-mode="true"
                     data-slides-show="4"
                     data-is-thumbs="true"
                     data-vertical="true"
                     data-focus-on-select="true"
                     data-nav-for="#redShoeNavMain">

                <?php 
                  imagePicProduct('field_5d9c8971e14b2','products_thumb_mini_slider');
                  imagePicProduct('field_5d9c89b2e14b4','products_thumb_mini_slider');
                  imagePicProduct('field_5d9c89c2e14b5','products_thumb_mini_slider');
                  imagePicProduct('field_5d9c89d2e14b6','products_thumb_mini_slider');
                 ?>
                  
                </div>
                <!-- End Slick Carousel - Thumbnail Shop Product -->
              </div>

              <div class="col-10">
                <!-- Slick Carousel - Main Shop Product -->
                <div id="redShoeNavMain" class="js-slick-carousel u-slick"
                     data-infinite="true"
                     data-nav-for="#redShoeNavThumb">
                  <?php 
                  imagePicProduct('field_5d9c8971e14b2','products_home');
                  imagePicProduct('field_5d9c89b2e14b4','products_home');
                  imagePicProduct('field_5d9c89c2e14b5','products_home');
                  imagePicProduct('field_5d9c89d2e14b6','products_home');
                 ?>
                </div>
                <!-- End Slick Carousel - Main Shop Product -->
              </div>
            </div>
          </div>
          <!-- End Red Product Gallery -->
        </div>

        <div class="col-lg-5">
          <!-- Content -->
          <div class="mb-5">
            <h1 class="font-weight-normal">The Space shoes</h1>
            <span class="d-block h3 mb-3">$99</span>
            <p>Our Space Design Makeup collection – to create your coolest look, then switch it up again tomorrow.</p>
          </div>
          <a class="btn btn-block btn-primary" href="#">Add to Cart</a>
          <!-- End Content -->
        </div>
      </div>
    </div>
    <!-- End Product Description Section -->

    <hr class="my-0">

    <!-- Product Details Section -->
    <div class="container space-2 space-3--lg">
      <div class="row">
        <div class="col-sm-6 col-md-4 mb-5 mb-md-0">
          <h4 class="h6">Product details</h4>
          <ul class="text-secondary pl-3">
            <li>A failsafe wardrobe addition</li>
            <li>Crew neck</li>
            <li>Long sleeves</li>
            <li>Looser in the chest and hem</li>
          </ul>
        </div>

        <div class="col-sm-6 col-md-4 mb-5 mb-md-0">
          <h4 class="h6">Material &amp; care</h4>
          <ul class="text-secondary pl-3">
            <li>100% Cotton</li>
            <li>Machine wash cold, with like colors</li>
            <li>Tumble dry low</li>
            <li>Do not dry clean</li>
          </ul>
        </div>

        <div class="col-sm-6 col-md-4">
          <h4 class="h6">Look after me</h4>
          <p class="mb-0">Avoid post-wash regrets.</p>
          <p class="mb-0">Always check the label.</p>
          <p class="mb-0">Basic jersey fabric.</p>
        </div>
      </div>
    </div>
    <!-- End Product Details Section -->
    <hr class="my-0">
  </main>
  <!-- ========== END MAIN CONTENT ========== -->

<?php }
get_footer();
?>  