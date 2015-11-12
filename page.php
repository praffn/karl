<?php get_header(); ?>

  <?php if (have_posts()): while(have_posts()): the_post(); ?>

    <?php
      $thumb_id = get_post_thumbnail_id();
      $thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail-size', true)[0];
    ?>

    <div class="page">
      <div class="page-hero" style="background-image: url(<?php echo $thumb_url; ?>);">
        <div class="container">
          <h2 class="page-hero-title"><?php the_title(); ?></h2>
        </div>
      </div>

      <div class="container">
        <div class="page-content">
          <?php the_content(); ?>
        </div>
      </div>


    </div>

  <?php endwhile; endif; ?>

<?php get_footer(); ?>
