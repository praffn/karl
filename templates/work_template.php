<?php /* Template Name: Work Template */ ?>
<?php get_header(); ?>

<?php 

  $posts_per_page = 12;

?>

<div class="work">

  <?php 
    
    // $original_query = $wp_query;
    // $wp_query = null;
    // $args = array(
    //   'category_name' => 'portfolio',
    //   'posts_per_page' => $posts_per_page,
    // );

    // $wp_query = new WP_Query($args);

  ?>

  <div class="container">
    
    <?php 
      $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
      $args = array(
        'category_name' => 'portfolio',
        'paged' => $paged,
        'posts_per_page' => $posts_per_page
      );
      query_posts($args);
    ?>

    <?php if (have_posts()): while(have_posts()): the_post(); ?>

      <?php
        $image_url = wp_get_attachment_image_src(get_post_thumbnail_id(), array(500, 500) )[0];
        $tags = get_the_tags();
          $i = 0; $len = count($tags);
      ?>
      <article class="work-article">
        <a href="<?php the_permalink(); ?>" class="work-permalink">
            <img src="<?php echo $image_url; ?>" class="work-image">
            <div class="work-meta">
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


  <div class="container">
    <div class="work-pagination">
      
      <span class="work-pagination_button left">
        <?php next_posts_link('<i class="fa fa-chevron-left"></i> Older work'); ?>
      </span>
      <span class="work-pagination_button right">
        <?php previous_posts_link('Newer work <i class="fa fa-chevron-right"></i>') ?>
      </span>

    </div>
  </div>

  <?php 

    // $wp_query = null;
    // $wp_query = $original_query;
    // wp_reset_postdata();
  ?>

</div>


<?php get_footer(); ?>
