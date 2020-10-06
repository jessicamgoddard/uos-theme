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

add_action( 'genesis_entry_header', 'uos_team_member_role' );
function uos_team_member_role() {

	if( !is_singular( 'team_member' ) ) return;

	if( get_field( 'role' ) ) :
		echo '<p class="entry-role">' . get_field( 'role' ) . '</p>';
	endif;

}

add_action( 'genesis_after_entry', 'uos_printfriendly' );
function uos_printfriendly() {

	if( !is_singular( 'post' ) ) return;

	if( function_exists( 'pf_show_link' ) ):
		echo pf_show_link();
	endif;
}

add_action( 'genesis_after_entry', 'uos_adjacent_entry_nav' );
function uos_adjacent_entry_nav() {

	if( !is_singular( 'post' ) ) return;

  echo '<div class="alignwide">';

  genesis_markup( array(
		'html5'   => '<div %s>',
		'xhtml'   => '<div class="navigation">',
		'context' => 'adjacent-entry-pagination',
	) );

	if( get_previous_post_link() ) :
		echo '<div class="pagination-previous alignleft">';
	  echo '<span class="pagination-label">Previous Article</span>';
		previous_post_link( '%link', '%title' );
		echo '</div>';
	endif;

	if( get_next_post_link() ) :
		echo '<div class="pagination-next alignright">';
	  echo '<span class="pagination-label">Next Article</span>';
		next_post_link( '%link', '%title' );
		echo '</div>';
		echo '</div>';
	endif;

  echo '</div>';

}

genesis();
