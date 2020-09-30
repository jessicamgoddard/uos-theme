<?php
/**
 * Scripts & Styles
 *
 * @package      StarterTheme
 * @author       P&P Creative
 * @since        1.0.0
**/


// Enqueues main scripts and styles
add_action( 'wp_enqueue_scripts', 'starter_theme_scripts_styles' );
function starter_theme_scripts_styles() {

  wp_enqueue_style( 'dashicons' );
  wp_enqueue_style( 'starter-theme-main-css', get_stylesheet_directory_uri() . '/assets/dist/main.min.css' );
  wp_enqueue_style( 'starter-theme-inline-css', get_stylesheet_directory_uri() . '/assets/dist/inline.css' );
  wp_enqueue_script( 'starter-theme-main-js', get_stylesheet_directory_uri() . '/assets/dist/main.min.js', null, null, true );

}

// Enqueues Gutenberg scripts and styles
add_action( 'enqueue_block_editor_assets', 'starter_theme_gutenberg_scripts_styles' );
function starter_theme_gutenberg_scripts_styles() {

  wp_enqueue_style( 'dashicons' );
  wp_enqueue_style( 'starter-theme-editor-inline-css', get_stylesheet_directory_uri() . '/assets/dist/inline.css' );
  wp_enqueue_script( 'starter-theme-editor-main-js', get_stylesheet_directory_uri() . '/assets/dist/editor.min.js', [ 'wp-blocks', 'wp-dom' ], null, true );

}
