<?php

  function LCResources() {

    wp_enqueue_script('main-lacour-js', get_theme_file_uri('/js/scripts-bundled.js'), NULL, '1.0', true);
//<!-- GOOGLE FONTS -->
    wp_enqueue_style('Questrial-font','//fonts.googleapis.com/css?family=Questrial');
    wp_enqueue_style('VT323-font','//fonts.googleapis.com/css?family=VT323');
    wp_enqueue_style('Didact+Gothic-font','//fonts.googleapis.com/css?family=Didact+Gothic');
    wp_enqueue_style('Open-sans-font','//fonts.googleapis.com/css?family=Open+Sans:300,600,400');

    wp_enqueue_style('font','//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'); //loads in the icons for social media
    wp_enqueue_style('LC_main_styles', get_stylesheet_uri());
  }

  add_action('wp_enqueue_scripts','LCResources');

  function LC_features() {
    add_theme_support('title-tag');
  }


  add_action('after_setup_theme', 'LC_features');
