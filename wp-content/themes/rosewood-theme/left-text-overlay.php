<?php
/*
Template Name: Left Text Overlay
*/
?>

<?php while (have_posts()) : the_post(); ?>

  <div class="overlay">
    <div class="backdrop">
      <?php get_template_part('templates/page', 'header'); ?>
      <?php the_content(); ?>
    </div>
  </div>

<?php endwhile; ?>

