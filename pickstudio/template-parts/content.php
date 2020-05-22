<?php
$getPostID= get_post();

$args = array(

    'no_found_rows'       => true,
    'orderby'             => '',
    'order'               => 'DESC',
    'post_id'             => $getPostID->ID,
    'status'              => 'all',
    'date_query'          => null,
    'hierarchical'        => false,
    'update_comment_meta_cache'  => true,
    'update_comment_post_cache'  => false,
);


$commentList= get_comments( $args );
$count_comment = count($commentList);
$list=wp_get_nav_menu_items('Main');
?>
<main class="container main__style">
    <div class="decor "></div>
    <div class="row decor__content">
        <div class="col-7 decor__info">
            <p class="decor__title">Новости</p>
        </div>

        <div class="col-5 decor__links">
            <a href="http://portfolioanzhela/" class="home">Главная</a>
            <div class="about"><?= $list[3]->title; ?></div>

        </div>
        <div class="decor"></div>
        <div class="container">
            <div class="row blog__container">

                <div class="col-12 dateMessage">
                    <div class="col-3  dateInfo">
                        <div class="dateInfo__wrapper">

                            <p class="timeStamp dateCorrect"><?php the_time('d');?></p>
                            <p class="timeStamp"><?php the_time('F');?></p>
                            <p class="timeStamp"><?php the_time('Y');?></p>
                        </div>
                    </div>
                    <h2 class="h2__news"><?php the_title(); ?></h2>
                    <div class="news__pictures">
                        <img src="<?php echo bloginfo('template_url');?>/assets/images/40.png">
                        <span class="news__style">Администратор</span>
                        <img src="<?php echo bloginfo('template_url');?>/assets/images/39.png">
                        <span class="news__style"><?= $count_comment; ?></span>
                        <span class="news__style">Комментариев</span>
                    </div>

                    <div class="subtitle fullSubtitle">
                        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                            <div class="entry-content">
                                <?php
                                the_content(
                                    sprintf(
                                        wp_kses(

                                            __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'pickstudio' ),
                                            array(
                                                'span' => array(
                                                    'class' => array(),
                                                ),
                                            )
                                        ),
                                        get_the_title()
                                    )
                                );

                                wp_link_pages(
                                    array(
                                        'before' => '<div class="page-links">' . __( 'Pages:', 'pickstudio' ),
                                        'after'  => '</div>',
                                    )
                                );
                                ?>
                            </div>


                        </article><!-- #post-<?php the_ID(); ?> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-2 ourService__title">
                    <p class="ourServiceData">
                        Автор
                    </p>
                </div>
                <div class="col-10 ourService__decor">
                    <img src="<?php echo bloginfo('template_url');?>/assets/images/3.png" alt="" class="lines">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row authorAdmin">
                <div class="col-md-2  authorPhoto">
                    <img class="picWriter" src="<?php echo bloginfo('template_url');?>/assets/images/42.png">
                </div>
                <div class="col-md-5 authorMotto">
                    <h5 class="admin__title"><?= the_field('view_name',173);?></h5>
                    <p class="author__subtitle">
                        Администратор
                    </p>
                    <p class="admin__info"><?= the_field('view_help',173);?></p>
                </div>
                <div class="col-md-1 authorLinks">
                    <div class="findUs__list admin__list">
                        <a class="social__admin" href="#" >
                            <img class="admin__links " src="<?php echo bloginfo('template_url');?>/assets/images/25.png">
                        </a>
                        <a class="social__admin" href="#" >
                            <img class="admin__links" src="<?php echo bloginfo('template_url');?>/assets/images/26.png">
                        </a>
                        <a class="social__admin" href="#" >
                            <img class="admin__links" src="<?php echo bloginfo('template_url');?>/assets/images/27.png">
                        </a>

                    </div>
                </div>
                <div class="col-md-4 companyMotto">
                    <div class="points"></div>
                    <p class="admin__info _links"><?= the_field('view_social',173);?></p>
                </div>

            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 ourService__title">

                    <p class="ourServiceData">
                        Комментарии <span>(<?= $count_comment; ?>)</span>
                    </p> </div>
                    <div class="col-md-6 ourService__decor">
                        <img src="<?php echo bloginfo('template_url');?>/assets/images/3.png" alt="" class="lines">
                    </div>
            </div>
            <div class="row">
            <?php

                if ( comments_open() || get_comments_number() ) {
                    comments_template();


                }
                ?>
            </div>
        </div>

    </div>

</main>