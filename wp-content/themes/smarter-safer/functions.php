<?php

add_theme_support('post-thumbnails');
add_theme_support( 'title-tag' );
add_theme_support( 'automatic-feed-links' );

register_nav_menu('main', 'Main Nav');
register_nav_menu('footer', 'Footer Nav');

add_action('wp_enqueue_scripts', 'bas_enque_files');
function bas_enque_files() {
  wp_enqueue_style('theme', get_template_directory_uri() . '/assets/css/theme.css', null, '0.1');
  wp_enqueue_style('fontawesome', 'https://use.fontawesome.com/releases/v5.8.2/css/all.css', null, '5.8.2');

  wp_enqueue_script( 'theme', get_template_directory_uri() . '/assets/js/theme-min.js', array('jquery'), '0.1', true );
}