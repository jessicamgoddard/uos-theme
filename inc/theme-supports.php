<?php
/**
 * Theme Supports
 *
 * @package      UOStheme
 * @author       P&P Creative
 * @since        1.0.0
**/


$uos_config = genesis_get_config( 'theme-supports' );

// Sets theme supports based on config options
if( $uos_config[ 'theme-supports' ] ) {

  foreach( $uos_config[ 'theme-supports' ] as $theme_support => $value ) {

    if( false === $value ) :

      remove_theme_support( $theme_support );

    else :

      add_theme_support( $theme_support, $value );

    endif;

  }

}

// Allow and set custom units
if( $uos_config[ 'custom-units' ] ) :

  $units = implode( ', ', $uos_config[ 'custom-units' ] );

  add_theme_support( 'custom-units', $units );

endif;
