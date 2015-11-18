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

  // Theme options https://github.com/cferdinandi/wp-theme-options
  require_once('theme-options.php');

  // Contact form shortcode
  require_once('contact-form.php');

  // toolset shortcode
  require_once('toolset.php');

  // wrap videos embed
  function custom_oembed_filter($html, $url, $attr, $post_ID) {
    $return = '<div class="video_wrapper">' . $html . '</div>';
    return $return;
  }
  add_filter('embed_oembed_html', 'custom_oembed_filter', 10, 4);




