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
<div id="primary single single-portfolio" class="content-area">
  <main id="main" class="site-main">
  <?php
  while ( have_posts() ) :
    the_post();
    ?>
    <header class="entry-header">
      <p class="tag-id">Portfolio</p>
      <h1 class="entry-title"><?php the_field('portfolio_organization'); ?> </h1>
      <p class="tag-line"><?php the_field('portfolio_what'); ?></p>
    </header>
    <div class="portfolio-list-item">

      <div class="overflow-hidden">
        <div class="background-image" style="background:url(<?php the_field('portfolio_image'); ?>)no-repeat bottom center; background-size:cover;">
        </div>
      </div>

      <div class="list-item-text">
        <p><?php the_field('portfolio_description'); ?></p>

      </div>
    </div>
    <div class="entry-content card card-large">
      <?php the_content(); ?>
    </div>
    <?php
  endwhile; // End of the loop.
  ?>

  </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
