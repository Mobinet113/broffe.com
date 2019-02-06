<?php
/**
 * Helipad functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package NowComms_Skeleton
 */
/* define some Constants to make our life easier */
define('FS_METHOD', 'direct');
if (!function_exists('helipad_setup')) :
  /**
   * Sets up theme defaults and registers support for various WordPress features.
   *
   * Note that this function is hooked into the after_setup_theme hook, which
   * runs before the init hook. The init hook is too late for some features, such
   * as indicating support for post thumbnails.
   */
  function helipad_setup()
  {

    // Add default posts and comments RSS feed links to head.
    add_theme_support('automatic-feed-links');
    /*
     * Let WordPress manage the document title.
     * By adding theme support, we declare that this theme does not use a
     * hard-coded <title> tag in the document head, and expect WordPress to
     * provide it for us.
     */
    add_theme_support('title-tag');
    /*
     * Enable support for Post Thumbnails on posts and pages.
     *
     * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
     */
    add_theme_support('post-thumbnails');
    // This theme uses wp_nav_menu() in one location.
    register_nav_menus(array(
      'primary' => esc_html__('Primary', 'helipad'),
      'footer' => esc_html__('Footer', 'helipad')
    ));
    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    add_theme_support('html5', array(
      'search-form',
      'comment-form',
      'comment-list',
      'gallery',
      'caption',
    ));
    // Set up the WordPress core custom background feature.
    add_theme_support('custom-background', apply_filters('helipad_custom_background_args', array(
      'default-color' => 'ffffff',
      'default-image' => '',
    )));
  }
endif;
add_action('after_setup_theme', 'helipad_setup');


/**
 * Load Inc files with further functions
 */

include('inc/metaboxes.php');
include('inc/postTypes.php');