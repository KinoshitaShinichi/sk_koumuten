<?php


function register_css()
{ // 管理画面でないなら
  if (!is_admin()) {



    wp_enqueue_style('slick', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css');
    
    wp_enqueue_style('index', get_template_directory_uri() . '/css/index.css');

    wp_enqueue_style('reset', get_template_directory_uri() . '/css/reset.css');

    wp_enqueue_style('business', get_template_directory_uri() . '/css/business.css');

    wp_enqueue_style('company', get_template_directory_uri() . '/css/company.css');

    wp_enqueue_style('form', get_template_directory_uri() . '/css/form.css');
	  
	 wp_enqueue_style('5-3-6', get_template_directory_uri() . '/css/5-3-6.css');

    wp_enqueue_style('bootstrap-icons','https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css');

  }
}

// 登録済みのjQueryを解除して、登録し直す
function remove_default_jquery()
{
 // 管理画面でないなら
 if (!is_admin()) {
   wp_deregister_script('jquery');
	
	wp_enqueue_script('anonymous','https://code.jquery.com/jquery-3.4.1.min.js', array(), 3.0, true);
	 
wp_enqueue_script('jquery','https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array(), 3.0, true);
   
   wp_enqueue_script('6-1-2', get_template_directory_uri() . '/js/6-1-2.js', array(), 3.2, true);

   wp_enqueue_script('4-12', get_template_directory_uri() . '/js/4-12.js', array(), 3.2, true);

   wp_enqueue_script('8-10', get_template_directory_uri() . '/js/8-10.js', array(), 3.2, true);

 }
}

function imgPathcode() {
  return get_template_directory_uri();
}

add_shortcode('imgPath', 'imgPathcode');


add_action('wp_enqueue_scripts', 'register_css');

add_action('wp_enqueue_scripts', 'remove_default_jquery');

add_theme_support( 'post-thumbnails' );


