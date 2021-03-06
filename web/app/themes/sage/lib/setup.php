<?php

namespace Roots\Sage\Setup;

use Roots\Sage\Assets;

/**
 * Theme setup
 */
function setup() {
  // Enable features from Soil when plugin is activated
  // https://roots.io/plugins/soil/
  add_theme_support('soil-clean-up');
  add_theme_support('soil-nav-walker');
  add_theme_support('soil-nice-search');
  add_theme_support('soil-jquery-cdn');
  add_theme_support('soil-relative-urls');
  add_theme_support('woocommerce');
  add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );
  add_theme_support( 'post-thumbnails' );

  // Make theme available for translation
  // Community translations can be found at https://github.com/roots/sage-translations
  load_theme_textdomain('sage', get_template_directory() . '/lang');

  // Enable plugins to manage the document title
  // http://codex.wordpress.org/Function_Reference/add_theme_support#Title_Tag
  add_theme_support('title-tag');

  // Register wp_nav_menu() menus
  // http://codex.wordpress.org/Function_Reference/register_nav_menus
  register_nav_menus([
    'primary_navigation' => __('Primary Navigation', 'sage')
  ]);

  // Enable post thumbnails
  // http://codex.wordpress.org/Post_Thumbnails
  // http://codex.wordpress.org/Function_Reference/set_post_thumbnail_size
  // http://codex.wordpress.org/Function_Reference/add_image_size
  add_theme_support('post-thumbnails');

  // Enable post formats
  // http://codex.wordpress.org/Post_Formats
  add_theme_support('post-formats', ['aside', 'gallery', 'link', 'image', 'quote', 'video', 'audio']);

  // Enable HTML5 markup support
  // http://codex.wordpress.org/Function_Reference/add_theme_support#HTML5
  add_theme_support('html5', ['caption', 'comment-form', 'comment-list', 'gallery', 'search-form']);

  // Use main stylesheet for visual editor
  // To add custom styles edit /assets/styles/layouts/_tinymce.scss
  add_editor_style(Assets\asset_path('styles/main.css'));
}
add_action('after_setup_theme', __NAMESPACE__ . '\\setup');

/**
 * Register sidebars
 */
function widgets_init() {
  register_sidebar([
    'name'          => __('Primary Sidebar', 'sage'),
    'id'            => 'sidebar-primary',
    'before_widget' => '<section class="widget %1$s %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>'
  ]);

    register_sidebar([
    'name'          => __('Home Page Widget Area 1', 'sage'),
    'id'            => 'sidebar-home-1',
    'before_widget' => '<section>',
    'after_widget'  => '</section>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>'
  ]);

    register_sidebar([
    'name'          => __('Home Page Widget Area 2', 'sage'),
    'id'            => 'sidebar-home-2',
    'before_widget' => '<section>',
    'after_widget'  => '</section>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>'
  ]);

    register_sidebar([
    'name'          => __('Home Page Widget Area 3', 'sage'),
    'id'            => 'sidebar-home-3',
    'before_widget' => '<section>',
    'after_widget'  => '</section>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>'
  ]);

    register_sidebar([
    'name'          => __('Home Page Widget Area 4', 'sage'),
    'id'            => 'sidebar-home-4',
    'before_widget' => '<section>',
    'after_widget'  => '</section>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>'
  ]);

  register_sidebar([
    'name'          => __('Site Footer', 'sage'),
    'id'            => 'sidebar-footer',
    'before_widget' => '<section class="widget %1$s %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>'
  ]);
}
add_action('widgets_init', __NAMESPACE__ . '\\widgets_init');

/**
 * Determine which pages should NOT display the sidebar
 */
function display_sidebar() {
  static $display;

  isset($display) || $display = !in_array(true, [
    // The sidebar will NOT be displayed if ANY of the following return true.
    // @link https://codex.wordpress.org/Conditional_Tags
    is_404(),
    is_front_page(),
    is_page('gallery'),
    is_page_template('template-custom.php'),
    is_post_type_archive('product')
  ]);

  return apply_filters('sage/display_sidebar', $display);
}

/**
 * Theme assets
 */
function assets() {
  wp_enqueue_style('sage/css', Assets\asset_path('styles/main.css'), false, null);
  wp_enqueue_script('sage/js', Assets\asset_path('scripts/main.js'), ['jquery'], null, true);

  if (is_single() && comments_open() && get_option('thread_comments')) {
    wp_enqueue_script('comment-reply');
  }
  if ( is_page('gallery') ) {
    wp_enqueue_script('masonry');
   // wp_enqueue_style('sage/css’, get_template_directory_uri()'.'/css/');
    //wp_enqueue_script('sage/js', Assets\asset_path('scripts/masonry-init.js'), ['jquery'], null, true);
  }

  //wp_enqueue_script('flickety-script', 'https://unpkg.com/flickity@2.0/dist/flickity.pkgd.min.js');
 // wp_enqueue_style('flickity-style', 'https://unpkg.com/flickity@2.0/dist/flickity.min.css');
}
add_action('wp_enqueue_scripts', __NAMESPACE__ . '\\assets', 100);

