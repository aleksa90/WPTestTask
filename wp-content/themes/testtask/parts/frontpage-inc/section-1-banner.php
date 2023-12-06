<?php
function section_1() {
?>
<section class="d-flex align-items-center justify-content-center"

             style="background-image: url('<?php $img = get_theme_mod('banner-section-callout-image');
             echo $img ?>');
                     background-size: cover;  height: 100vh;
                     background-repeat: no-repeat;
                     position: relative;
                     background-position: center center;
                     max-height: 750px;
                     ">

        <div class="container">
            <div class="row">
                <div class="col-6">
                    <div class="section-slider-text-1">
                        <?php
                        $text = get_theme_mod('banner-section-callout-text-block1');
                        if ($text != '') {
                            echo $text;
                        } ?>
                    </div>
                    <div class="section-slider-text-2">                         <?php
                        $text = get_theme_mod('banner-section-callout-text-block2');
                        if ($text != '') {
                            echo $text;
                        } ?>
                    </div>
                    <div class="section-slider-text-3"><?php
                        $text = get_theme_mod('banner-section-callout-text-block3');
                        if ($text != '') {
                            echo $text;
                        } ?>
                    </div>
                    <a href="
                        <?php
                    $text = get_theme_mod('banner-section-callout-button-1-link');
                    if ($text != '') {
                        echo $text;
                    } ?>">
                        <button type="button" class="btn button-size button-text button-white mr-10">

                            <?php
                            $text = get_theme_mod('banner-section-callout-button-1-text');
                            if ($text != '') {
                                echo $text;
                            } ?>

                        </button>
                    </a>
                    <a href="
                        <?php
                    $text = get_theme_mod('banner-section-callout-button-2-link');
                    if ($text != '') {
                        echo $text;
                    } ?>">
                        <button type="button" class="btn button-size button-text button-outline">
                            <?php
                            $text = get_theme_mod('banner-section-callout-button-2-text');
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

