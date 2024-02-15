<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<!-- the function above wil add the en-US language -->
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
 <!-- the function above wil add the UTF-8 -->

<!-- DON'T FORGET THIS META TAG!
 CSS might not be enough to make the site responsive in WordPress! -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head();?>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fictional University</title>
</head>
<body <?php body_class(); ?>>
<header class="site-header">
      <div class="container">
        <h1 class="school-logo-text float-left">
<!-- site_url with no arguments will send us to the homepage -->
          <a href="<?php echo site_url() ?>"><strong>Fictional</strong> University</a>
        </h1>
        <span class="js-search-trigger site-header__search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
        <i class="site-header__menu-trigger fa fa-bars" aria-hidden="true"></i>
        <div class="site-header__menu group">
          <nav class="main-navigation">
            <!-- <?php 
              wp_nav_menu(array(
                'theme_location' => 'headerMenuLocation'
              ));
            ?> -->
            <ul>
              <li <?php if (is_page('about-us') or wp_get_post_parent_id(0) == 15) echo 'class="current-menu-item"'?>><a href="<?php echo site_url('/about-us')?>">About Us</a></li>
              <li><a href="<?php echo site_url('/programs'); ?>">Programs</a></li>
              <li <?php if (get_post_type() == 'event') echo 'class="current-menu-item"'?>><a href="<?php echo get_post_type_archive_link('event'); ?>">Events</a></li>
              <li><a href="<?php echo site_url('/campuses'); ?>">Campuses</a></li>
              <li <?php if (get_post_type() == 'post') echo 'class="current-menu-item"'
              ?>><a href="<?php echo site_url('/blog') ?>">Blog</a></li>
            </ul>
          </nav>
          <div class="site-header__util">
            <a href="#" class="btn btn--small btn--orange float-left push-right">Login</a>
            <a href="#" class="btn btn--small btn--dark-orange float-left">Sign Up</a>
            <span class="search-trigger js-search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
          </div>
        </div>
      </div>
    </header>
  
