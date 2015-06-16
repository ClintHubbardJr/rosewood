<?php
/*
Template Name: Full Width
*/
?>

<?php while (have_posts()) : the_post(); ?>
  <div class="backdrop">
    <section class="container">
      <div class="row">
        <?php get_template_part('templates/page', 'header'); ?>
        <?php the_content(); ?>
      </div>
    </section>
  </div>
<?php endwhile; ?>

