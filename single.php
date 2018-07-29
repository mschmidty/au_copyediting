<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package au_copyediting
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			$args = array(
				'prev_text'          => '<span>Previous:</span> %title',
				'next_text'          => '<span>Next:</span> %title',
				'in_same_term'       => false,
				'taxonomy'           => 'category',
				'excluded_terms'     => array(),
				'screen_reader_text' => 'Post navigation'
			);
			the_post_navigation($args);

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
