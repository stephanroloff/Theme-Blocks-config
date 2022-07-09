<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
   <meta charset="<?php bloginfo('charset'); ?>">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- <title>My Document</title> -->
    <?php wp_head(); ?>
 
</head>
<body <?php body_class(); ?>>
   <h3>HEADER</h3>
   <?php wp_nav_menu(array(
      'theme_location' => 'header-menu'
   )); ?>
<hr>
