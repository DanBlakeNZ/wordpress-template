<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">  <!-- For mobile responsiveness -->
    <meta charset="<?php bloginfo('charset'); ?>" >
    <?php wp_head() ?><!-- Calls the functions located in functions.php -->
  </head>

  <body <?php body_class(); ?>>
    <header class="site-header">
      <div class="container">
        <h1 class="school-logo-text float-left"><a href="<?php echo site_url() ?>"><strong>Fictional</strong> University</a></h1>
        <span class="js-search-trigger site-header__search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
        <i class="site-header__menu-trigger fa fa-bars" aria-hidden="true"></i>
        <div class="site-header__menu group">
          <nav class="main-navigation">
            <!-- Dynamic menu example - see lesson 19 -->
            <!-- <?php
              wp_nav_menu(array(
                'theme_location' => 'headerMenuLocation'
              ))
            ?> -->
            <ul>
              <!-- wp_get_post_parent_id(0) below is a quick way of saying get parent id of the current page -->
              <li <?php if(is_page('about-us') or wp_get_post_parent_id(0) == 13) echo 'class="current-menu-item"' ?>><a href="<?php echo site_url('/about-us') ?>">About Us</a></li>
              <li><a href="#">Programs</a></li>
              <li><a href="#">Events</a></li>
              <li><a href="#">Campuses</a></li>
              <li><a href="#">Blog</a></li>
            </ul>
          </nav>
          <div class="site-header__util">
            <a href="#" class="btn btn--small btn--orange float-left push-right">Login</a>
            <a href="#" class="btn btn--small  btn--dark-orange float-left">Sign Up</a>
            <span class="search-trigger js-search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
          </div>
        </div>
      </div>
    </header>

<!-- Closing body and html are located in footer.php -->