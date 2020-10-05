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

  if( has_post_thumbnail() && !is_front_page() ) :
    ?>
    <div class="page-hero" style="background-image: url(<?= get_the_post_thumbnail_url() ?>)"></div>
    <?php
  endif;

}

add_action( 'genesis_entry_content', 'uos_icon_background', 12 );
function uos_icon_background() {

  $background_image = get_field( 'background_image', 'option' );
  $vertical_text_1 = get_field( 'vertical_text_1', 'option' );
  $vertical_text_2 = get_field( 'vertical_text_2', 'option' );
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
  <?php endif;

}
