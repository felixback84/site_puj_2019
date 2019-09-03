 <!-- ========== FOOTER ========== -->
  <footer class="bg-dark">
    <div class="container space-2">
      <div class="row justify-content-md-between">
        <div class="col-6 col-md-3 col-lg-2 order-lg-3 mb-7 mb-lg-0">
          <h3 class="h6 text-white mb-3">Nosotros</h3>
          
          <!-- List Group -->
          <div class="list-group list-group-flush list-group-transparent">
            <a class="list-group-item list-group-item-action" href="<?php echo site_url('/faq/')?>">FAQ</a>
            <a class="list-group-item list-group-item-action" href="<?php echo site_url('/asistencia-premium/')?>">Asistencia Premiúm</a>
          </div>
          <!-- End List Group -->
        </div>

        <div class="col-6 col-md-3 col-lg-2 order-lg-4 mb-7 mb-lg-0">
          <h3 class="h6 text-white mb-3">Compañia</h3>

          <!-- List Group -->
          <div class="list-group list-group-flush list-group-transparent">
            <a class="list-group-item list-group-item-action" href="<?php echo site_url('/contactenos/')?>">Contáctenos</a>
            
            <a class="list-group-item list-group-item-action" href="<?php echo site_url('/blog/')?>">Blog y Noticias</a>
            <a class="list-group-item list-group-item-action" href="<?php echo site_url('/terminos-condiciones/')?>">Términos &amp; Condiciones</a>
            
          </div>
          <!-- End List Group -->
        </div>

        <div class="col-6 col-md-3 col-lg-2 order-lg-6 mb-7 mb-lg-0">
          <h3 class="h6 text-white mb-3">Social</h3>

          <!-- List -->
          <div class="list-group list-group-flush list-group-transparent">
            <a class="list-group-item list-group-item-action" href="#">
              <span class="fab fa-facebook-f min-width-3 text-center mr-2"></span>
              Facebook
            </a>
            <a class="list-group-item list-group-item-action" href="#">
              <span class="fab fa-twitter min-width-3 text-center mr-2"></span>
              Twitter
            </a>
            <a class="list-group-item list-group-item-action" href="#">
              <span class="fab fa-instagram min-width-3 text-center mr-2"></span>
              Instagram
            </a>
          </div>
          <!-- End List -->
        </div>

        <div class="col-lg-4 order-lg-1 d-flex align-items-start flex-column">
          <!-- Logo -->
          <a class="d-inline-block mb-5" href="<?php echo site_url();?>" aria-label="Space">
            <img src="<?php 
                      $icon = wp_get_attachment_image_url('820','',true );
                      echo $icon;
                      ?>" alt="Logo" style="width: 40px; max-width: 100%;">
          </a>
          <!-- End Logo aca va lo de los lenguajes-->

         
        <!-- End Divider -->
        <p class="small text-muted">Todos los derechos reservados. &copy; Travelmate. <?php echo date('Y');?> | Powered by La Maleta de Félix S.A.S</p>
    </div>
  </footer>

  <!-- ========== END FOOTER ========== -->	

  
  <!-- JS Plugins Init. -->
  <script>
    jQuery(window).on('load', function () {
      // initialization of header
      $.HSCore.components.HSHeader.init($('#header'));

     // initialization of HSMegaMenu component
      $('.js-mega-menu').HSMegaMenu({
        event: 'hover',
        pageContainer: $('.container'),
        breakpoint: 767,
        hideTimeOut: 0
      });
    });
  </script>
  <!-- JS Implementing Plugins -->

  <!-- JS Plugins Init. -->
  <script>

    jQuery(document).on('ready', function () {
      // initialization of unfold component
      $.HSCore.components.HSUnfold.init($('[data-unfold-target]'), {
        afterOpen: function () {
          if (!$('body').hasClass('IE11')) {
            $(this).find('input[type="search"]').focus();
          }
        }

      });

      // initialization of forms
      $.HSCore.helpers.HSFocusState.init();

      // initialization of malihu scrollbar
      $.HSCore.components.HSMalihuScrollBar.init($('.js-scrollbar'));
      $(".js-scrollbar").mCustomScrollbar({
      axis:"x" // vertical and horizontal scrollbar
      });

      // initialization of slick carousel
      $.HSCore.components.HSSlickCarousel.init('.js-slick-carousel'); 

      // initialization of autonomous popups
      $.HSCore.components.HSModalWindow.init('[data-modal-target]', '.js-signup-modal', {
        autonomous: true
      });

      // initialization of show animations
      $.HSCore.components.HSShowAnimation.init('.js-animation-link');

      // initialization of video player
      $.HSCore.components.HSVideoPlayer.init('.js-inline-video-player');

      // initialization of cubeportfolio
      $.HSCore.components.HSCubeportfolio.init('.cbp');  

    });

  </script>

<?php wp_footer();?>
	</body>	
</html>