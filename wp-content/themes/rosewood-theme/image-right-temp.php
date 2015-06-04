<?php
/*
Template Name: Image Right Temp
*/
?>

<?php while (have_posts()) : the_post(); ?>
  <section class="container">
    <div class="row">
      <section class="col-md-8">
        <?php get_template_part('templates/page', 'header'); ?>
        <?php the_content(); ?>
      </section>
      <aside class="col-md-4">
        <?php if ( has_post_thumbnail() ) : ?>
          <?php the_post_thumbnail(); ?>
        <?php endif; ?>
      </aside>
    </div>
  </section>
<?php endwhile; ?>

