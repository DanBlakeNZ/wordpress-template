<!-- File is called by wp_head in header.php -->

<!--
  IMPORTANT:
  microtime() generates the current time and this can be used in place of version numbers to avoid caching issues during development.
  This should ONLY BE USED FOR DEVELOPMENT, in production use actual version number - 1.0 etc
-->

<?php

  function load_university_files() {
    wp_enqueue_script('main_university_javascript', get_theme_file_uri('/js/scripts-bundled.js'), null, microtime(), true);
    // Nickname, location, has any dependencies?, version number, want to load before the final closing body tag?.

    wp_enqueue_style('university_main_styles', get_stylesheet_uri(), NULL, microtime());
    // First argument is a nickname, second is the file location.

    // Font-Awesome
    wp_enqueue_style('font_awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');

    //Custom Google Fonts
    wp_enqueue_style('google_font', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
  }

  function university_features() {
    add_theme_support('title-tag'); // Adds page title to browser tab
    
    // Dynamic menu example - see lesson 19
    // register_nav_menu('headerMenuLocation', 'Header Menu Location');
    // register_nav_menu('footerLocationOne', 'Footer Location One');
    // register_nav_menu('footerLocationTwo', 'Footer Location Two');
  }


  add_action('wp_enqueue_scripts', 'load_university_files');
  // First argument is the TYPE of instruction we are giving WP.
  // wp_enqueue_scripts tells WP you want to load a css/js file.
  // The second argument is the name of the function we want to run.

  add_action('after_setup_theme', 'university_features');
?>