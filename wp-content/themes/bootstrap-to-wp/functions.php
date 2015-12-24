<?php
function btwp_theme_styles() {
  wp_enqueue_styles('bootstrap_css', get_template_directory_uri() . '/css/bootstrap.min.css' );
  wp_enqueue_styles('style_css', get_template_directory_uri() . '/style.css' );
}

add_action ('wp_enqueue_scripts', 'btwp_theme_styles');

function btwp_theme_js() {

  wp_enqueue_scripts( 'bootstrap_js', get_template_directory_uri() . 'js/bootstrap.min.js' );

}


 ?>
