<?php

function some_features(){
    add_theme_support('title-tag');
    register_nav_menu('header-menu', 'Header Menu');
    register_nav_menu('footer-menu', 'Footer Menu');
}
 
add_action('after_setup_theme', 'some_features');