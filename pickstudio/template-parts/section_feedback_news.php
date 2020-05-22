<?php
$args = array(
    'number' => 10,
    'no_found_rows' => true,
    'orderby' => '',
    'order' => 'DESC',
    'post_id' => '194',
    'status' => 'all',
    'date_query' => null,
    'hierarchical' => false,
    'update_comment_meta_cache' => true,
    'update_comment_post_cache' => false,
);


$commentList = get_comments($args);
?>
<div class="feedbackData">
    <div class="row blog">
        <p class="col-12 col-md-12  blog_title">Последние новости</p>
    </div>
    <div class="row news">
        <div class="col-12 col-md-12 news__img">
            <?php
            $posts = get_posts(array(
                'numberposts' => 2,
                'category' => 'news',
                'orderby' => 'date',
                'order' => 'DESC',
                'include' => array(),
                'exclude' => array(),
                'meta_key' => '',
                'meta_value' => '',
                'post_type' => 'post',
                'suppress_filters' => true,
            ));

            foreach ($posts as $post) {
                setup_postdata($post);
                $newsName = $post->post_title;
                //$newsData = $post->post_date;

                ?>
                <div class="row">

                    <div class="col-3 col-md-3 news__img__item">
                        <div class="news__picture"><?php
                            if (has_post_thumbnail()) {
                                the_post_thumbnail();
                            } else {
                                ?>
                                <img class="secondPicture"
                                     src="<?php echo bloginfo('template_url'); ?>/assets/images/48.png">
                                <?php
                            }
                            ?> </div>
                    </div>
                    <div class="col-12 col-md-9 news__info">
                        <a class="view__news" href="http://portfolioanzhela/blog/">
                            <div class="news__data">

                                <p class="news__title date"><?= $newsName; ?></p>
                                <p class="date"><?= the_time('d F Y'); ?></p>
                                <p class="news__content"><?= the_field('news_info'); ?></p>
                            </div>
                        </a>
                    </div>
                </div>
                <?php

            }

            wp_reset_postdata();
            ?>
        </div>
    </div>
</div>

<div class="feedbackData ">
    <p class="col-12 col-md-12  blog_title _blog_title">Отзывы</p>

    <div class="col-8 col-md-12 news__info">
        <div class="col-12 feedback">
            <div class="swiper-container s_container">

                <div class="swiper-wrapper feedback__wrapper">

                    <?php

                    foreach ($commentList as $randFeedB){


                        ?>
                        <div class="swiper-slide s_s_active">
                        <div class="subtitle text f_list_name" data-swiper-parallax="-200"><?php echo "$randFeedB->comment_author"; ?></div>
                        <div class="text" data-swiper-parallax="-100">
                            <p class="feedback__info"><?php echo "$randFeedB->comment_content"; ?></p>
                        </div>
                    </div>
                    <?php
                    }
                    ?>


                </div>


            </div>
            <div class="swiper-button-prev s_b_next__feedback"></div>
            <div class="swiper-button-next s_b_prev__feedback"></div>
        </div>
    </div>

</div>