<?php
/*
* Creating a function to create our CPT
*/
 function custom_post_type() {
  // Set UI labels for Custom Post Type
     $labels = array(
         'name'                => _x( 'Movies', 'Post Type General Name', 'default-theme' ),
         'singular_name'       => _x( 'Movie', 'Post Type Singular Name', 'default-theme' ),
         'menu_name'           => __( 'Movies', 'default-theme' ),
         'parent_item_colon'   => __( 'Parent Movie', 'default-theme' ),
         'all_items'           => __( 'All Movies', 'default-theme' ),
         'view_item'           => __( 'View Movie', 'default-theme' ),
         'add_new_item'        => __( 'Add New Movie', 'default-theme' ),
         'add_new'             => __( 'Add New', 'default-theme' ),
         'edit_item'           => __( 'Edit Movie', 'default-theme' ),
         'update_item'         => __( 'Update Movie', 'default-theme' ),
         'search_items'        => __( 'Search Movie', 'default-theme' ),
         'not_found'           => __( 'Not Found', 'default-theme' ),
         'not_found_in_trash'  => __( 'Not found in Trash', 'default-theme' ),
     );
      
 // Set other options for Custom Post Type
      
     $args = array(
         'label'               => __( 'movies', 'default-theme' ),
         'description'         => __( 'Movie news and reviews', 'default-theme' ),
         'labels'              => $labels,
         // Features this CPT supports in Post Editor
         'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
         // You can associate this CPT with a taxonomy or custom taxonomy.
         'taxonomies'          => array( 'genres', 'category' ),
         /* A hierarchical CPT is like Pages and can have
         * Parent and child items. A non-hierarchical CPT
         * is like Posts.
         */
         'hierarchical'        => false,
         'query_var'           => true,
         'public'              => true,
         'show_ui'             => true,
         'show_in_menu'        => true,
         'show_in_nav_menus'   => true,
         'show_in_admin_bar'   => true,
         'menu_position'       => 5,
         'menu_icon'           => 'dashicons-video-alt2',
         'can_export'          => true,
         'has_archive'         => true,
         'exclude_from_search' => false,
         'publicly_queryable'  => true,
         'capability_type'     => 'post',
         'show_in_rest' => true,
     );
      
     // Registering your Custom Post Type
     register_post_type( 'movies', $args );
  
 }
  
 /* Hook into the 'init' action so that the function
 * Containing our post type registration is not
 * unnecessarily executed.
 */
  
 add_action( 'init', 'custom_post_type', 0 );
