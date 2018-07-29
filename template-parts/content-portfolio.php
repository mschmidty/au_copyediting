<?php
$args = array(
  'post_type'   => 'portfolio',
  'post_status' => 'publish'
);
$portfolio = new WP_Query( $args );
if( $portfolio->have_posts() ) :
?>
<ul class="portfolio-list">
  <?php

  while( $portfolio->have_posts() ) :
        $portfolio->the_post(); ?>
        <li>
          <a href="<?php the_permalink(); ?>" class="portfolio-list-item">

            <div class="overflow-hidden">
              <div class="background-image background-image-scale" style="background:url(<?php the_field('portfolio_image'); ?>)no-repeat bottom center; background-size:cover;">
              </div>
            </div>

            <div class="list-item-text">
              <p class="section-header"><?php the_field('portfolio_organization'); ?><br> <span><?php the_field('portfolio_what'); ?></span> </p>
              <p><?php the_field('portfolio_description'); ?></p>

            </div>
          </a>
        </li>
  <?php
  endwhile;
  wp_reset_postdata();
   ?>
</ul>
<?php
else :
  esc_html_e( "There doesn't seem to be anything here!", 'text-domain' );
endif;
?>
