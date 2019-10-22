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
    <div class="container space-2 space-2--lg">
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
           <!--  <h1 class="font-weight-normal"><?php //the_title();?></h1> -->
            <?php $item_price = get_field_object('field_5d9c8a60680c8');?>
            <span class="d-block h3 mb-3">$ <?php echo $item_price['value'];?> COP</span>
            <?php $itemPowers = get_field_object('field_5d9ca1a67e74d');?>
            <p><?php echo$itemPowers['value'];?></p>
          </div>
          <a class="btn btn-block btn-primary" href="#">Add to Cart</a>
          <!-- End Content -->
        </div>
      </div>
    </div>
    <!-- End Product Description Section -->

    <hr class="my-0">

    <!-- Product Details Section -->
    <div class="container space-1 space-1--lg">
      <div class="row">
        <?php itemInfo('field_5d9c9d2772236');?>
        <?php itemInfo('field_5d9c9d4f72237');?>
        <?php itemInfo('field_5d9c9ddd72238');?>
      </div>
    </div>
    <!-- End Product Details Section -->
    <hr class="my-0">
  </main>
  <!-- ========== END MAIN CONTENT ========== -->

<?php }
get_footer();
?>  