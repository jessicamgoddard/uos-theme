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
  'html5'                       => [ 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'script', 'style', 'navigation-widgets' ],
  'genesis-structural-wraps'    => [ 'header', 'menu-secondary', 'site-inner', 'footer-widgets', 'footer' ],
  'genesis-accessibility'       => [ '404-page', 'drop-down-menu', 'headings', 'rems', 'search-form', 'skip-links', 'screen-reader-text' ],
  'genesis-menus'               => [
    'primary'   => 'Primary Menu',
    'secondary' => 'Secondary Menu',
  ],
  'wp-block-styles'             => false,
  'editor-styles'               => true,
  'editor-font-sizes'           => [
    [
      'name'        => __( 'Small' ),
      'shortName'   => __( 'S' ),
      'size'        => 14,
      'slug'        => 'small',
    ],
    [
      'name'        => __( 'Normal' ),
      'shortName'   => __( 'M' ),
      'size'        => 18,
      'slug'        => 'normal',
    ],
    [
      'name'        => __( 'Large' ),
      'shortName'   => __( 'L' ),
      'size'        => 22,
      'slug'        => 'large',
    ],
    [
      'name'        => __( 'Extra Large' ),
      'shortName'   => __( 'XL' ),
      'size'        => 26,
      'slug'        => 'extra-large',
    ],
  ],
  'editor-color-palette'        => [
    [
      'name'  => __( 'White' ),
      'slug'  => 'white',
      'color' => '#ffffff',
    ],
    [
      'name'  => __( 'Light Gray' ),
      'slug'  => 'light-gray',
      'color' => '#F7F7F7',
    ],
    [
      'name'  => __( 'Black' ),
      'slug'  => 'black',
      'color' => '#000000',
    ],
  ]
];
