<?php
/**
 * Genesis
 *
 * @package      UOStheme
 * @author       P&P Creative
 * @since        1.0.0
**/

// Remove Genesis SEO settings from post/page editor
remove_action( 'admin_menu', 'genesis_add_inpost_seo_box' );

// Remove Genesis SEO settings option page
remove_theme_support( 'genesis-seo-settings-menu' );

// Remove Genesis SEO settings from taxonomy editor
remove_action( 'admin_init', 'genesis_add_taxonomy_seo_options' );

// Moves navigation menus
remove_action( 'genesis_after_header', 'genesis_do_nav' );
remove_action( 'genesis_after_header', 'genesis_do_subnav' );
add_action( 'genesis_header', 'genesis_do_nav' );
// add_action( 'genesis_header', 'genesis_do_subnav' );

// Wraps front page title in h1
add_filter( 'genesis_site_title_wrap', function( $wrap ) { return is_front_page() ? 'h1' : $wrap; } );

// Removes Genesis templates
add_filter( 'theme_page_templates', 'uos_remove_genesis_templates' );
function uos_remove_genesis_templates( $page_templates ) {

	unset( $page_templates['page_archive.php'] );
	unset( $page_templates['page_blog.php'] );

	return $page_templates;

}

// Adds search to secondary navigation
add_filter( 'wp_nav_menu_items', 'uos_add_search_to_menu', 10, 2 );
function uos_add_search_to_menu( $menu, $args ) {

  if( ( 'secondary' !== $args->theme_location ) )
    return $menu;

  ob_start();
  get_search_form();
  $search = ob_get_clean();
  $menu .= '<li class="search-toggle"><span class="dashicons dashicons-search"></span></li>';
  $menu .= '<li class="search">' . $search . '</li>';

  return $menu;

}

// Adds hero image to page and posts
// add_action( 'genesis_entry_header', 'uos_add_page_post_hero_image', 5 );
function uos_add_page_post_hero_image() {

  if( ( is_page() || is_singular() ) && has_post_thumbnail() ) :
    ?>
    <div class="page-hero">
      <div class="page-hero__image" style="background-image: url('<?= get_the_post_thumbnail_url() ?>')">

        <?php if( get_field( 'headline' ) ) : ?>
          <div class="page-hero__headline">
            <p><?= get_field( 'headline' ) ?></p>
          </div>
        <?php endif; ?>

        <?php if( is_singular() && get_the_category() ) :?>
          <div class="page-hero__meta">
            <?= uos_categories_with_colors() ?>
          </div>
        <?php endif; ?>

        <?= get_the_post_thumbnail() ?>
      </div>
    </div>
    <?php
  endif;
  if( is_page() || is_singular() ) :
    ?>
    <div class="wrap alignwide">
    <?php
  endif;

}

// add_action( 'genesis_entry_header', 'uos_add_header_wrap_close', 10 );
function uos_add_header_wrap_close() {

  if( is_page() || is_singular() ) :
    echo '</div>';
  endif;

}
