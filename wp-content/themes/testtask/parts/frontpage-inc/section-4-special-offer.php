<?php
function section_4()
{ ?>
    <section class="align-items-center justify-content-center">
        <div class="container">
            <div class="row align-items-center">
                <div class="row-cols-sm-1 col-lg-6 mb-30">
                    <iframe width="100%" height="360"
                            src="  <?php
                            $text = get_theme_mod('special-offer-section-callout-video-link');
                            if ($text != '') {
                                echo $text;
                            } ?>&amp;controls=0"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                </div>
                <div class="row-cols-sm-1 col-lg-6">
                    <div class="section-special-offer-text-1 mb-10">
                        <?php
                        $text = get_theme_mod('special-offer-section-callout-text-block1');
                        if ($text != '') {
                            echo $text;
                        } ?>
                    </div>
                    <div class="section-special-offer-text-2 mb-10">
                        <?php
                        $text = get_theme_mod('special-offer-section-callout-text-block2');
                        if ($text != '') {
                            echo $text;
                        } ?>
                    </div>
                    <div class="section-special-offer-text-3 mb-10">   <?php
                        $text = get_theme_mod('special-offer-section-callout-text-block3');
                        if ($text != '') {
                            echo $text;
                        } ?>
                    </div>
                    <a href="
                        <?php
                    $text = get_theme_mod('special-offer-section-callout-button-1-link');
                    if ($text != '') {
                        echo $text;
                    } ?>">
                        <button type="button"
                                class="btn button-size button-text button-black">
                            <?php
                            $text = get_theme_mod('special-offer-section-callout-button-1-text');
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
