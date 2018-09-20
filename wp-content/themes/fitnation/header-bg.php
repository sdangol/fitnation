<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php wp_head(); ?>
  </head>

  <body <?php body_class('size-1280'); ?>>
    <!-- HEADER -->
    <header role="banner" class="position-absolute header-bg">    
      <!-- Top Navigation -->
      <?php get_template_part('template-parts/header','nav'); ?>
    </header>