<?php
/**
 * Inline CSS
 *
 * @package      UOStheme
 * @author       P&P Creative
 * @since        1.0.0
**/

add_action( 'enqueue_block_editor_assets', 'uos_custom_gutenberg_css' );
add_action( 'wp_enqueue_scripts', 'uos_custom_gutenberg_css' );
function uos_custom_gutenberg_css() {

  $uos_config = genesis_get_config( 'theme-supports' );

  $css = '';
  $colors = $uos_config[ 'editor-color-palette' ];
  $font_sizes = $uos_config[ 'editor-font-sizes' ];

  foreach( $colors as $color ) {

    $css .= <<<CSS

    .has-{$color['slug']}-color {
      color: {$color['color']};
    }

    .has-{$color['slug']}-background-color {
      background-color: {$color['color']};
    }

CSS;

  }

  foreach( $font_sizes as $font_size ) {

    $size = $font_size['size'] / 16;

    $css .= <<<CSS

    .has-{$font_size['slug']}-font-size {
      font-size: {$size}rem;
    }

CSS;

  }

  wp_add_inline_style( 'uos-inline-css', $css );
  wp_add_inline_style( 'uos-editor-inline-css', $css );

}
