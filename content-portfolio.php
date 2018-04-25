<?php

$args = array(
  'post_type' => 'myportfolio'
);
$query = new WP_Query( $args );

?>

<section class="row no-max pad">
  <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
    <div class="small-6 medium-4 large-3 columns grid-item">
      <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('large'); ?></a>
    </div>
  <!-- wp_reset_post_data is necessary if there are multiple loops in the page -->
  <?php endwhile; endif; wp_reset_post_data(); ?>
</section>