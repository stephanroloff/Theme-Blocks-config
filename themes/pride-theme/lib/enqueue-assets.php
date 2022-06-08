<?php
 
function scripts_and_styles(){
   wp_enqueue_style('main_style', get_stylesheet_uri());
}
 
add_action('wp_enqueue_scripts', 'scripts_and_styles');