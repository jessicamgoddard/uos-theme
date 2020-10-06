<?php
/**
 * Config - Theme Supports
 *
 * @package      UOStheme
 * @author       P&P Creative
 * @since        1.0.0
**/

return [
  'responsive-embeds'           => true,
  'align-wide'                  => true,
  'custom-line-height'          => false,
  'disable-custom-colors'       => true,
  'genesis-responsive-viewport' => true,
  'genesis-custom-logo'         => true,
  'genesis-footer-widgets'  => 2,
  'html5'                       => [ 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'script', 'style', 'navigation-widgets' ],
  'genesis-structural-wraps'    => [ 'header', 'menu-secondary', 'site-inner', 'footer-widgets', 'footer' ],
  'genesis-accessibility'       => [ '404-page', 'drop-down-menu', 'headings', 'rems', 'search-form', 'skip-links', 'screen-reader-text' ],
  'genesis-menus'               => [
    'primary'   => 'Primary Menu',
    // 'secondary' => 'Secondary Menu',
  ],
  'wp-block-styles'             => false,
  'editor-styles'               => true,
  'editor-font-sizes'           => [
    [
      'name'        => __( 'Small' ),
      'shortName'   => __( 'S' ),
      'size'        => 16,
      'slug'        => 'small',
    ],
    [
      'name'        => __( 'Normal' ),
      'shortName'   => __( 'M' ),
      'size'        => 20,
      'slug'        => 'normal',
    ],
    [
      'name'        => __( 'Large' ),
      'shortName'   => __( 'L' ),
      'size'        => 24,
      'slug'        => 'large',
    ],
    [
      'name'        => __( 'Extra Large' ),
      'shortName'   => __( 'XL' ),
      'size'        => 28,
      'slug'        => 'extra-large',
    ],
  ],
  'editor-color-palette'        => [
    [
      'name'  => __( 'Dark Purple' ),
      'slug'  => 'dark-purple',
      'color' => '#211851',
    ],
    [
      'name'  => __( 'Light Purple' ),
      'slug'  => 'light-purple',
      'color' => '#45388E',
    ],
    [
      'name'  => __( 'Gold' ),
      'slug'  => 'gold',
      'color' => '#B98505',
    ],
    [
      'name'  => __( 'White' ),
      'slug'  => 'white',
      'color' => '#ffffff',
    ],
    [
      'name'  => __( 'Light Gray' ),
      'slug'  => 'light-gray',
      'color' => '#C7C9CB',
    ],
    [
      'name'  => __( 'Gray' ),
      'slug'  => 'gray',
      'color' => '#716F6F',
    ],
    [
      'name'  => __( 'Black' ),
      'slug'  => 'black',
      'color' => '#000000',
    ],
  ],
];
