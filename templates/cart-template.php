<?php
/**
 * Template Name: Cart
 * Template Post Type: page
 */
get_header();
?>
<main class="cartMain">
<section class="container">
        <?php
        // Display WooCommerce cart content
        echo do_shortcode('[woocommerce_cart]');
        ?>
    </section>
</main>
    <?php
get_footer();
    ?>
