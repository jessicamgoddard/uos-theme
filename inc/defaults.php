<?php
/**
 * Defualts
 *
 * @package      UOStheme
 * @author       P&P Creative
 * @since        1.0.0
**/

// Forces blog to use archive template
add_filter( 'template_include', 'uos_template_heirarchy' );
function uos_template_heirarchy( $template ) {

  if( is_home() ) {
      $template = get_query_template( 'archive' );
  }

  return $template;

}

// Cleans post classes
add_filter( 'post_class', 'uos_clean_post_classes', 5 );
function uos_clean_post_classes( $classes ) {

	if( ! is_array( $classes ) )
		return $classes;

	$allowed_classes = array(
  		'hentry',
  		'type-' . get_post_type(),
   	);

	return array_intersect( $classes, $allowed_classes );
}
