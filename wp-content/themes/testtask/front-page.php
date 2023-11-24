<?php
get_header(); ?>

    <!--section Slider text content -->
    <section class="d-flex align-items-center justify-content-center" style="background-image: url('/wp-content/themes/testtask/assets/Pic_Slider.jpg');
    background-size: cover;  height: 100vh;
    background-repeat: no-repeat;
    position: relative;
    background-position: center center;
 ">

        <div class="container">
            <div class="row">
                <div class="col-6">
                    Donec sollicitudin
                    JEWELLERY STORE
                    <p> An sincerity so extremity he additions. Her yet there truth merit. Mrs all projecting favourable
                        now unpleasing. Son law garden chatty temper. Oh children provided to mr elegance marriage
                        strongly </p>
                    <button type="button" class="btn btn-primary">shop now</button>
                    <button type="button" class="btn btn-primary">VIEW MORE</button>
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
                    Donec sollicitudin
                    JEWELLERY
                    STORE
                    <p> An sincerity so extremity he additions. Her yet there truth merit. Mrs all projecting favourable
                        now unpleasing. Son law garden chatty temper. Oh children provided to mr elegance marriage
                        strongly. </p>
                    <button type="button" class="btn btn-primary">shop now</button>
                    <button type="button" class="btn btn-primary">VIEW MORE</button>
                </div>
            </div>
        </div>
    </section>


    <!--section FEATURED PRODUCTS -->
    <section class="d-flex align-items-center justify-content-center">
        <div class="container text-center">
            <div class="row align-items-center">
                <div class="col-3">
                    <img class="w-100" src="/wp-content/themes/testtask/assets/image1.jpg" alt="">
                </div>
                <div class="col-9">
                    <div class="row">
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
                                        <div>        <?php woocommerce_template_loop_add_to_cart($loop->post); ?> </div>
                                        <div class="button-search"> 1</div>
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
    <section class="d-flex align-items-center justify-content-center">
        <div class="container text-center">
            <div class="row align-items-center">
                <div class="col-6">
                    <img src="/wp-content/themes/testtask/assets/image1.jpg" alt="">
                </div>
                <div class="col-6">
                    Donec sollicitudin
                    JEWELLERY
                    STORE
                    <p> An sincerity so extremity he additions. Her yet there truth merit. Mrs all projecting favourable
                        now unpleasing. Son law garden chatty temper. Oh children provided to mr elegance marriage
                        strongly. </p>
                    <button type="button" class="btn btn-primary">shop now</button>
                    <button type="button" class="btn btn-primary">VIEW MORE</button>
                </div>
            </div>
        </div>
    </section>


    <!--section posts -->
    <section class="d-flex align-items-center justify-content-center">
        <div class="container text-center">
            <div class="row align-items-center">
                <?php
                $args = array(
                    'posts_per_page' => 5, //add edit for admin
                );

                $q = new WP_Query($args);

                if ($q->have_posts()) :

                    while ($q->have_posts()) : $q->the_post();
                        echo get_the_post_thumbnail(get_the_ID(), 'thumbnail');
                        echo '<a href="' . get_permalink() . '">' . get_the_title() . '</a>';
                        echo get_the_date();
                    endwhile;
                endif;

                wp_reset_postdata();
                ?>
            </div>
        </div>
    </section>


<?php
get_footer();