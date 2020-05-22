<main class="container main__style">
        <div class="container">
            <div class="row blog__container">
                <div class="col-12 dateMessage">
                    <h2 class="h2__news"><?php the_title(); ?></h2>
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

    </div>

</main>