<?php

add_theme_support( 'menus' );
add_theme_support( 'post-thumbnails' );

function register_theme_menus() {
  register_nav_menus(
    array(
      'primary-menu' => __( 'Primary Menu' )
    )
  );
}
// init tells wordpress to execute this when it initializes
add_action ( 'init', 'register_theme_menus' );

function wptf_theme_styles() {
  wp_enqueue_style( 'foundation_css', get_template_directory_uri() . '/css/foundation.css' );
  // wp_enqueue_style( 'normalize_css', get_template_directory_uri() . '/css/normalize.css' );
  wp_enqueue_style( 'google_fonts', 'http://fonts.googleapis.com/css?family=Asap:400,700,400italic,700italic' );
  wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );
}
// add_action tells wordpress when to call the function to enqueue the styles
// wp_enqueue_scripts is a hook from wordpress that let us define what files to load
add_action( 'wp_enqueue_scripts', 'wptf_theme_styles' );

// Wordpress ships with jQuery installed and running by default

function wptf_theme_js() {
  // the order here should be the same of the front-end of the site when js is loaded
  // the 3rd param in this function is an array of dependents
  // the 4th param is to set a specific version. If we don't want to do that we can just leave it empty
  // the 5th param is a boolean which defines if this will appear in the footer of the page. When it appears at the header, it's set to false
  wp_enqueue_script( 'modernizr_js', get_template_directory_uri() . '/js/modernizr.js', '', '', false );
  // the 3rd param in this case establishes that jquery should load before foundation 
  wp_enqueue_script( 'foundation_js', get_template_directory_uri() . '/js/foundation.min.js', array('jquery'), '', true );
  wp_enqueue_script( 'main_js', get_template_directory_uri() . '/js/app.js', array('jquery', 'foundation_js' ), '', true );
}
add_action( 'wp_enqueue_scripts', 'wptf_theme_js' );
?>