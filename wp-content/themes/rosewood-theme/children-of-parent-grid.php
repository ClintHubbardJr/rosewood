<?php
/*
Template Name: Children of Parent Grid
*/
?>
<section class="photo-grid">
  <?php $child_pages = $wpdb->get_results("SELECT *    FROM $wpdb->posts WHERE post_parent = ".$post->ID."    AND post_type = 'page' ORDER BY menu_order", 'OBJECT'); ?>
    <?php if ( $child_pages ) : foreach ( $child_pages as $pageChild ) : setup_postdata( $pageChild ); ?>
      <?php if (has_post_thumbnail( $pageChild->ID ) ):
        $image = wp_get_attachment_image_src( get_post_thumbnail_id($pageChild->ID), 'large');
        $image = $image[0];
      endif; ?>
    <div class="third" style="background-image: url('<?php echo $image; ?>')">
      <a href="<?php echo get_permalink($pageChild->ID); ?>" rel="bookmark" title="<?php echo $pageChild->post_title; ?>">
        <p class="h1"><?php echo $pageChild->post_title; ?></p>
      </a>
    </div>
  <?php endforeach; endif; ?>
</section>
