<?php
function section_7()
{ ?>

    <section class="d-flex align-items-center justify-content-center">
        <div class="container text-center">
            <div class="row align-items-center mb-50">
                <div class="col-12">
                    <div class="section-posts-text-1">
                        <?php
                        $text = get_theme_mod('posts-section-callout-text-block1');
                        if ($text != '') {
                            echo $text;
                        } ?>
                    </div>
                    <div class="section-posts-text-2">
                        <?php
                        $text = get_theme_mod('posts-section-callout-text-block2');
                        if ($text != '') {
                            echo $text;
                        } ?>
                    </div>
                    <div class="section-posts-text-3">
                        <?php
                        $text = get_theme_mod('posts-section-callout-text-block3');
                        if ($text != '') {
                            echo $text;
                        } ?>
                    </div>
                </div>
            </div>

            <div class="row align-items-center">
                <div class="owl-carousel owl-theme">
                    <?php
                    $qty = get_theme_mod('posts-section-callout-posts-quantity');

                    if ($qty != '') {
                        $args = array(
                            'posts_per_page' => $qty,
                        );

                        $q = new WP_Query($args);

                        if ($q->have_posts()) :

                            while ($q->have_posts()) : $q->the_post(); ?>
                                <div>
                                    <div class="pad-20">
                                    <?php echo get_the_post_thumbnail(get_the_ID(), 'frontpage-blog-thumb'); ?>
                                        <?php echo get_the_date();?>
                                        <?php  foreach ((get_the_category()) as $category) {
                                        echo $category->cat_name . ' ';
                                    } ?>
                                        <div class="post-title">
                                    <a href="<?php get_permalink() ?>"> <?php echo get_the_title() ?> </a></div>
<?php
                                    $author_id = get_post_field('post_author', get_the_ID());
                                    $author_name = get_the_author_meta('display_name', $author_id); ?>
                                    Posted by <?php $author_name; ?>


                                    <?php $maxchar = 100;
                                    $text = strip_tags(get_the_content());
                                    echo mb_substr($text, 0, $maxchar); ?>
                                 <div class="continue-read" >  <a href="<?php get_permalink() ?>"> Continue reading </a></div></div>
                                </div>
                            <?php
                            endwhile;
                        endif;

                        wp_reset_postdata();
                    } ?>
                </div>
            </div>
        </div>
    </section>

<?php } ?>
