<?php get_header(); ?>

<section class="row">
  <div class="small-12 columns text-center">

    <!-- https://codex.wordpress.org/The_Loop -->
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <div class="leader">
        <h1><?php the_title(); ?></h1>
        <p><?php the_content(); ?></p>        
      </div>
      
    <?php endwhile; else : ?>
      <!-- the _e allows you to work with language files -->
      <p><?php _e( 'Sorry, no pages found.' ); ?></p>
    <?php endif; ?>

  </div>
</section>

<?php get_footer(); ?>