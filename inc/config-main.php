<?php
/**
 * Config
 *
 * @package      UOStheme
 * @author       P&P Creative
 * @since        1.0.0
**/

$uos_config = genesis_get_config( 'main' );

// Enables ACF global options page if selected
if( $uos_config[ 'acf-options-page' ] === true ) {

  if( function_exists( 'acf_add_options_page' ) ) {

    acf_add_options_page( [
      'page_title'  => 'Global Settings',
      'menu_title'  => 'Global Settings',
    ] );
  }

}

// Sets custom image sizes
$image_sizes = $uos_config[ 'image-sizes' ];

if( $image_sizes ) {

  foreach( $image_sizes as $image_size ) {

    add_image_size( $image_size['name'], $image_size['width'], $image_size['height'], $image_size['crop'] );

  }

}

// Registers the responsive menus
if ( function_exists( 'genesis_register_responsive_menus' ) ) {

	genesis_register_responsive_menus( $uos_config[ 'responsive-menus' ] );

}

// Reduces secondary navigation to one level depth
if( $uos_config[ 'reduce-secondary-nav' ] === true ) {

  add_filter( 'wp_nav_menu_args', 'uos_secondary_menu_args' );
  function uos_secondary_menu_args( $args ) {

    if( 'secondary' === $args['theme_location'] ) {

    		$args['depth'] = 1;

    }

  	return $args;

  }

}

// Removes sidebars
if( $uos_config[ 'remove-sidebars' ] !== null ) {

  foreach( $uos_config[ 'remove-sidebars' ] as $sidebar ) {

    unregister_sidebar( $sidebar );

  }

}

// Removes page layouts
if( $uos_config[ 'remove-layouts' ] !== null ) {

  foreach( $uos_config[ 'remove-layouts' ] as $layout ) {

    genesis_unregister_layout( $layout );

  }

}

// Force full-width layout
if( $uos_config[ 'force-full-width' ] === true ) {

  add_filter( 'genesis_pre_get_option_site_layout', '__genesis_return_full_width_content' );

}

// Adds footer widgets
// if( $uos_config[ 'genesis-footer-widgets' ] != 0 ) :
//
//   add_theme_support( 'genesis-footer-widgets', $footer_widgets );
//
// endif;
