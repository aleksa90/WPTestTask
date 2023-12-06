<?php
function section_7()
{ ?>

    <section class="d-flex align-items-center justify-content-center">
        <div class="container text-center">
            <div class="row align-items-center mb-50">
                <div class="col-12">
                    <div class="section-posts-text-1 mb-10">
                        <?php
                        $text = get_theme_mod('posts-section-callout-text-block1');
                        if ($text != '') {
                            echo $text;
                        } ?>
                    </div>
                    <div class="section-posts-text-2 mb-10">
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
                                        <div class="date-post-publ">
                                            <div class="date-post-publ-date">  <?php echo get_the_date("d"); ?> </div>
                                            <div class="date-post-publ-month">  <?php echo get_the_date("M"); ?> </div></div>
                                        <?php echo get_the_post_thumbnail(get_the_ID(), 'frontpage-blog-thumb'); ?>

                                       <div class="post-category"> <?php foreach ((get_the_category()) as $category) {
                                            echo $category->cat_name . ' ';
                                        } ?> </div>
                                        <div class="post-title">
                                            <a href="<?php get_permalink() ?>"> <?php echo get_the_title() ?> </a></div>
                                        <?php
                                        $author_id = get_post_field('post_author', get_the_ID());
                                        $author_name = get_the_author_meta('display_name', $author_id); ?>
                                        <div class="post-author">  Posted by
                                            <?php if($avatar = get_avatar(get_the_author_meta('ID')) !== FALSE): ?>
                                                <img src="/wp-content/themes/testtask/assets/Avatar.svg" alt="">
                                            <?php else: ?>
                                                <img src="/wp-content/themes/testtask/assets/Avatar.svg">
                                            <?php endif; ?> <?php echo $author_name; ?></div>

                                      <div class="post-content"> <?php $maxchar = 100;
                                        $text = strip_tags(get_the_content());
                                          echo mb_substr($text, 0, $maxchar); ?> </div>
                                        <div class="continue-read"><a href="<?php get_permalink() ?>"> Continue
                                                reading </a></div>
                                    </div>
                                </div>
                            <?php endwhile;
                            endif;

                        wp_reset_postdata();
                    } ?>
                </div>
            </div>
        </div>
    </section>

<?php } ?>
