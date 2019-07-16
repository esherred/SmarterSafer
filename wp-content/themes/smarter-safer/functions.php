<?php

@ini_set( 'upload_max_size' , '64M' );
@ini_set( 'post_max_size', '64M');
@ini_set( 'max_execution_time', '300' );

add_theme_support('post-thumbnails');
add_theme_support( 'title-tag' );
add_theme_support( 'automatic-feed-links' );

register_nav_menu('main', 'Main Nav');
register_nav_menu('footer', 'Footer Nav');

if( function_exists('acf_add_options_page') ) {
  acf_add_options_page(
    array(
      'page_title'  =>  'Theme Settings',
      'menu_title'  =>  'Theme Settings',
      'menu_slug'   =>  'theme-general-settings',
      'capability'  =>  'edit_posts',
      'position'    =>  59,
    )
  );
}

add_action('wp_enqueue_scripts', 'bas_enque_files');
function bas_enque_files() {
  wp_enqueue_style('theme', get_template_directory_uri() . '/assets/css/theme.css', null, '0.1');
  wp_enqueue_style('fontawesome', 'https://use.fontawesome.com/releases/v5.8.2/css/all.css', null, '5.8.2');

  wp_enqueue_script( 'theme', get_template_directory_uri() . '/assets/js/theme-min.js', array('jquery'), '0.1', true );
}

add_filter( 'wp_image_editors', 'wpb_image_editor_default_to_gd' );
function wpb_image_editor_default_to_gd( $editors ) {
  $gd_editor = 'WP_Image_Editor_GD';
  $editors = array_diff( $editors, array( $gd_editor ) );
  array_unshift( $editors, $gd_editor );
  return $editors;
}