<?php get_header(); ?>

  <div class="post">
    <div class="container">

      <div class="post-main">
        <?php if (have_posts()): while(have_posts()): the_post(); ?>

          <?php
            $thumb_id = get_post_thumbnail_id();
            $thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail-size', true)[0];
          ?>
        
         <div class="post-main-poster" style="background-image: url(<?php echo $thumb_url; ?>)">
            <h2 class="post-main-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
          </div>

          <div class="post-main-content">
            <p class="post-main-tags">
              <?php the_tags('', ', ', ''); ?>
            </p>
            <?php the_content(); ?>
          </div>

          <div class="post-main-social">
            <h3>Share</h3>
            <ul>
              <li><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>"><i class="fa fa-facebook"></i></a></li>
              <li><a target="_blank" href="https://twitter.com/home?status=<?php the_permalink(); ?>"><i class="fa fa-twitter"></i></a></li>
              <li><a target="_blank" href="https://plus.google.com/share?url=<?php the_permalink(); ?>"><i class="fa fa-google-plus"></i></a>
            </ul>
          </div>

        <?php endwhile; endif; ?>

      </div>

      <div class="post-related">
        
        <h3>Other works</h3>

        <div class="post-related-article_container">

          <?php 


            $args = array(
              'category_name' => 'portfolio',
              'posts_per_page' => 4,
              'post__not_in' => array($post->ID)
            );
            query_posts($args);
          ?>

          <?php if (have_posts()): while(have_posts()): the_post(); ?>

            <?php
              $image_url = wp_get_attachment_image_src(get_post_thumbnail_id(), array(500, 500) )[0];
              $tags = get_the_tags();
                $i = 0; $len = count($tags);
            ?>

            <article class="post-related-article">
              <a href="<?php the_permalink(); ?>" class="post-related-permalink">
                  <img src="<?php echo $image_url; ?>" class="post-related-image">
                  <div class="post-related-meta">
                    <div>
                      <h2><?php the_title(); ?></h2>
                      <p>
                        <?php if ($len > 1): foreach($tags as $tag): ?>
                          <?php
                            if ($i !== $len - 1) {
                              echo $tag->name . ', ';
                            } else {
                              echo $tag->name;
                            }
                            $i++;
                          ?>
                        <?php endforeach; endif; ?>
                      </p>
                    </div>
                  </div>
                </a>
            </article>

          <?php endwhile; endif; ?>

        </div>


      </div>

    </div>
  </div>

<?php get_footer(); ?>
