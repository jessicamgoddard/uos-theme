<?php
/**
 * Custom
 *
 * @package      UOStheme
 * @author       P&P Creative
 * @since        1.0.0
**/

// Excludes node_modules folders in All-in-One export
add_filter('ai1wm_exclude_content_from_export', function($exclude_filters) {

  $exclude_filters[] = 'themes/uos-theme/assets/node_modules';
  $exclude_filters[] = 'plugins/pandp-blocks/node_modules';

  return $exclude_filters;

});
