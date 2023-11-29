<?php
get_header(); ?>

    <!--section Slider text content -->
    <section class="d-flex align-items-center justify-content-center"

             style="background-image: url('<?php $img=  get_theme_mod('banner-section-callout-image');
             echo wp_get_attachment_url($img) ?>wp-content/themes/testtask/assets/Pic_Slider.jpg');
                     background-size: cover;  height: 100vh;
                     background-repeat: no-repeat;
                     position: relative;
                     background-position: center center;
                     ">

        <div class="container">
            <div class="row">
                <div class="col-6">
                    <div class="section-slider-text-1">
                        <?php
                        $text = get_theme_mod('banner-section-callout-text-block1');
                        if ($text != '') {
                            echo wpautop($text);
                        } ?>
                    </div>
                    <div class="section-slider-text-2">                         <?php
                        $text = get_theme_mod('banner-section-callout-text-block2');
                        if ($text != '') {
                            echo wpautop($text);
                        } ?>
                    </div>
                    <div class="section-slider-text-3"><?php
                        $text = get_theme_mod('banner-section-callout-text-block3');
                        if ($text != '') {
                            echo wpautop($text);
                        } ?>

                    </div>
                    <button type="button" class="btn button-size button-text button-white">shop now</button>
                    <button type="button" class="btn button-size button-text button-outline">VIEW MORE</button>
                </div>
            </div>
        </div>
    </section>

    <!--section JEWELLERY STORE -->
    <section class="align-items-center justify-content-center">
        <div class="container text-center">
            <div class="row row-cols-2 align-items-center">
                <div class="col">
                    <img class="w-100" src="/wp-content/themes/testtask/assets/image1.png" alt="">
                </div>
                <div class="col">
                    <div class="section-jewellery-store-text-1"> Donec sollicitudin</div>
                    <div class="section-jewellery-store-text-2">JEWELLERY</div>
                    <div class="section-jewellery-store-text-3"> STORE</div>
                    <div class="section-jewellery-store-text-4"> An sincerity so extremity he additions. Her yet there
                        truth merit. Mrs all projecting favourable
                        now unpleasing. Son law garden chatty temper. Oh children provided to mr elegance marriage
                        strongly.
                    </div>
                    <button type="button" class="btn button-size button-text button-black">shop now</button>
                    <button type="button" class="btn button-size button-text button-black-outline">VIEW MORE</button>
                </div>
            </div>
        </div>
    </section>


    <!--section FEATURED PRODUCTS -->
    <section class="d-flex align-items-center justify-content-center">
        <div class="container text-center">
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="section-featured-products-text-1">Adipisicing elit</div>
                    <div class="section-featured-products-text-2">FEATURED PRODUCTS</div>
                    <div class="section-featured-products-text-3">There are many variations of passages of lorem ipsum
                        available.
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-3">
                    <div class="hover-image zoom-in w-100"
                         style="background-image: url('/wp-content/themes/testtask/assets/fp-white.png');">
                        <div>
                            <div class="hover-image-text-1"> TRISTIQUE JUSTO</div>
                            <div class="hover-image-text-2"> Started now shortly had for assured hearing expense led
                                juvenile.
                            </div>
                            <div class="hover-image-text-3"> SHOP NOW</div>
                        </div>
                    </div>
                </div>
                <div class="col-9">
                    <div class="owl-carousel owl-theme">
                        <?php
                        $cat_slug = 'jewelry'; //add edit for admin
                        $posts_per_page = 4; //add edit for admin
                        $args = array(
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'product_cat',
                                    'field' => 'slug',
                                    'terms' => $cat_slug
                                ),
                            ),

                            'posts_per_page' => $posts_per_page,
                            'post_type' => 'product',
                            'orderby' => 'date',
                        );
                        $loop = new WP_Query($args);
                        while ($loop->have_posts()) :
                            $loop->the_post();
                            global $product;

                            $category = get_term_by('slug', $cat_slug, 'product_cat');
                            ?>
                            <div>
                                <div class="col product hover-area">
                                    <a href="<?php echo get_permalink($loop->post->ID) ?>">
                                        <?php
                                        if (has_post_thumbnail($loop->post->ID)) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog');
                                        ?>
                                    </a>
                                    <div>
                                        <h3 class="product-title"><?php the_title(); ?></h3>
                                        <h4 class="product-cat"><?php echo $category->name ?></h4>
                                        <div class="product-price"><?php echo $product->get_price_html(); ?></div>
                                        <div class="product-hover-block">
                                            <?php woocommerce_template_loop_add_to_cart($loop->post); ?>
                                            <div class="button-search"> 1</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                        <?php wp_reset_query(); ?>


                    </div>
                </div>

            </div>

        </div>
    </section>

    <!--section Special offer -->


    <!--section posts -->
    <section class="d-flex align-items-center justify-content-center">
        <div class="container text-center">
            <div class="row align-items-center">
                <div class="owl-carousel owl-theme">
                    <?php
                    $args = array(
                        'posts_per_page' => 5, //add edit for admin
                    );

                    $q = new WP_Query($args);

                    if ($q->have_posts()) :

                        while ($q->have_posts()) : $q->the_post();
                            echo '<div>';
                            echo get_the_post_thumbnail(get_the_ID(), 'thumbnail');
                            echo '<a href="' . get_permalink() . '">' . get_the_title() . '</a>';
                            echo get_the_date();
                            echo '</div>';
                        endwhile;
                    endif;

                    wp_reset_postdata();
                    ?>
                </div>
            </div>
        </div>
    </section>


<?php
get_footer();