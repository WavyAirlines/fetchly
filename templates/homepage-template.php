<?php
/**
 * Template Name: Custom Homepage
 * Template Post Type: page
 */
get_header();

// Get the post ID of the current page
$page_id = get_the_ID();

// Get the featured image URL of the homepage
$featured_image_url = get_the_post_thumbnail_url($page_id, 'full');
?>
<section class="hero-section">
  <div class="hero">
    <div class="hero-content">
      <h1>Welcome to Fetchly</h1>
      <p>At FetchFinds, we offer a wide range of high-quality dog accessories to keep your furry friend happy and stylish. From collars and leashes to toys and grooming supplies, we've got everything you need to pamper your pup.</p>
      <a href="<?php echo get_permalink(wc_get_page_id('shop')); ?>" class="btn">Shop Now</a>
    </div>
  </div>
  <div class="hero-image" style="background-image: url('<?php echo $featured_image_url; ?>');"></div>
</section>


<section class="about-us">
  <img src="<?php echo esc_url( home_url( 'wp-content/uploads/2024/05/husky-photo.png' ) ); ?>" alt="potential" class="potential">
  <div class="about-text">
    <h1>Discover Your Potential</h1>
    <br>
    <p>Explore our wide range of high-quality fitness products, from performance-enhancing apparel and gear to premium supplements and accessories. With our carefully curated selection of top brands and innovative products, you'll find everything you need to elevate your workouts and maximize your results.</p>
</div>
</section>

<section class="about-us2">
  <div class="about-text">
    <h1>Discover Quality Products</h1>
    <br>
    <p>Browse through our curated collection of premium fitness gear, handpicked to enhance your performance and support your active lifestyle. From high-performance activewear to top-of-the-line equipment, we've sourced the best products from leading brands to ensure you get nothing but the best.</p>
</div>
<img src="<?php echo esc_url( home_url( 'wp-content/uploads/2024/05/bulldog-photo.png' ) ); ?>" alt="potential" class="potential">
</section>

<section class="featured-products">
  <div class="container">
    <h2>Featured Products</h2>
    <div class="row">
      <?php
      // Get featured products
      $args = array(
        'post_type' => 'product',
        'posts_per_page' => 3, 
        'tax_query' => array(
          array(
            'taxonomy' => 'product_tag',
            'field'    => 'slug',
            'terms'    => 'featured',
          ),
        ),
      );

      $featured_products = new WP_Query($args);

      if ($featured_products->have_posts()) :
        while ($featured_products->have_posts()) :
          $featured_products->the_post();
      ?>
          <div class="col-md-4">
            <div class="product">
              <?php the_post_thumbnail('thumbnail'); ?>
              <h3><?php the_title(); ?></h3>
              <p><?php the_excerpt(); ?></p>
              <a href="<?php the_permalink(); ?>" class="btn btn-primary">View Product</a>
            </div>
          </div>
      <?php
        endwhile;
        wp_reset_postdata();
      else :
        echo 'No products found';
      endif;
      ?>
    </div>
  </div>
</section>


<?php get_footer(); ?>

