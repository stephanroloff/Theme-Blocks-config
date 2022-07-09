<?php
 
function scripts_and_styles(){
   wp_enqueue_style('main_style', get_stylesheet_uri());
   // wp_enqueue_style('main_style', get_theme_file_uri('/build/style.css'));
   // wp_enqueue_script('main_js', get_theme_file_uri('/build/index.js'), array('jquery'), '1.0', true );
}
 
add_action('wp_enqueue_scripts', 'scripts_and_styles');