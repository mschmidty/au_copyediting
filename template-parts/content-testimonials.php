<?php
$args = array(
  'post_type'   => 'testimonial',
  'post_status' => 'publish'
);
$testimonials = new WP_Query( $args );
if( $testimonials->have_posts() ) :
?>
<ul class="deep-shadow-list grid lrg-3">
  <?php

  while( $testimonials->have_posts() ) :
        $testimonials->the_post(); ?>
        <li>
          <div class="text-wrap">
            <p><?php the_field('testimonial'); ?></p>
            <p class="section-header">-<?php the_field('testimonial_provider'); ?><br><span><?php the_field("testimonial_provider_title"); ?> <br> <?php the_field('testimonial_organization'); ?></span></p>
          </div>
          <div class="image-wrap">
            <?php
            $image = get_field('testimonial_image');
            if( !empty($image) ): ?>
              <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
            <?php endif; ?>
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
