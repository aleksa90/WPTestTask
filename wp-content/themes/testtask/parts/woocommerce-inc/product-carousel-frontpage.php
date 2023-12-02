<?php

function prod_carousel($cat_slug, $prod_quantity)
{
    $args = array(
        'tax_query' => array(
            array(
                'taxonomy' => 'product_cat',
                'field' => 'slug',
                'terms' => $cat_slug
            ),
        ),
        'posts_per_page' => $prod_quantity,
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
    <?php wp_reset_query();
}