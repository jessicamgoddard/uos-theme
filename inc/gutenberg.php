<?php
/**
 * Gutenberg
 *
 * @package      StarterTheme
 * @author       P&P Creative
 * @since        1.0.0
**/

// Set editor stylesheet
add_action( 'after_setup_theme', 'starter_theme_add_editor_styles' );
function starter_theme_add_editor_styles() {

  add_editor_style( '/assets/dist/editor.min.css' );

}

// Removes core block patterns
remove_theme_support( 'core-block-patterns' );

// Adds body classes to help with styling
add_filter( 'body_class', 'starter_theme_blocks_body_classes' );
function starter_theme_blocks_body_classes( $classes ) {

	if ( ! is_singular() || ! function_exists( 'has_blocks' ) || ! function_exists( 'parse_blocks' ) ) {
		return $classes;
	}

	if ( ! has_blocks() ) {
		$classes[] = 'has-no-blocks';
		return $classes;
	}

	$post_object = get_post( get_the_ID() );
	$blocks      = (array) parse_blocks( $post_object->post_content );

	if ( isset( $blocks[0]['blockName'] ) ) {
		$classes[] = 'first-block-' . str_replace( '/', '-', $blocks[0]['blockName'] );
	}

	if ( isset( $blocks[0]['attrs']['align'] ) ) {
		$classes[] = 'first-block-align-' . $blocks[0]['attrs']['align'];
	}

	return $classes;

}
