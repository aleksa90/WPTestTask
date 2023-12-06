<?php

function section_3()
{ ?>

    <section class="align-items-center justify-content-center">
        <div class="container text-center">
            <div class="row align-items-center mb-50">
                <div class="col-12">
                    <div class="section-featured-products-text-1 mb-10">
                        <?php
                        $text = get_theme_mod('featured-products-section-callout-text-block1');
                        if ($text != '') {
                            echo $text;
                        } ?>
                    </div>
                    <div class="section-featured-products-text-2 mb-10">
                        <?php
                        $text = get_theme_mod('featured-products-section-callout-text-block2');
                        if ($text != '') {
                            echo $text;
                        } ?>
                    </div>
                    <div class="section-featured-products-text-3">
                        <?php
                        $text = get_theme_mod('featured-products-section-callout-text-block3');
                        if ($text != '') {
                            echo $text;
                        } ?>
                    </div>
                </div>
            </div>

            <div class="row align-items-center mb-30">
                <div class="col-lg-3 col-sm-6">
                    <div class="hover-image zoom-in w-100"
                         style="background-image: url('<?php $img = get_theme_mod('featured-products-section-callout-image1');
                         echo $img ?>');">
                        <div>
                            <div class="hover-image-text-1 w-75 mb-10">
                                <?php
                                $text = get_theme_mod('featured-products-section-callout-text-on-image-1');
                                if ($text != '') {
                                    echo $text;
                                } ?>
                            </div>
                            <div class="hover-image-text-2 mb-20">
                                <?php
                                $text = get_theme_mod('featured-products-section-callout-text-on-image-2');
                                if ($text != '') {
                                    echo $text;
                                } ?>
                            </div>
                            <div class="hover-image-text-3">
                                <?php
                                $text = get_theme_mod('featured-products-section-callout-text-on-image-3');
                                if ($text != '') {
                                    echo $text;
                                } ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-sm-6">
                    <div class="owl-carousel owl-theme">
                        <?php
                        $slug = get_theme_mod('featured-products-section-callout-category-slug-1');
                        $qty = get_theme_mod('featured-products-section-callout-category-quantity-1');

                        if ($slug != '' && $qty != '') {
                            prod_carousel($slug, $qty);
                        }
                        ?>
                    </div>
                </div>
            </div>

            <div class="row align-items-center">
                <div class="col-lg-3 col-sm-6">
                    <div class="hover-image zoom-in w-100"
                         style="background-image: url('<?php $img = get_theme_mod('featured-products-section-callout-image2');
                         echo $img ?>');">
                        <div>
                            <div class="hover-image-text-1-dark  w-75 mb-10">
                                <?php
                                $text = get_theme_mod('featured-products-section-callout-text-on-image-1-row-2');
                                if ($text != '') {
                                    echo $text;
                                } ?>
                            </div>
                            <div class="hover-image-text-2-dark mb-20">
                                <?php
                                $text = get_theme_mod('featured-products-section-callout-text-on-image-2-row-2');
                                if ($text != '') {
                                    echo $text;
                                } ?>
                            </div>
                            <div class="hover-image-text-3-dark">
                                <?php
                                $text = get_theme_mod('featured-products-section-callout-text-on-image-3-row-2');
                                if ($text != '') {
                                    echo $text;
                                } ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-sm-6">
                    <div class="owl-carousel owl-theme">
                        <?php
                        $slug = get_theme_mod('featured-products-section-callout-category-slug-2');
                        $qty = get_theme_mod('featured-products-section-callout-category-quantity-2');

                        if ($slug != '' && $qty != '') {
                            prod_carousel($slug, $qty);
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php } ?>