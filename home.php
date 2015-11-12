<?php get_header(); ?>

  <section class="hero">
    <h2 class="hero-title">Lorem Ipsum Dolor Sit Amet</h2>
    <h3 class="hero-subtitle">Culpa blanditiis neque veniam, eveniet unde expedita qui</h3>
    <a href="#" class="hero-cta">Call-to-action</a>
  </section>


  <section class="recent_work">
    <h2 class="container-title">Recent Work</h2>
    <div class="container">

      <?php 

        $original_query = $wp_query;
        $wp_query = null;
        $args = array(
          'posts_per_page' => 4,
          'category_name' => 'portfolio'
        );

        $wp_query = new WP_Query($args);

      ?>

      <?php if (have_posts()): while(have_posts()): the_post(); ?>
        <article class="recent_work-article">
          <?php
            $image_url = wp_get_attachment_image_src(get_post_thumbnail_id(), array(500, 500) )[0];
          ?>

          <a href="<?php the_permalink(); ?>" class="recent_work-permalink">
            <img src="<?php echo $image_url; ?>" class="recent_work-image">
            <h2 class="recent_work-title"><span><?php the_title(); ?></span></h2>
          </a>


        </article>
      <?php endwhile; endif; ?>

      <?php 

        $wp_query = null;
        $wp_query = $original_query;
        wp_reset_postdata();

      ?>

    </div>
  </section>

<?php get_footer(); ?>
