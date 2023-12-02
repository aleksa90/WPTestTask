<?php

function section_2() {
?>
    <section class="align-items-center justify-content-center">
        <div class="container text-center">
            <div class="row align-items-center ">
                <div class="row-cols-md-1 col-lg-6 mb-30">
                    <img class="w-100" src="<?php $img = get_theme_mod('jewellery-store-section-callout-image');
                    echo $img ?>" alt="">
                </div>
                <div class="row-cols-md-1 col-lg-6">
                    <div class="section-jewellery-store-text-1">
                        <?php
                        $text = get_theme_mod('jewellery-store-section-callout-text-block1');
                        if ($text != '') {
                            echo $text;
                        } ?>
                    </div>
                    <div class="section-jewellery-store-text-2">
                        <?php
                        $text = get_theme_mod('jewellery-store-section-callout-text-block2');
                        if ($text != '') {
                            echo $text;
                        } ?>
                    </div>
                    <div class="section-jewellery-store-text-3">   <?php
                        $text = get_theme_mod('jewellery-store-section-callout-text-block3');
                        if ($text != '') {
                            echo $text;
                        } ?>
                    </div>
                    <div class="section-jewellery-store-text-4">
                        <?php
                        $text = get_theme_mod('jewellery-store-section-callout-text-block4');
                        if ($text != '') {
                            echo $text;
                        } ?>
                    </div>
                    <a href="
                        <?php
                    $text = get_theme_mod('jewellery-store-section-callout-button-1-link');
                    if ($text != '') {
                        echo $text;
                    } ?>">
                        <button type="button"
                                class="btn button-size button-text button-black">
                            <?php
                            $text = get_theme_mod('jewellery-store-section-callout-button-1-text');
                            if ($text != '') {
                                echo $text;
                            } ?>
                        </button>
                    </a>
                    <a href="
                        <?php
                    $text = get_theme_mod('jewellery-store-section-callout-button-2-link');
                    if ($text != '') {
                        echo $text;
                    } ?>">
                        <button type="button" class="btn button-size button-text button-black-outline">
                            <?php
                            $text = get_theme_mod('jewellery-store-section-callout-button-2-text');
                            if ($text != '') {
                                echo $text;
                            } ?>
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </section>
<?php } ?>