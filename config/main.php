<?php
/**
 * Config - Nav
 *
 * @package      UOStheme
 * @author       P&P Creative
 * @since        1.0.0
**/

return [
  'acf-options-page'  => false,
  'image-sizes'       => [
    [
      'name'    => 'medium-square',
      'width'   => '300',
      'height'  => '300',
      'crop'    => true
    ],
  ],
  'responsive-menus'             => [
    'script'  => [
      'mainMenu'    => __( 'Menu' ),
      'menuClasses' => [
        // 'others'  => [ '.nav-primary' ],
        'combine'  => [ '.nav-secondary', '.nav-primary' ],
      ]
    ],
    'extras'  => [
      'media_query_width' => '960px',
    ],
  ],
  'custom-units'            => [ 'px', 'rem', 'em', 'vh', 'vw' ],
  'reduce-secondary-nav'    => true,
  'remove-sidebars'             => [ 'sidebar', 'sidebar-alt', 'header-right', 'after-entry' ],
  'genesis-footer-widgets'      => 3,
  'remove-layouts'              => [ 'content-sidebar-sidebar', 'sidebar-content-sidebar', 'sidebar-sidebar-content', 'sidebar-content', 'content-sidebar' ],
  'force-full-width'            => true,
];
