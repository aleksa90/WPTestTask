<?php
function prod_list($field,$prod_term,$sortorder,$order)
{
    $args = array(
        'field' => $field,
        'terms' => $prod_term,
        'posts_per_page' => 3,
        'post_type' => 'product',
        'stock' => 1,
        'orderby' => $sortorder,
        'order' => $order
    );

    $loop = new WP_Query($args);
    while ($loop->have_posts()) :
        $loop->the_post();
        global $product;

        ?>
        <div>
            <div class="row">
                <div class="col-3">
                    <div class="prod-img-feature-new-prod">
                <a href="<?php echo get_permalink($loop->post->ID) ?>">
                    <?php
                    if (has_post_thumbnail($loop->post->ID)) echo get_the_post_thumbnail($loop->post->ID, 'frontpage-thumb');
                    ?>
                </a></div>
                </div>
                <div class="col-9">
                    <h3 class="product-title"><?php the_title(); ?></h3>
                    <div class="product-price"><?php echo $product->get_price_html(); ?></div>
                </div>
            </div>
            <hr>
        </div>
    <?php endwhile; ?>
    <?php wp_reset_query();
}