<?php
/**
 * The template for the Lectures Pages
Template Name: Lectures Template
Template Post Type: lectures
*/

get_header();

	while ( have_posts() ) : the_post();

		get_template_part( 'templates/parts/content/content-lectures', 'page' );

		// If comments are open or we have at least one comment, load up the comment template.
		if ( comments_open() || get_comments_number() ) {
			comments_template();
		}

	endwhile;

get_footer();
