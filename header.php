<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php bloginfo('name'); ?></title>

  <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/favicon.png">


  <script src="https://use.typekit.net/jbi7azt.js"></script>
  <script>try{Typekit.load({ async: true });}catch(e){}</script>
  
</head>
<body>

  <?php

    // $locations = get_nav_menu_locations();
    // $menu = wp_get_nav_menu_object( $locations['main-menu'] );
    // $menu_items = wp_get_nav_menu_items($menu->term_id);
    // var_dump($menu_items);

  ?>
  
  <header class="header">
    <section class="header-logo">
      <a href="<?php bloginfo('url'); ?>">
        <figure class="header-logo_svg">
          <svg xmlns="http://www.w3.org/2000/svg" version="1.1" x="0px" y="0px" viewBox="0 0 100 100" xml:space="preserve"><path d="M49.5 4.7L10 27.6v45.8l39.5 22.9L89 73.5V27.6L49.5 4.7zM86 71.9L49.5 93.3 13 71.9V29.2L49.5 7.8 86 29.2V71.9zM17 69.5l32.8 19 34-19.7L53 50.5l30.9-18.2 -34-19.7L17 31.6V69.5zM20 60l4.3-6.6 16.3 26.5L20 68V60zM48.6 84.5l-3-1.7L26 50.9l21-33.4 1.7-1M78.5 68.7L51 84.7V52.6L78.5 68.7zM51 48.5V16.4l27.4 16L51 48.5zM41.7 20.5L20 55V33.1L41.7 20.5z"></svg>
        </figure>
      </a>

      <h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
    </section>

    <nav class="header-nav">
      <input type="checkbox" id="header-menu_toggle_checkbox">
      <ul class="header-menu">
        <?php
            wp_nav_menu(array(
              'theme_locations' => 'main-menu',
              'container' => '',
              'items_wrap' => '%3$s'
            ));
          ?>
      </ul>
      <label for="header-menu_toggle_checkbox" class="header-menu_toggle">
        <i class="fa fa-bars"></i>
      </label>
    </nav>  

  </header>
