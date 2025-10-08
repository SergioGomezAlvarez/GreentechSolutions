<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <header class="main-header">
    <div class="nav-container">

      <!-- Logo -->
      <div class="logo-area">
        <?php if (has_custom_logo()): ?>
          <?php the_custom_logo(); ?>
        <?php else: ?>

        <?php endif; ?>
        <h1 class="logo-text">Greentech Solutions</h1>
      </div>

      <!-- Menu -->
      <nav class="site-nav">
        <?php
        wp_nav_menu(array(
          'theme_location' => 'primary',
          'container' => false,
          'menu_class' => 'nav-menu',
          'fallback_cb' => false
        ));
        ?>
      </nav>
    </div>
  </header>