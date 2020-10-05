<?php
/**
 * Custom
 *
 * @package      UOStheme
 * @author       P&P Creative
 * @since        1.0.0
**/

add_action( 'genesis_after_header', 'uos_page_hero' );
function uos_page_hero() {

  if( is_front_page() || is_singular( 'post' ) ) return;

  if( ( is_home() || is_archive() ) && has_post_thumbnail( get_option( 'page_for_posts' ) ) ) :

    $img_url = get_the_post_thumbnail_url( get_option( 'page_for_posts' ) );

  elseif( has_post_thumbnail() ) :

    $img_url = get_the_post_thumbnail_url();

  endif;

  if( $img_url ) :
    ?>
    <div class="page-hero" style="background-image: url(<?= $img_url ?>)"></div>
    <?php
  endif;

}

add_action( 'genesis_after_loop', 'uos_icon_background', 12 );
function uos_icon_background() {

  $background_image = get_field( 'background_image', 'option' );
  $vertical_text_1 = get_field( 'vertical_text_1', 'option' );
  $vertical_text_2 = get_field( 'vertical_text_2', 'option' );
  $footer_logo = get_field( 'footer_logo', 'option' );
  ?>
  <?php if( $background_image ) : ?>
    <div class="background background-default">
      <img src="<?= $background_image['url'] ?>" alt="<?= $background_image['alt'] ?>" />
    </div>
  <?php endif; ?>

  <?php if( $vertical_text_1 ) : ?>
    <div class="vertical-text-1 vertical-text">
      <?= $vertical_text_1 ?>
    </div>
  <?php endif; ?>

  <?php if( $vertical_text_2 ) : ?>
    <div class="vertical-text-2 vertical-text">
      <?= $vertical_text_2 ?>
    </div>
  <?php endif; ?>

  <?php if( $footer_logo ) : ?>
    <div class="footer-logo">
      <div class="footer-logo-inner inner">
        <img src="<?= $footer_logo['url'] ?>" alt="<?= $footer_logo['alt'] ?>" />
      </div>
    </div>
  <?php endif;

}
