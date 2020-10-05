<?php
/**
 * Archive
 *
 * @package      UOStheme
 * @author       P&P Creative
 * @since        1.0.0
**/

add_action( 'genesis_after_header', 'uos_front_page_hero' );
function uos_front_page_hero() {

	$featured_image = get_the_post_thumbnail_url();
	$hero_content_1 = get_field( 'hero_content_1' );
	$hero_content_2 = get_field( 'hero_content_2' );

	if( $hero_content_1 || $hero_content_2 ) :
		?>
		<div class="page-hero">
			<div class="page-hero-inner">
				<?php if( $hero_content_1 ) : ?>
					<div class="hero-content-1">
						<?= $hero_content_1 ?>
					</div>
				<?php endif; // $hero_content_1 ?>
				<?php if( $hero_content_2 ) : ?>
					<div class="hero-content-2">
						<?= $hero_content_2 ?>
					</div>
				<?php endif; // $hero_content_2 ?>
			</div>
			<div class="page-hero-background">
				<?php if( $featured_image ) : ?>
					<div class="page-hero-image" style="background-image: url(<?= $featured_image ?>)"></div>
				<?php endif; // $featured_image ?>
			</div>
		</div>
		<?php
	endif;

}

add_action( 'genesis_entry_content', 'uos_front_page_fields' );
function uos_front_page_fields() {

	$page_intro_heading = get_field( 'section_1_heading' );
	$page_intro = get_field( 'section_1' );
	$section_1_image = get_field( 'image_and_text_image' );
	$section_1_text = get_field( 'image_and_text_text' );
	$section_2_text = get_field( 'mosaic_and_text_text' );
	$mosaic_image_1 = get_field( 'mosaic_and_text_image_1' );
	$mosaic_image_2 = get_field( 'mosaic_and_text_image_2' );
	$mosaic_image_3 = get_field( 'mosaic_and_text_image_3' );
	$background_2 = get_field( 'background_2' );
	$section_3_heading = get_field( 'section_3_heading' );
	$section_3_text = get_field( 'section_3_text' );
	$section_4_heading = get_field( 'section_4_heading' );
	$section_4_text = get_field( 'section_4_text' );
	$background_3 = get_field( 'background_3' );
	$final_content = get_field( 'final_content' );

	if( $page_intro_heading || $page_intro ) :
		?>
		<div class="page-intro">
			<div class="page-intro-inner inner">
				<?php if( $page_intro_heading ) : ?>
					<h2 class="page-intro-heading alignwide">
						<?= $page_intro_heading ?>
					</h2>
				<?php endif; // $page_intro_heading ?>
				<?php if( $page_intro ) : ?>
					<div class="page-intro-text">
						<?= $page_intro ?>
					</div>
				<?php endif; // $page_intro ?>
			</div>
		</div>
		<?php
	endif; // $page_intro

	if( $section_1_image || $section_1_text ) :
		?>
		<div class="section-1 section alignwide">
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
		<div class="section-2 section alignwide">
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
		</div>
		<?php
	endif; // $section_2

	if( $section_3_text ) :
		?>
		<div class="section-3 section">
			<div class="section-3-inner inner">
				<div class="section-3-text">
					<?php if( $section_3_heading ) : ?>
						<h2><?= $section_3_heading ?></h2>
					<?php endif; // $section_3_heading ?>
					<div class="text">
						<?= $section_3_text ?>
					</div>
				</div>
			</div>
			<?php if( $background_2 ) : ?>
				<div class="background-2 background">
					<img src="<?= $background_2['url'] ?>" alt="<?= $background_2['alt'] ?>" />
				</div>
			<?php endif; // $background_2 ?>
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
			</div>
			<?php if( $background_3 ) : ?>
				<div class="background-3 background">
					<img src="<?= $background_3['url'] ?>" alt="<?= $background_3['alt'] ?>" />
				</div>
			<?php endif; // $background_3 ?>
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
