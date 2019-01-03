<ul class="blog-section">
  <?php
  $args = array('posts_per_page' => 5 );
  // The Query
  query_posts( $args );
  // The Loop
  while ( have_posts() ) : the_post();
   ?>
   <li class="blog-item">
      <a href=" <?php the_permalink(); ?>" >

        <h2 class="section-header"><?php the_title(); ?> <br> <span><?php the_author(); ?></span> </h2>
        <?php the_excerpt(); ?>
      </a>
  </li>

  <?php
  endwhile;

  // Reset Query
  wp_reset_query();
   ?>
</ul>
