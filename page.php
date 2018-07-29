<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package au_copyediting
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="entry-header">
					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
					<?php
					$pageTagLine = get_field('page_tag_line');
					if($pageTagLine){
						echo  '<p class="tag-line">' . $pageTagLine . '</p>' ;
					}
					?>
				</header><!-- .entry-header -->

		<?php
			global $post;
			if('portfolio'==$post->post_name){
				get_template_part('template-parts/content', 'portfolio');
			}elseif('services'== $post->post_name){
				get_template_part('template-parts/content', 'services');
			}elseif('testimonial'== $post->post_name){
				get_template_part('template-parts/content', 'testimonials');
			}elseif('blog'==$post->post_name){
				get_template_part('template-parts/content', 'blog');
			}else{
				while ( have_posts() ) :
					the_post();
					get_template_part( 'template-parts/content', 'page' );

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				endwhile; // End of the loop.
			}





		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
