<?php
/**
 * Template Name: Checkout
 * Template Post Type: page
 */
get_header();
?>

<main class="checkoutMain">
<section class="container">
        <?php
        // Display WooCommerce cart content
        echo do_shortcode('[woocommerce_checkout]');
        ?>
    </section>
</main>
    <?php
get_footer();
    ?>
