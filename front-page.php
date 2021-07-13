<?php

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();
?>
<main>
    <section class="ss-landing-section">
        <div uk-slider>
            <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1">
                <ul class="uk-slider-items uk-child-width-1-1">
                    <li>
                        <div class="ss-bg-overlay"></div>
                        <img src="wp-content/themes/sochyo-theme/img/landing-1.jpg" alt="">

                        <div class="ss-landing-info uk-panel">
                            <div class="uk-container uk-container-large">
                                <h1>Not Just a Sale It’s Much <span>Bigger !</span></h1>
                                <a class="ss-button" href="">SHOP NOW</a>
                            </div>
                        </div>

                    </li>
                    <li>
                        <div class="ss-bg-overlay"></div>
                        <img src="wp-content/themes/sochyo-theme/img/landing-2.jpg" alt="">
                        <div class="ss-landing-info uk-panel">
                            <div class="uk-container uk-container-large">
                                <h1>Not Just a Sale It’s Much <span>Bigger !</span></h1>
                                <a class="ss-button" href="">SHOP NOW</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="ss-bg-overlay"></div>
                        <img src="wp-content/themes/sochyo-theme/img/landing-3.jpg" alt="">
                        <div class="ss-landing-info uk-panel">
                            <div class="uk-container uk-container-large">
                                <h1>Not Just a Sale It’s Much <span>Bigger !</span></h1>
                                <a class="ss-button" href="">SHOP NOW</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="ss-bg-overlay"></div>
                        <img src="wp-content/themes/sochyo-theme/img/landing-4.jpg" alt="">
                        <div class="ss-landing-info uk-panel">
                            <div class="uk-container uk-container-large">
                                <h1>Not Just a Sale It’s Much <span>Bigger !</span></h1>
                                <a class="ss-button" href="">SHOP NOW</a>
                            </div>
                        </div>
                    </li>

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
                <div uk-slider>
                    <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1">
                        <ul class="uk-slider-items uk-child-width-1-1 uk-child-width-1-4@m uk-grid-small">
                            <?php
                            for ($i = 1; $i < 6; $i++) {
                            ?>
                                <li>
                                    <div class="ss-card">
                                        <img src="wp-content/themes/sochyo-theme/img/landing-<?php echo $i ?>.jpg" alt="">
                                        <div class="ss-overlay">
                                            <a href="">
                                                <h3>Gift Cards</h3>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                            <?php
                            }
                            ?>
                        </ul>

                    </div>

                    <ul class="uk-slider-nav uk-dotnav uk-flex-center"></ul>
                </div>

            </div>
        </div>
    </section>
    <!-- Popular Categories Ended -->

    <section class="ss-featured-products" id="section-padding">
        <div class="uk-container uk-container-large">
            <div class="ss-heading-title">
                <h2>Featured Products</h2>
            </div>
            <div class="ss-cards-container">
                <div class="uk-grid uk-grid-small uk-child-width-1-1 uk-child-width-1-4@m">
                    <?php
                    for ($i = 1; $i < 9; $i++) {
                    ?>
                        <div class="ss-card-contain">
                            <div class="ss-card">
                                <img src="wp-content/themes/sochyo-theme/img/landing-<?php echo $i ?>.jpg" alt="" class="ss-img-overlay">
                                <div class="ss-card-info">
                                    <div class="ss-img-holder">
                                        <img src="wp-content/themes/sochyo-theme/img/pubg.png" alt="">
                                    </div>
                                    <div class="ss-content-holder">
                                        <h5>Pubg Mobile UC (Global)</h5>
                                        <a href="">Rs. 1200</a>
                                    </div>
                                </div>
                            </div>
                            <div class="ss-button">
                                <a href="">Add to Cart</a>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>
    <!-- Featured Products Ended -->
</main>

<?php
get_footer();