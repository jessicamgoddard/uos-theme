<?php
/**
 * Single Post
 *
 * @package      UOStheme
 * @author       P&P Creative
 * @since        1.0.0
**/

// Add featured image on single post
add_action( 'genesis_entry_header', 'uos_featured_image', 1 );
function uos_featured_image() {

	$image = genesis_get_image( array( // more options here -> genesis/lib/functions/image.php
			'format'  => 'html',
			'size'    => 'featured',// add in your image size large, medium or thumbnail - for custom see the post
			'context' => '',
			'attr'    => array ( 'class' => 'aligncenter' ), // set a default WP image class

		) );

	if ( $image ) {
		printf( '<div class="featured-image-class">%s</div>', $image ); // wraps the featured image in a div with css class you can control
	}

}

add_action( 'genesis_after_entry', 'uos_adjacent_entry_nav' );
function uos_adjacent_entry_nav() {

  echo '<div class="alignwide">';

  genesis_markup( array(
		'html5'   => '<div %s>',
		'xhtml'   => '<div class="navigation">',
		'context' => 'adjacent-entry-pagination',
	) );

	echo '<div class="pagination-previous alignleft">';
  echo '<span class="pagination-label">Previous Article</span>';
	previous_post_link( '%link', '%title' );
	echo '</div>';
	echo '<div class="pagination-next alignright">';
  echo '<span class="pagination-label">Next Article</span>';
	next_post_link( '%link', '%title' );
	echo '</div>';
	echo '</div>';

  echo '</div>';

}

genesis();
