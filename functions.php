<?php

  add_theme_support('post-thumbnails');
  set_post_thumbnail_size(500, 500, array('center', 'center'));

  // Register menu
  function register_main_menu () {
    register_nav_menu('main-menu', __('Main Menu'));
  }
  add_action('init', 'register_main_menu');

  // Adds .active to current_page_item
  function special_nav_class($classes, $item) {
    if (in_array('current-menu-item', $classes)) {
      $classes[] = 'active';
    }
    return $classes;
  }
  add_filter('nav_menu_css_class', 'special_nav_class', 10, 2);
