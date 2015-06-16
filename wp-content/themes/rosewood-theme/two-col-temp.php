<?php
/*
Template Name: Two Column
*/
?>

<?php while (have_posts()) : the_post(); ?>
  <div class="backdrop">
    <section class="container">
      <div class="row">
        <section class="col-md-6">
          <?php get_template_part('templates/page', 'header'); ?>
          <?php the_content(); ?>
        </section>
        <aside class="col-md-6">
          <?php if ( has_post_thumbnail() ) : ?>
            <?php the_post_thumbnail(); ?>
          <?php endif; ?>
          <?php if (roots_display_sidebar()) : ?>
            <?php include roots_sidebar_path(); ?>
          <?php endif; ?>
        </aside>
      </div>
    </section>
  </div>
<?php endwhile; ?>


