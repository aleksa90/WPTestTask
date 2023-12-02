<?php
function section_5()
{ ?>
    <section class="align-items-center justify-content-center">
        <div class="container">
            <div class="row">
                <div class="row-cols-sm-1 col-lg-6 mb-30">
                    <div class="section-discount-text-1">
                        <?php
                        $text = get_theme_mod('discount-section-callout-text-block1');
                        if ($text != '') {
                            echo $text;
                            echo '&nbsp';
                        } ?>
                        <div class="section-discount-text-1-gold">
                            <?php
                            $text = get_theme_mod('discount-section-callout-text-block2');
                            if ($text != '') {
                                echo $text;
                            } ?>
                        </div>
                    </div>
                    <div class="section-discount-text-2">
                        <?php
                        $text = get_theme_mod('discount-section-callout-text-block3');
                        if ($text != '') {
                            echo $text;
                        } ?>
                    </div>
                    <div class="section-discount-text-3">   <?php
                        $text = get_theme_mod('discount-section-callout-text-block4');
                        if ($text != '') {
                            echo $text;
                        } ?>
                    </div>

                    <div>
                        <ul class="section-discount-list">
                            <li>
                                <?php
                                $text = get_theme_mod('discount-section-callout-list-item1');
                                if ($text != '') {
                                    echo $text;
                                } ?>
                            </li>
                            <li>
                                <?php
                                $text = get_theme_mod('discount-section-callout-list-item2');
                                if ($text != '') {
                                    echo $text;
                                } ?>
                            </li>
                            <li>
                                <?php
                                $text = get_theme_mod('discount-section-callout-list-item3');
                                if ($text != '') {
                                    echo $text;
                                } ?>
                            </li>
                            <li>
                                <?php
                                $text = get_theme_mod('discount-section-callout-list-item4');
                                if ($text != '') {
                                    echo $text;
                                } ?>
                            </li>
                        </ul>
                    </div>

                    <a href="
                        <?php
                    $text = get_theme_mod('discount-section-callout-button-1-link');
                    if ($text != '') {
                        echo $text;
                    } ?>">
                        <button type="button"
                                class="btn button-size button-text button-black">
                            <?php
                            $text = get_theme_mod('discount-section-callout-button-1-text');
                            if ($text != '') {
                                echo $text;
                            } ?>
                        </button>
                    </a>
                    <a href="
                        <?php
                    $text = get_theme_mod('discount-section-callout-button-2-link');
                    if ($text != '') {
                        echo $text;
                    } ?>">
                        <button type="button" class="btn button-size button-text button-black-outline">
                            <?php
                            $text = get_theme_mod('discount-section-callout-button-2-text');
                            if ($text != '') {
                                echo $text;
                            } ?>
                        </button>
                    </a>
                </div>
                <div class="row-cols-sm-1 col-lg-6">
                    <img class="w-100" src="<?php $img = get_theme_mod('discount-section-callout-image');
                    echo $img ?>" alt="">
                </div>
            </div>
        </div>
    </section>
<?php } ?>
