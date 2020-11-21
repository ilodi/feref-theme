<?php

/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 */

?>
<!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="profile" href="https://gmpg.org/xfn/11">
  <title>
    FEREG | <?php echo get_the_title() ?>
  </title>
  <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

  <?php
  wp_body_open();
  ?>

  <nav id="navbar">
    <div class="container">
      <div class="aux-menu">
        <div>
        <?php echo '<a href="' . get_site_url() . '/">' ?>
         
            <img src="<?php bloginfo('template_url'); ?>/assets/image/logo/icon-black.svg" alt="logo feregsp" />
          </a>
        </div>
        <div>
          <div id="menu-burger" onclick="activeMenu()">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
          </div>
        </div>
      </div>
    </div>

  </nav>

  <div id="container-menu">
    <div class="menu-items">
      <?php
      $args = array(
        'theme_location' => 'main-menu',
        'container' => 'nav',
        'container_class' => 'main-menu',
      );
      wp_nav_menu($args);
      ?>
    </div>
  </div>