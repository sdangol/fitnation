<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <?php wp_head(); ?>
  </head>

  <body <?php body_class('size-1280'); ?>>
    <!-- HEADER -->
    <header role="banner" class="position-absolute header-nobg">    
      <!-- Top Navigation -->
      <?php get_template_part('template-parts/header','nav'); ?>
    </header>