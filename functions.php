<?php

	/*
	
	Inscripción de css y js

	*/

function themepuj_files() {

 /*<!-- Google Fonts -->*/
 wp_enqueue_style('0-custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto:300,400,500');

 /*<!-- CSS Global Compulsory -->*/
 wp_enqueue_style('1-space-global-compulsory', get_template_directory_uri() . '/assets/vendor/bootstrap/css/bootstrap.css', array(), '1.1', 'all');

 /*<!-- CSS Implementing Plugins -->*/
 wp_enqueue_style('2-space-font-awesome', get_template_directory_uri() . '/assets/vendor/font-awesome/css/all.min.css', array(), '1.1', 'all');
 wp_enqueue_style('3-space-hs-megamenu', get_template_directory_uri() . '/assets/vendor/hs-megamenu/src/hs.megamenu.css', array(), '1.1', 'all');
 wp_enqueue_style('4-space-mailhu-custom-scrollbar', get_template_directory_uri() . '/assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css', array(), '1.1', 'all');
 wp_enqueue_style('5-space-custom-box', get_template_directory_uri() . '/assets/vendor/custombox/dist/custombox.min.css', array(), '1.1', 'all');
 wp_enqueue_style('6-space-animate-min', get_template_directory_uri() . '/assets/vendor/animate.css/animate.min.css', array(), '1.1', 'all');
 wp_enqueue_style('6a-space-animate', get_template_directory_uri() . '/assets/vendor/animate.css/animate.css', array(), '1.1', 'all');
 wp_enqueue_style('7-space-slick', get_theme_file_uri() . '/assets/vendor/slick-carousel/slick/slick.css', array(), '1.1', 'all');
 wp_enqueue_style('8-space-cubeportfolio', get_theme_file_uri() . '/assets/vendor/cubeportfolio/css/cubeportfolio.min.css', array(), '1.1', 'all');
 wp_enqueue_style('9-space-parallax', get_theme_file_uri() . '/assets/vendor/dzsparallaxer/dzsparallaxer.css', array(), '1.1', 'all');
 wp_enqueue_style('10-space-fancybox', get_theme_file_uri() . '/assets/vendor/fancybox/jquery.fancybox.css', array(), '1.1', 'all');

 /*<!-- CSS Space Template -->*/
 wp_enqueue_style('9-space-template', get_template_directory_uri() . '/assets/css/theme.css', array(), 'false', 'all');

 /*<!-- JS Global Compulsory -->*/
 
 //wp_enqueue_media();
 wp_enqueue_script('0-Google-map', '//maps.googleapis.com/maps/api/js?key=AIzaSyDlGWyhPNSKr9cDIUpHKJAjOSPCmmhYQMg', NULL, '1.0', true );
 wp_enqueue_script('0a-Google-Maps', get_theme_file_uri('/js/GoogleMaps.js') , array('jquery'), 'false' , true );

 wp_enqueue_script('1-vendor-jquery.min', get_theme_file_uri('/js/vendor/jquery/dist/jquery.min.js') , array('jquery'), 'false' , true );
 wp_enqueue_script('2-vendor-jquery-migrate.min', get_theme_file_uri('/js/vendor/jquery-migrate/dist/jquery-migrate.min.js') , array('jquery'), 'false' , true );
 wp_enqueue_script('3-vendor-popper.min', get_theme_file_uri('/js/vendor/popper.js/dist/umd/popper.min.js') , NULL , 'false' , true );
 wp_enqueue_script('4-vendor-bootstrap.min', get_theme_file_uri('/js/vendor/bootstrap/bootstrap.min.js') , array('jquery'), 'false' , true );

 /*<!-- JS Implementing Plugins -->*/
 wp_enqueue_script('4a-space-appear', get_theme_file_uri('js/vendor/appear.js') , array('jquery') , 'false' , true );

 wp_enqueue_script('5-vendor-hs.megamenu', get_theme_file_uri('/js/vendor/hs-megamenu/src/hs.megamenu.js') , NULL , 'false' , true );

 //wp_enqueue_script('6-vendor-validate.min.js', get_theme_file_uri('/js/vendor/jquery-validation/dist/jquery.validate.min.js') , array('jquery'), 'false' , true );

 wp_enqueue_script('7-vendor-jquery.mCustomScrollbar.concat.min', get_theme_file_uri('/js/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js') , array('jquery'), 'false' , true );
 wp_enqueue_script('8-vendor-custombox.min', get_theme_file_uri('/js/vendor/custombox/dist/custombox.min.js') , NULL , 'false' , true );
 wp_enqueue_script('9-vendor-custombox.legacy.min', get_theme_file_uri('/js/vendor/custombox/dist/custombox.legacy.min.js') , NULL , 'false' , true );
 //wp_enqueue_script('10-hs.validation.js', get_theme_file_uri('/js/components/hs.validation.js') , NULL, 'false' , true );

 wp_enqueue_script('11-malihu-scrollbar', get_theme_file_uri('/js/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js') , array('jquery') , 'false' , true );

 wp_enqueue_script('12-space-slick', get_theme_file_uri('js/vendor/slick-carousel/slick/slick.js') , NULL , 'false' , true );
 wp_enqueue_script('13-space-cubeportfolio.min', get_theme_file_uri('js/vendor/cubeportfolio/js/jquery.cubeportfolio.min.js') , array('jquery') , 'false' , true );
 wp_enqueue_script('14-space-dzsparallaxer', get_theme_file_uri('js/vendor/dzsparallaxer/dzsparallaxer.js') , array('jquery') , 'false' , true );
 wp_enqueue_script('15-space-fancybox', get_theme_file_uri('js/vendor/fancybox/jquery.fancybox.min.js') , array('jquery') , 'false' , true );

 /*<!-- JS Space -->*/
 wp_enqueue_script('12-space-hs.core', get_theme_file_uri('/js/hs.core.js') , NULL , 'false' , true );
 wp_enqueue_script('13-space-hs.header', get_theme_file_uri('/js/components/hs.header.js') , NULL , 'false' , true );
 wp_enqueue_script('14-space-hs.unfold', get_theme_file_uri('/js/components/hs.unfold.js') , NULL , 'false' , true );
 wp_enqueue_script('15-space-hs.validation', get_theme_file_uri('/js/components/hs.validation.js') , NULL , 'false' , true );
 wp_enqueue_script('16-space-hs.focus-state', get_theme_file_uri('/js/helpers/hs.focus-state.js') , NULL , 'false' , true );
 wp_enqueue_script('17-space-hs.malihu-scrollbar', get_theme_file_uri('/js/components/hs.malihu-scrollbar.js') , NULL , 'false' , true );
 wp_enqueue_script('18-space-hs.modal-window', get_theme_file_uri('/js/components/hs.modal-window.js') , NULL , 'false' , true );
 wp_enqueue_script('19-show-animation', get_theme_file_uri('/js/components/hs.show-animation.js') , NULL , 'false' , true );
 wp_enqueue_script('21-space-cubeportfolio', get_theme_file_uri('/js/components/hs.cubeportfolio.js') , NULL , 'false' , true );
 wp_enqueue_script('22-space-hs.go-to', get_theme_file_uri('/js/components/hs.go-to.js') , NULL , 'false' , true );
 wp_enqueue_script('23-hs.slick-carousel', get_theme_file_uri('/js/components/hs.slick-carousel.js') , NULL , 'false' , true );
 wp_enqueue_script('24-space-theme.min', get_theme_file_uri('js/theme.min.js') , array('jquery'), 'false' , true );
 wp_enqueue_script('25-space-fancybox', get_theme_file_uri('/js/components/hs.fancybox.js') , array('jquery'), 'false' , true );

}

add_action('wp_enqueue_scripts','themepuj_files');


function themepuj_features() {

	add_theme_support('post-thumbnails');
	add_theme_support('title-tag');

	add_image_size('banner_main',1920, 1080, true);
	add_image_size('products_home',500, 400, true);
}

add_action('after_setup_theme','themepuj_features');

?>