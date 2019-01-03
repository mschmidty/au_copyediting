<?php
  /* Template Name: Custom Home */

  get_header();
?>
<div id="primary" class="content-area">
  <main id="main" class="site-main">


    <div class="banner home-background-image">
      <img src="<?php echo get_template_directory_uri() . '/images/typewriter.jpg'; ?>" alt="">
      <div class="hire-me">
        <p >You could say some stuff up here! You could say a lot up here! And it would look sick on a wood background!</p>
        <button type="button" name="button" class="button">Hire Me!</button>
      </div>
    </div>

    <div class="home-section testimonials ">
      <div class="testemonial-wrap grid lrg-3">


        <?php
        $args = array( 'post_type' => 'testimonial', 'posts_per_page' => 3 );
        $loop = new WP_Query( $args );
        while ( $loop->have_posts() ) : $loop->the_post();
        ?>

        <a href="/index.php?page_id=54" class="list-item grid-item">
          <span class="tag-id">Testimonial</span>
          <div>
            <p>"<?php the_field('testimonial_excerpt'); ?>"</p>
            <p class="section-header">-<?php the_field('testimonial_provider'); ?><br><span><?php the_field("testimonial_provider_title"); ?> <br> <?php the_field('testimonial_organization'); ?></span></p>
          </div>
          <?php
          $image = get_field('testimonial_image');
          if( !empty($image) ): ?>
            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
          <?php endif; ?>
        </a>


        <?php endwhile; wp_reset_query(); ?>
      </div>
    </div>


    <section class="work-section home-section background2">
      <?php
      $args = array( 'post_type' => 'portfolio', 'posts_per_page' => 2 );
      $loop = new WP_Query( $args );
      while ( $loop->have_posts() ) : $loop->the_post();
      ?>

      <a href="<?php the_permalink(); ?>" class="list-item">
        <span class="tag-id">Work</span>
        <div class="overflow-hidden">
          <div class="background-image background-image-scale" style="background:url(<?php the_field('portfolio_image'); ?>)no-repeat bottom center; background-size:cover;">


          </div>
        </div>

        <div class="list-item-text">
          <p class="section-header"><?php the_field('portfolio_organization'); ?><br> <span><?php the_field('portfolio_what'); ?></span> </p>
          <p><?php the_field('portfolio_description'); ?></p>

        </div>
      </a>

      <?php endwhile; wp_reset_query(); ?>

    </section>


    <section class="services-section home-section background1">

      <div class="services-home">

        <svg  viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" version="1.1">
		        <use xlink:href="#scroll"></use>
		    </svg>
        <p>
        <?php
          $post_id = 58;
          $queried_post = get_post($post_id);
          echo $queried_post->post_content;
         ?>
         </p>
      </div>

    </section>


    <section class="blog-section home-section background2">
      <header class="entry-header">
        <h1 class="entry-title">Blog</h1>
      </header>
      <?php
      $args = array('posts_per_page' => 5 );
      // The Query
      query_posts( $args );

      // The Loop
      while ( have_posts() ) : the_post();
       ?>
       <li class="blog-item">
      <a href=" <?php the_permalink(); ?>">
        <h2 class="section-header"><?php the_title(); ?> <br> <span><?php the_author(); ?></span> </h2>
        <?php the_excerpt(); ?>
      </a>
      </li>

      <?php
      endwhile;

      // Reset Query
      wp_reset_query();
       ?>
    </section>

  </main><!-- #main -->
</div><!-- #primary -->
<?php
get_footer();
 ?>
