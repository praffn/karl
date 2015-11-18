<?php

  function toolset_shortcode() {
    $tools = array(
      array('name'=>'After Effects', 'slug'=>'ae'),
      array('name'=>'Illustrator', 'slug'=>'ai'),
      array('name'=>'Audition', 'slug'=>'au'),
      array('name'=>'InDesign', 'slug'=>'id'),
      array('name'=>'Premiere Pro', 'slug'=>'pr'),
      array('name'=>'Photoshop', 'slug'=>'ps'),
      array('name'=>'Hand Drawing', 'slug'=>'draw'),
      array('name'=>'MacBook', 'slug'=>'macbook'),
      //array('name'=>'Office', 'slug'=>'office')
    );

    $su = get_stylesheet_directory_uri();
   
    $toolset = '<ul class="toolset">';
    foreach ($tools as $tool) {
      $toolset = $toolset .
        '<li class="toolset_item">' .
          '<img src="' . $su . '/assets/images/toolset/' . $tool['slug'] . '.png">' .
          '<span>' . $tool['name'] . '</span>';
        '</li>';
    }
    $toolset = $toolset . '</ul>';
    return $toolset;


  }

  add_shortcode('toolset', 'toolset_shortcode');
