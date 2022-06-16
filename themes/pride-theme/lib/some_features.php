<?php

function some_features(){
    add_theme_support('title-tag');
}
 
add_action('after_setup_theme', 'some_features');