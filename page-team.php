<?php
/**
 * Team Page Template
 *
 * Template Name: Team
 *
 * @package      UOStheme
 * @author       P&P Creative
 * @since        1.0.0
**/

add_filter( 'body_class', 'uos_team_body_class' );
/**
 * Adds team page body class.
 *
 * @since 1.0.0
 *
 * @param array $classes Original body classes.
 * @return array Modified body classes.
 */
function uos_team_body_class( $classes ) {

	$classes[] = 'team-page';
	return $classes;

}

// Adds team members to entry content
add_action( 'genesis_entry_content', 'uos_add_team_members' );
function uos_add_team_members() {

	$args = array(
		'post_type'	=> 'team_member',
		'posts_per_page'	=> -1,
		'orderby'	=> 'menu_order',
	);

	$team_query = new WP_Query( $args );

	if( $team_query->have_posts() ) :
		?>
		<div class="team-members alignwide">
			<?php
			while( $team_query->have_posts() ) : $team_query->the_post();
				$name = get_the_title();
				$photo = get_the_post_thumbnail( get_the_id(), 'medium-square' );
				$role = get_field( 'role' );
				$bio = apply_filters( 'the_content', get_the_content() );
				?>
				<div class="team-member">

					<div class="details <?php if( $bio ) echo 'has-bio'; ?>">
						<?php if( $photo ) echo '<div class="photo">' . $photo . '</div>'; ?>
						<?php if( $name ) echo '<h3 class="name">' . $name . '</h2>'; ?>
						<?php if( $role ) echo '<h4 class="role">' . $role . '</h3>'; ?>
						<?php if( $bio ) echo '<div class="bio">' . $bio . '</div>'; ?>
					</div>

				</div>
				<?php
			endwhile;
			?>
		</div>
		<?php
	endif;

	wp_reset_postdata();

}

// Runs the Genesis loop.
genesis();
