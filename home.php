<?php get_header(); ?>

  <?php 

    $theme_settings = get_option('YourTheme_theme_options');

  ?>

  <section class="hero" style="background-image: url(<?php echo $theme_settings['hero_image']; ?>);">
    <h2 class="hero-title"><?php echo $theme_settings['hero_title']; ?></h2>
    <h3 class="hero-subtitle"><?php echo $theme_settings['hero_subtitle']; ?></h3>
    <a href="<?php echo $theme_settings['hero_cta_link']; ?>" class="hero-cta"><?php echo $theme_settings['hero_cta_label']; ?></a>
  </section>


  <section class="recent_work">
    <h2 class="container-title">Expertise</h2>
    <ul class="services container">

      <li class="services_item">
        <figure class="services_icon">
          <span><i class="fa fa-calendar fa-fw"></i></span>
        </figure>
        <h4 class="services_title">Project Management</h4>
        <p class="services_description">I love being in charge and I’m not afraid of responsibility. Let’s structure our process and I’ll get the gears running smoothly.</p>
      </li>

      <li class="services_item">
        <figure class="services_icon">
          <span><i class="fa fa-paint-brush fa-fw"></i></span>
        </figure>
        <h4 class="services_title">Concept Development &amp; Design</h4>
        <p class="services_description">My head is filled with crazy ideas and my hands urge to make them real. I can think outside the box and I can execute my visions.</p>
      </li>

      <li class="services_item">
        <figure class="services_icon">
          <span><i class="fa fa-video-camera fa-fw"></i></span>
        </figure>
        <h4 class="services_title">Video Production</h4>
        <p class="services_description">I am a director, producer, writer, editor, cinematographer, audio engineer and production designer. I’m basically a full film crew in one person.</p>
      </li>

      <li class="services_item">
        <figure class="services_icon">
          <span><i class="fa fa-users fa-fw"></i></span>
        </figure>
        <h4 class="services_title">Social Media &amp; Content</h4>
        <p class="services_description">You’ll never catch me off the beat. The social medias are an extension to me and i know how to make strategies and content for them.</p>
      </li>

    </ul>

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
            $tags = get_the_tags();
              $i = 0; $len = count($tags);
          ?>
          <a href="<?php the_permalink(); ?>" class="recent_work-permalink">
            <img src="<?php echo $image_url; ?>" class="recent_work-image">
            <div class="recent_work-meta">
              <div>

                <h2><?php the_title(); ?></h2>
                <p>
                  <?php if ($len > 0 && is_array($tags)): foreach($tags as $tag): ?>
                    <?php
                      if ($i !== $len - 1) {
                        echo $tag->name . ', ';
                      } else {
                        echo $tag->name;
                      }
                      $i++;
                    ?>
                  <?php endforeach; else: ?>
                  <?php endif; ?>
                </p>
              </div>
            </div>
          </a>

        </article>
      <?php endwhile; endif; ?>

      <?php 

        $wp_query = null;
        $wp_query = $original_query;
        wp_reset_postdata();

      ?>

    </div> <!-- recent work -->

  </section>

<?php get_footer(); ?>
