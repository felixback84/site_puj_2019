<!DOCTYPE html>
<html lang="en">
<head>
  <?php wp_head(); ?>
  <!-- Title -->
  <title>Corporate Start Up | Space - Responsive Website Template</title>

  <!-- Required Meta Tags Always Come First -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Favicon -->
  <link rel="shortcut icon" href="../../favicon.ico">

</head>

<body>
  <!-- Skippy -->
  <a id="skippy" class="sr-only sr-only-focusable u-skippy" href="#content">
    <div class="container">
      <span class="u-skiplink-text">Skip to main content</span>
    </div>
  </a>
  <!-- End Skippy -->

  <!-- ========== HEADER ========== -->
  <header id="header" class="u-header u-header--modern u-header--floating-lg">
    <div id="logoAndNav" class="container">
      <div style="background-color: rgba(255,255,255, 0.8);"  class="u-header__section u-header--floating-lg__inner">
        <!-- Nav -->
        <nav class="js-mega-menu navbar navbar-expand-lg u-header__navbar">
          <!-- Logo -->
          <div class="u-header__navbar-brand-wrapper">
            <a class="navbar-brand u-header__navbar-brand" href="<?php echo site_url('/')?>" aria-label="Space">
              <!-- <img class="u-header__navbar-brand-default" src="../../assets/svg/logos/logo.svg" alt="">
              <img class="u-header__navbar-brand-mobile" src="../../assets/svg/logos/logo-short.svg" alt=""> -->
              <h4 class="pt-1"><i class="fas fa-chess-queen pr-2"></i>Hilda Project</h4>
            </a>
          </div>
          <!-- End Logo -->

          <!-- Responsive Toggle Button -->
          <button type="button" class="navbar-toggler btn u-hamburger u-header__hamburger"
                  aria-label="Toggle navigation"
                  aria-expanded="false"
                  aria-controls="navBar"
                  data-toggle="collapse"
                  data-target="#navBar">
            <span class="d-none d-sm-inline-block">Menu</span>
            <span id="hamburgerTrigger" class="u-hamburger__box ml-3">
              <span class="u-hamburger__inner"></span>
            </span>
          </button>
          <!-- End Responsive Toggle Button -->

          <!-- Navigation -->
          <div id="navBar" class="collapse navbar-collapse u-header__navbar-collapse py-0">
            <ul class="navbar-nav u-header__navbar-nav">
              
            <!-- Home -->
            <li class="nav-item hs-has-sub-menu u-header__nav-item"
                data-event="hover"
                data-animation-in="fadeInUp"
                data-animation-out="fadeOut">
              <a id="homeMegaMenu" class="nav-link u-header__nav-link" href="<?php echo site_url('/')?>"
                 aria-haspopup="true"
                 aria-expanded="false"
                 aria-labelledby="homeSubMenu">
                Home
              </a>
            </li>
              
            <!-- Pages -->
            <li class="nav-item hs-has-mega-menu u-header__nav-item"
                data-event="hover"
                data-animation-in="fadeInUp"
                data-animation-out="fadeOut"
                data-position="right">
              <a id="PagesMegaMenu" class="nav-link u-header__nav-link" href="<?php echo site_url('/tienda')?>"
                 aria-haspopup="true"
                 aria-expanded="false">
                Tienda
              </a>
            </li>  

             <!-- Works -->
            <li class="nav-item hs-has-sub-menu u-header__nav-item"
                data-event="hover"
                data-animation-in="fadeInUp"
                data-animation-out="fadeOut">
              <a id="worksMegaMenu" class="nav-link u-header__nav-link" href="<?php echo site_url('/terapias-para-ti')?>"
                 aria-haspopup="true"
                 aria-expanded="false"
                 aria-labelledby="worksSubMenu">
                Terapias
              </a>
            </li>
            <!-- End Works -->

            <!-- Works -->
            <li class="nav-item hs-has-sub-menu u-header__nav-item"
                data-event="hover"
                data-animation-in="fadeInUp"
                data-animation-out="fadeOut">
              <a id="worksMegaMenu" class="nav-link u-header__nav-link" href="<?php echo site_url('/blog')?>"
                 aria-haspopup="true"
                 aria-expanded="false"
                 aria-labelledby="worksSubMenu">
                Blog
              </a>
            </li>
            <!-- End Works -->

        <!-- Login register -->
        <?php 
          
          if(!is_user_logged_in()) {?> 
            <li class="nav-item hs-has-sub-menu u-header__nav-item"
                data-event="hover"
                data-animation-in="fadeInUp"
                data-animation-out="fadeOut">
              <a id="blogMegaMenu" class="nav-link u-header__nav-link" href="#signupModalClassic"
              data-modal-target="#signupModalClassic"
                 aria-haspopup="true"
                 aria-expanded="false"
                 aria-labelledby="blogSubMenu">
                <h3 style="padding-top: 10px;"><i class="far fa-smile"></i></h3>
              </a>
            </li>
          <?php } else { };  
          $ourCurrentUser = wp_get_current_user();          
          if ( is_user_logged_in() && in_array( 'subscriber', $ourCurrentUser->roles ) ) { ?>
            <li class="nav-item hs-has-sub-menu u-header__nav-item"
                data-event="hover"
                data-animation-in="fadeInUp"
                data-animation-out="fadeOut">
              <a id="worksMegaMenu" class="nav-link u-header__nav-link" href="<?php echo site_url('/pacientes/'.strtolower($ourCurrentUser-> display_name));?>"
                 aria-haspopup="true"
                 aria-expanded="false"
                 aria-labelledby="worksSubMenu">
                Mi cuenta
              </a>
            </li>
            <!-- End Works -->

          <?php } else { }?>
        <!-- End login register -->

            <!-- Checkout -->
            <li class="nav-item hs-has-sub-menu u-header__nav-item"
                data-event="hover"
                data-animation-in="fadeInUp"
                data-animation-out="fadeOut">
              <a id="blogMegaMenu" class="nav-link u-header__nav-link" href="<?php echo site_url('/checkout')?>"
                 aria-haspopup="true"
                 aria-expanded="false"
                 aria-labelledby="blogSubMenu">
                <h3 style="padding-top: 10px;"><i class="fas fa-shopping-basket"></i></h3>
              </a>
            </li>
            <!-- End Checkout -->
          </ul>
        </nav>
        <!-- End Nav -->
      </div>
    </div>

    <!-- Signup Modal Window -->
    <div id="signupModalClassic" class="js-signup-modal u-modal-window js-scrollbar" style="width: 800px; height: 550px;">
      <!-- Modal Close Button -->
      <button class="btn btn-sm btn-icon btn-text-secondary u-modal-window__close" type="button" onclick="Custombox.modal.close();">
        <span class="fas fa-times"></span>
      </button>
      <!-- End Modal Close Button -->

      <!-- Content -->
      <div class="p-5">
        <!-- Signin -->
        <div id="signin" data-target-group="idForm">
          <!-- Title -->
          <header class="text-center mb-5">
            <h2 class="h4 mb-0">Por favor ingrese</h2>
            <p>Llene estos campos para ingresar.</p>
          </header>
          <hr class="my-5">
          <?php echo do_shortcode('[wpforms id="158" title="false" description="false"]');?>
          <!-- End Title -->
          <hr class="my-5">
          <div class="text-center mb-3">
            <p class="text-muted">
              ¿No tiene una cuenta?
              <a class="js-animation-link" href="javascript:;"
                 data-target="#signup"
                 data-link-group="idForm"
                 data-animation-in="fadeIn">Regístrese
              </a>
            </p>
          </div>
        </div>
        <!-- End Signin -->

        <!-- Signup -->
        <div class="pb-3"id="signup" style="display: none; opacity: 0;" data-target-group="idForm">
          <!-- Title -->
          <header class="text-center mb-5">
            <h2 class="h4 mb-0">Por favor regístrate</h2>
            <p>Llene todos los campos para iniciar.</p>
          </header>
          <hr class="my-5">
          <?php echo do_shortcode('[wpforms id="132" title="false" description="false"]'); ?>
          <!-- End Title -->
          <hr class="my-5">
          <div class="text-center mb-3">
            <p class="text-muted">
              ¿Ya tiene una cuenta?
              <a class="js-animation-link" href=""
                 data-target="#signin"
                 data-link-group="idForm"
                 data-animation-in="fadeIn">Ingresar
              </a>
            </p>
          </div> 
        </div>
        <!-- End Signup -->
  </header>
  <!-- ========== END HEADER ========== -->

