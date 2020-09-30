<?php
/**
 * Defualts
 *
 * @package      StarterTheme
 * @author       P&P Creative
 * @since        1.0.0
**/

// Forces blog to use archive template
add_filter( 'template_include', 'starter_theme_template_heirarchy' );
function starter_theme_template_heirarchy( $template ) {

  if( is_home() ) {
      $template = get_query_template( 'archive' );
  }

  return $template;

}

// Cleans post classes
add_filter( 'post_class', 'starter_theme_clean_post_classes', 5 );
function starter_theme_clean_post_classes( $classes ) {

	if( ! is_array( $classes ) )
		return $classes;

	$allowed_classes = array(
  		'hentry',
  		'type-' . get_post_type(),
   	);

	return array_intersect( $classes, $allowed_classes );
}
