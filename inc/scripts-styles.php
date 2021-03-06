<?php
/**
 * Scripts & Styles
 *
 * @package      UOStheme
 * @author       P&P Creative
 * @since        1.0.0
**/


// Enqueues main scripts and styles
add_action( 'wp_enqueue_scripts', 'uos_scripts_styles' );
function uos_scripts_styles() {

  wp_enqueue_style( 'dashicons' );
  wp_enqueue_style( 'uos-main-css', get_stylesheet_directory_uri() . '/assets/dist/main.min.css' );
  wp_enqueue_style( 'uos-inline-css', get_stylesheet_directory_uri() . '/assets/dist/inline.css' );
  wp_enqueue_script( 'uos-main-js', get_stylesheet_directory_uri() . '/assets/dist/main.min.js', null, null, true );

}

// Enqueues Gutenberg scripts and styles
add_action( 'enqueue_block_editor_assets', 'uos_gutenberg_scripts_styles' );
function uos_gutenberg_scripts_styles() {

  wp_enqueue_style( 'dashicons' );
  wp_enqueue_style( 'uos-editor-inline-css', get_stylesheet_directory_uri() . '/assets/dist/inline.css' );
  wp_enqueue_script( 'uos-editor-main-js', get_stylesheet_directory_uri() . '/assets/dist/editor.min.js', [ 'wp-blocks', 'wp-dom' ], null, true );

}
