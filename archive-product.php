<?php
  get_header();

  // Get the shop page ID if WooCommerce is active, else set it to false
  $shop_page_id = class_exists('WooCommerce') ? wc_get_page_id('shop') : false;

  // Get the featured image URL of the shop page if it exists, else set it to an empty array
  $shopFeaturedImg = $shop_page_id && has_post_thumbnail($shop_page_id) ? wp_get_attachment_image_src(get_post_thumbnail_id($shop_page_id), 'full') : array();

  // Get list of categories
  $categories = get_categories(array(
    'taxonomy' => 'product_cat',
    'orderby' => 'name',
    'order' => 'ASC'
  ));

  // Get list of tags
  $tags = get_tags(array(
    'taxonomy' => 'product_tag',
    'orderby' => 'name',
    'order' => 'ASC'
  ));
?>

<section class="shop-masthead">
  <div class="mastheadDiv" style="background-image: url('<?php echo isset($shopFeaturedImg[0]) ? $shopFeaturedImg[0] : ''; ?>');">
    <h1 class="masthead-text">Shop Page!</h1>
  </div>
</section>
<section class="shop-filters">
<form id="product-filters" method="get">
<label for="pet_tag">Pet:</label>
    <select name="pet_tag" id="pet_tag">
      <option value="">All</option>
      <?php foreach ($tags as $tag) : ?>
        <option value="<?php echo $tag->slug; ?>"><?php echo $tag->name; ?></option>
      <?php endforeach; ?>
    </select>




    <label for="pet_category">Category:</label>
    <select name="pet_category" id="pet_category">
      <option value="">All</option>
      <?php foreach ($categories as $category) : ?>
        <option value="<?php echo $category->slug; ?>"><?php echo $category->name; ?></option>
      <?php endforeach; ?>
    </select>
    <button type="submit" class="filterButton">Apply Filters</button>
  </form>
</section>

<section class="shop-body">
  <?php
    // Output WooCommerce shop loop if WooCommerce is active
    echo do_action('woocommerce_before_shop_loop') . do_shortcode('[products columns="3"]') . do_action('woocommerce_after_shop_loop');
  ?>
</section>

<?php
  get_footer();
?>
