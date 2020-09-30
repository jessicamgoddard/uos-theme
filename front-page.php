<?php
/**
 * Archive
 *
 * @package      UOStheme
 * @author       P&P Creative
 * @since        1.0.0
**/


function uos_front_page_hero() {

	$hero_content_1 = get_field( 'hero_content_1' );
	$hero_content_2 = get_field( 'hero_content_2' );

}

add_action( 'genesis_entry_content', 'uos_front_page_fields' );
function uos_front_page_fields() {

	$page_intro = get_field( 'section_1' );
	$background_1 = get_field( 'background_1' );
	$section_1_image = get_field( 'image_and_text_image' );
	$section_1_text = get_field( 'image_and_text_text' );
	$section_2_text = get_field( 'mosaic_and_text_text' );
	$mosaic_image_1 = get_field( 'mosaic_and_text_image_1' );
	$mosaic_image_2 = get_field( 'mosaic_and_text_image_2' );
	$mosaic_image_3 = get_field( 'mosaic_and_text_image_3' );
	$vertical_text_1 = get_field( 'vertical_text_1' );
	$background_2 = get_field( 'background_2' );
	$section_3_heading = get_field( 'section_3_heading' );
	$section_3_text = get_field( 'section_3_text' );
	$section_4_heading = get_field( 'section_4_heading' );
	$section_4_text = get_field( 'section_4_text' );
	$background_3 = get_field( 'background_3' );
	$vertical_text_2 = get_field( 'vertical_text_2' );
	$final_content = get_field( 'final_content' );

	if( $page_intro ) :
		?>
		<div class="page-intro">
			<div class="page-intro-inner inner">
				<?= $page_intro ?>
			</div>
			<?php if( $background_1 ) : ?>
				<div class="background background-1">
					<img src="<?= $background_1['url'] ?>" alt="<?= $background_1['alt'] ?>" />
				</div>
			<?php endif; //$background_1 ?>
		</div>
		<?php
	endif; // $page_intro

	if( $section_1_image || $section_1_text ) :
		?>
		<div class="section-1 section">
			<div class="section-1-inner inner">
				<?php if( $section_1_image ) : ?>
					<div class="section-1-image">
						<img src="<?= $section_1_image['url'] ?>" alt="<?= $section_1_image['alt'] ?>" />
					</div>
				<?php endif; // $section_1_image ?>
				<?php if( $section_1_text ) : ?>
					<div class="section-1-text">
						<h2><?= $section_1_text ?></h2>
					</div>
				<?php endif; // $section_1_text ?>
			</div>
		</div>
		<?php
	endif; // $section_1

	if( $section_2_text ) :
		?>
		<div class="section-2 section">
			<div class="section-2-inner inner">
				<div class="section-2-text">
					<?= $section_2_text ?>
				</div>
				<?php if( $mosaic_image_1 || $mosaic_image_2 || $mosaic_image_3 ) : ?>
					<div class="mosaic-images">
						<?php if( $mosaic_image_1 ) : ?>
							<img src="<?= $mosaic_image_1['url'] ?>" alt="<?= $mosaic_image_1['alt'] ?>" />
						<?php endif; // $mosaic_image_1 ?>
						<?php if( $mosaic_image_2 ) : ?>
							<img src="<?= $mosaic_image_2['url'] ?>" alt="<?= $mosaic_image_2['alt'] ?>" />
						<?php endif; // $mosaic_image_2 ?>
						<?php if( $mosaic_image_3 ) : ?>
							<img src="<?= $mosaic_image_3['url'] ?>" alt="<?= $mosaic_image_3['alt'] ?>" />
						<?php endif; // $mosaic_image_3 ?>
					</div>
				<?php endif; // $mosaic_image ?>
			</div>
			<?php if( $vertical_text_1 ) : ?>
				<div class="vertical-text-1 vertical-text">
					<?= $vertical_text_1 ?>
				</div>
			<?php endif; // $vertical_text_1 ?>
		</div>
		<?php
	endif; // $section_2

	if( $section_3_text ) :
		?>
		<div class="section-3 section">
			<div class="section-3-inner inner">
				<?php if( $background_2 ) : ?>
					<div class="background-2 background">
						<img src="<?= $background_2['url'] ?>" alt="<?= $background_2['alt'] ?>" />
					</div>
				<?php endif; // $background_2 ?>
				<div class="section-3-text">
					<?php if( $section_3_heading ) : ?>
						<h2><?= $section_3_heading ?></h2>
					<?php endif; // $section_3_heading ?>
					<div class="text">
						<?= $section_3_text ?>
					</div>
				</div>
			</div>
		</div>
		<?php
	endif;

	if( $section_4_text ) :
		?>
		<div class="section-4 section">
			<div class="section-4-inner inner">
				<div class="section-4-text">
					<?php if( $section_4_heading ) : ?>
						<h2><?= $section_4_heading ?></h2>
					<?php endif; // $section_4_heading ?>
					<div class="text">
						<?= $section_4_text ?>
					</div>
				</div>
				<?php if( $background_3 ) : ?>
					<div class="background-3 background">
						<img src="<?= $background_3['url'] ?>" alt="<?= $background_3['alt'] ?>" />
					</div>
				<?php endif; // $background_3 ?>
			</div>
			<?php if( $vertical_text_2 ) : ?>
				<div class="vertical-text-2 vertical-text">
					<?= $vertical_text_2 ?>
				</div>
			<?php endif; // $vertical_text_2 ?>
		</div>
	<?php endif; // $section_4

	if( $final_content ) :
		?>
		<div class="final-content">
			<div class="final-content-inner inner">
				<?= $final_content ?>
			</div>
		</div>
	<?php endif; // $final_content

}

genesis();
