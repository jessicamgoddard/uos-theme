<?php
/**
 * Inline CSS
 *
 * @package      StarterTheme
 * @author       P&P Creative
 * @since        1.0.0
**/

add_action( 'enqueue_block_editor_assets', 'starter_theme_custom_gutenberg_css' );
add_action( 'wp_enqueue_scripts', 'starter_theme_custom_gutenberg_css' );
function starter_theme_custom_gutenberg_css() {

  $starter_theme_config = genesis_get_config( 'theme-supports' );

  $css = '';
  $colors = $starter_theme_config[ 'editor-color-palette' ];
  $font_sizes = $starter_theme_config[ 'editor-font-sizes' ];

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

  wp_add_inline_style( 'kyosa-theme-inline-css', $css );
  wp_add_inline_style( 'kyosa-theme-editor-inline-css', $css );

}
