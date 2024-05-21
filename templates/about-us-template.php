<?php
/**
 * Template Name: About us
 * Template Post Type: page
 */
get_header();

// Get the post ID of the current page
$page_id = get_the_ID();

// Get the featured image URL of the about us page
$featured_image_url = get_the_post_thumbnail_url($page_id, 'full');
?>
<section class="hero" style="background-image: url('<?php echo $featured_image_url; ?>');">
  <div class="hero-content">
    <h1>About FitFlex</h1>
    <p>At FitFlex, we're passionate about fitness and helping people lead healthier, happier lives. Founded with a vision to inspire and empower individuals to achieve their fitness goals, we strive to provide top-quality products, expert advice, and unparalleled customer service to support you on your fitness journey.</p>
  </div>
</section>


<section class="about-us">
  <div class="container">
    <h2>Our Mission</h2>
    <p>Our mission at FitFlex is simple: to make fitness accessible, enjoyable, and rewarding for everyone. Whether you're a beginner looking to start your fitness journey or a seasoned athlete striving for new personal bests, we're here to help you succeed. We believe that fitness is not just about physical strength, but also mental resilience, emotional well-being, and overall vitality.</p>
  </div>
</section>

<section class="about-us2">
  <div class="container">
    <h2>What Sets Us Apart</h2>
    <p>At FitFlex, we understand that no two fitness journeys are alike. That's why we offer a diverse range of products and resources to meet your unique needs and preferences. From high-performance workout apparel and gear to nutritional supplements and recovery aids, we're committed to providing you with the tools and support you need to achieve your goals and live your best life.</p>
  </div>
</section>

<?php get_footer(); ?>
