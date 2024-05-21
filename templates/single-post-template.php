<?php
/**
 * Template Name: Single Post Template
 * Template Post Type: post, food
 */
get_header();
$featuredImg = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
?>
<section class="post-masthead" style="background: url('<?php echo $featuredImg[0]; ?>');">
  <div>
    <h1><?php the_title(); ?></h1>
  </div>
</section>
<section class="row single-post-row-one">
  <!-- this will display our single post content -->
  <div class="col-sm-12 col-md-8 col-lg-8 post-content">
    <?php echo get_the_content(); ?>
    <p><?php echo get_the_date(); ?></p>
    <p><?php the_tags(); ?></p>
    <p><?php echo the_category(',', '', get_the_ID()); ?></p>
  </div>
  <!-- this will display our other posts -->
  <aside class="post-list col-sm-12 col-md-4 col-lg-4 row related-posts">
    <?php
    // Define our WP Query Parameters
    $the_query = new WP_Query( 'posts_per_page=3' );
    // Start our WP Query
    while ($the_query -> have_posts()) : $the_query -> the_post();
      ?>
      <article class="col-sm-12 col-md-12 col-lg-12">
        <a href="<?php the_permalink(); ?>">
          <img src="<?php echo $featuredImg[0]; ?>" alt="post featured image">
        </a>
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        <?php the_excerpt(); ?>
      </article>
    <?php
    endwhile;
    wp_reset_postdata();
    ?>
  </aside>
</section>
<?php
get_footer();
?>
