<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php bloginfo('name'); ?></title>

  <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">


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
      <figure class="header-logo_svg">
        <?php include(TEMPLATEPATH . '/assets/images/logo.svg'); ?>
      </figure>
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
