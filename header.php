<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div id="wrapper">

        <!-- Header -->
        <header id="header">

            <nav class="links">
                <?php
                wp_nav_menu([
                    'theme_location' => 'header-menu',
                    'container' => false,
                    'items_wrap' => '<ul>%3$s</ul>'
                ]);
                ?>
            </nav>
            <a class="search"></a>


            <nav class="main">
            </nav>
        </header>