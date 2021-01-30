<?php
/**
 * Template part for displaying Lectures content
 *
 * @link  https://codex.wordpress.org/Template_Hierarchy
 *
 * @package    Reykjavik
 * @copyright  WebMan Design, Oliver Juhas
 *
 * @since    1.0.0
 * @version  1.0.0
 */


// Helper variables

	$args = ( ! isset( $helper ) ) ? ( null ) : ( array( 'helper' => $helper ) );


do_action( 'tha_entry_before', $args );

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php do_action( 'tha_entry_top', $args ); ?>
<div id="inner-bread" class="intro-bread"><div class="intro-inner" style="padding-top: 1rem;"><h5 class="entry-title h5 intro-title"><a href="#Abstract">Abstract</a> | <a href="#Video">Video</a> | <a href="#Slides">Slides</a> | <a href="#Tags">Tags</a></h5><hr style="margin: 1em 0;"></div></div>
	<div class="entry-content"><?php

		do_action( 'tha_entry_content_before', $args );
		
		if ( is_single( get_the_ID() ) ) {
			the_content( apply_filters( 'wmhook_reykjavik_summary_continue_reading', '' ) );
		} else {
			the_excerpt();
		}
		?>
		<hr />
		<h5 class="lectures_finiti">
		Gli Accessibility Days 2019 sono finiti. <br />
		Puoi guardare video e diapositive di questa Sessione qui sotto.
		</h5>
		<div class="lectures_videos" id="Video">
		<?php the_field( 'youtube_videos' ); ?>
		</div>
<br />
		<div class="lectures_slides" id="Slides">
		<?php the_field( 'lectures_slides' ); ?>
		</div>
<hr />

		<div class="lectures_tags" id="Tags">
		<?php 
		the_terms( get_the_ID(), 'lectures_tags', ' Tags: ', ', '); 
		?>
		</div>
		<hr />
		<div class="lectures_tags">
		<a href="https://accessibilitydays.it/programma/agenda/">↑ Torna al Programma della Conferenza</a>
		</div>

		<?php
		do_action( 'tha_entry_content_after', $args );

	?></div>

	<?php do_action( 'tha_entry_bottom', $args ); ?>

</article>

<?php

do_action( 'tha_entry_after', $args );
