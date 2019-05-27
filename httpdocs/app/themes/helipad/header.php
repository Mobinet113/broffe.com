<?php
/**
 * The header for our theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Helipad
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">

  <meta name="theme-color" content="#F44336">
  <meta name="msapplication-navbutton-color" content="#F44336">
  <meta name="apple-mobile-web-app-status-bar-style" content="#F44336">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="http://gmpg.org/xfn/11">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

  <meta name="description" content="<?php bloginfo('description'); ?>">


  <noscript>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/src/css/no-script.css">

  </noscript>

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="page" class="site">
  <header id="masthead" class="site-header" role="banner">
  </header>
