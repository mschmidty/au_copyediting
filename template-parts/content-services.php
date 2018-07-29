<?php
$args = array(
  'post_type'   => 'services',
  'post_status' => 'publish'
);
$services = new WP_Query( $args );
if( $services->have_posts() ) :
?>
<ul class="services-list grid lrg-3">
  <?php

  while( $services->have_posts() ) :
        $services->the_post(); ?>
        <li class="grid-item card card-small">
          <div class="services-card-inner">
            <h2 class="section-header"><?php the_title(); ?></h2>
            <?php the_content(); ?>
          </div>


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
