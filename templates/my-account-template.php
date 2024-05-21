<?php
/**
 * Template Name: My Account
 * Template Post Type: page
 */
get_header();

// Get the post ID of the current page
$page_id = get_the_ID();

// Get the featured image URL of the page
$featured_image_url = get_the_post_thumbnail_url($page_id, 'full');
?>
<section class="shop-masthead" style="background-image: url('<?php echo $featured_image_url; ?>');">
  <div class="mastheadDiv">
    <h1 class="masthead-text">Account Page!</h1>
  </div>
</section>
<main class="accountMain">
<section class="accountContainer">
        <?php
        // Display WooCommerce account content
        echo do_shortcode('[woocommerce_my_account]');
        ?>
    </section>
</main>
<?php
get_footer();
?>
