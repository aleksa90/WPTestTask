<?php

function section_6()
{ ?>


    <section class="align-items-center justify-content-center section-6">
        <div class="container text-center">
            <div class="row mb-30">
                <div class="col-lg-6 col-sm-12">
                    <div class="w-100"
                         style="background-image: url('<?php $img = get_theme_mod('ad-featured-new-products-section-callout-image1');
                         echo $img ?>');  height: 100%;
                                 background-repeat: no-repeat;
                                 position: relative;">
                        <div class="ad-featured-new-products-section-image">
                            <div class="ad-featured-new-products-section-image-text-1 mb-10">
                                <?php
                                $text = get_theme_mod('ad-featured-new-products-section-callout-text-block1');
                                if ($text != '') {
                                    echo $text;
                                } ?>
                            </div>
                            <div class="ad-featured-new-products-section-image-text-2 mb-10">
                                <?php
                                $text = get_theme_mod('ad-featured-new-products-section-callout-text-block2');
                                if ($text != '') {
                                    echo $text;
                                } ?>
                            </div>
                            <div class="ad-featured-new-products-section-image-text-3">
                                <?php
                                $text = get_theme_mod('ad-featured-new-products-section-callout-text-block3');
                                if ($text != '') {
                                    echo $text;
                                } ?>
                            </div>
                            <a href="
                        <?php
                            $text = get_theme_mod('ad-featured-new-products-section-callout-button-1-link');
                            if ($text != '') {
                                echo $text;
                            } ?>">
                                <button type="button"
                                        class="btn button-size button-text button-black">
                                    <?php
                                    $text = get_theme_mod('ad-featured-new-products-section-callout-button-1-text');
                                    if ($text != '') {
                                        echo $text;
                                    } ?>
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="row">
                        <div class="col-lg-6 col-sm-6">
                            <div class="header-featured-new-products mb-20">FEATURED PRODUCTS</div>
                            <?php prod_list('name','featured','popularity','ASC'); ?>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="header-featured-new-products mb-20">NEW PRODUCTS</div>
                           <?php prod_list(' ',' ','date','DESC'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php } ?>
