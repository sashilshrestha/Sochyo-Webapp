<?php

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();
?>
<main>
    <section class="ss-landing-section">
        <div uk-slider>
            <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1">
                <ul class="uk-slider-items uk-child-width-1-1 uk-grid">
                    <?php
                    for ($i = 1; $i < 2; $i++) {
                    ?>
                        <li>
                            <div class="ss-bg-overlay"></div>
                            <img src="wp-content/themes/sochyo-theme/img/landing-<?php echo $i; ?>.jpg" alt="">
                            <div class="ss-landing-info uk-panel">
                                <div class="uk-container uk-container-large">
                                    <h1>Not Just a Sale It’s Much <span>Bigger !</span></h1>
                                    <a class="ss-button" href="">SHOP NOW</a>
                                </div>
                            </div>
                        </li>
                    <?php
                    }
                    ?>
                </ul>
                <a class="" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                <a class="" href="#" uk-slidenav-next uk-slider-item="next"></a>
            </div>
            <ul class="uk-slider-nav uk-dotnav uk-flex-center"></ul>
        </div>

    </section>
    <!-- Landing Section Ended -->

    <section class="ss-popular-categories" id="section-padding">
        <div class="uk-container uk-container-large">
            <div class="ss-heading-title">
                <h2>Popular Products</h2>
            </div>
            <div class="ss-cards-container">
                <div uk-slider="finite: true; autoplay: true; autoplay-interval: 1000; pause-on-hover: true">
                    <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1">
                        <?php
                        $taxonomy = 'product_cat';
                        $terms = get_terms($taxonomy); // Get all terms of a taxonomy
                        if ($terms && !is_wp_error($terms)) :
                        ?>
                            <ul class="uk-slider-items uk-child-width-1-1 uk-child-width-1-4@m uk-child-width-1-2@s uk-grid-small" uk-scrollspy="cls: uk-animation-fade; delay: 400; repeat: false; target: li;">
                                <?php foreach ($terms as $term) {
                                    $term_cat_id = $term->term_id;
                                    $thumbnail_id = get_woocommerce_term_meta($term_cat_id, 'thumbnail_id', true);
                                    $image_url = wp_get_attachment_url($thumbnail_id);
                                ?>
                                    <li>
                                        <div class="ss-card">
                                            <img src="<?php echo $image_url; ?>" alt="">
                                            <div class="ss-overlay">
                                                <a href="<?php echo get_term_link($term->slug, $taxonomy); ?>">
                                                    <h3><?php echo $term->name; ?></h3>
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                <?php } ?>
                            </ul>
                        <?php endif; ?>

                    </div>

                    <ul class="uk-slider-nav uk-dotnav uk-flex-center"></ul>
                </div>
                <?php

                ?>
            </div>
        </div>
    </section>
    <!-- Popular Categories Ended -->

    <section class="ss-featured-products" id="section-padding-bottom">
        <div class="uk-container uk-container-large">
            <div class="ss-heading-title">
                <h2>Featured Products</h2>
            </div>
            <div class="ss-cards-container">
                <div class="uk-grid uk-grid-small uk-child-width-1-1 uk-child-width-1-4@m uk-child-width-1-2@s" uk-scrollspy="cls: uk-animation-slide-top-small; delay: 400; repeat: false; target: .ss-card-contain;">
                    <?php
                    $args = array(
                        'post_type' => 'product',
                        'orderby' => 'date',
                        'post_per_page' => 2
                    );
                    $loop = new WP_Query($args);
                    while ($loop->have_posts()) : $loop->the_post();
                        $thumb_id = get_post_thumbnail_id();
                        $thumb_url = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
                        global $post;
                        $product = new WC_Product($post->ID);
                        $regularprice = $product->get_price_html();

                        // $product_category = wp_get_post_terms($post->ID, 'product_cat');
                        // foreach ($product_category as $cat) :
                        //     echo $cat->name;
                        // endforeach;
                    ?>
                        <div class="ss-card-contain">
                            <div class="ss-card">
                                <img src="<?php echo $thumb_url[0] ?>" alt="" class="ss-img-overlay">
                                <div class="ss-card-info">
                                    <div class="ss-img-holder">
                                        <img src="<?php echo $thumb_url[0] ?>" alt="">
                                    </div>
                                    <div class="ss-content-holder">
                                        <a href="<?php the_permalink(); ?>">
                                            <h5><?php the_title(); ?></h5>
                                        </a>
                                        <a href="" class="ss-product-price"><?php echo $regularprice; ?></a>
                                    </div>
                                </div>
                            </div>
                            <div class="ss-button">
                                <a href="?add-to-cart=<?php echo $post->ID; ?>">Add to Cart</a>
                            </div>
                        </div>
                    <?php
                    endwhile;
                    wp_reset_query();
                    ?>
                </div>
            </div>
        </div>
    </section>
    <!-- Featured Products Ended -->
</main>

<?php
get_footer();
