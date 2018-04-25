<?php
/*
  Template Name: Portfolio Page
*/
?>

<?php get_header(); ?>

<section class="row">
  <div class="small-12 columns text-center">

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <div class="leader">
        <h1><?php the_title(); ?></h1>
        <?php the_content(); ?>
      </div>
      
    <?php endwhile; endif; ?>

  </div>
</section>

<?php get_template_part('content', 'portfolio'); ?>

<?php get_footer(); ?>