<?php
get_header();
?>
    <main class="main ">
        <div class="container  sliderSection">
            <section class="slider ">
                <img class="slider__border" src="<?php echo bloginfo('template_url'); ?>/assets/images/10.png">
                <div class="swiper-container s_c_slide">
                    <div class="swiper-wrapper">
                        <?php
                        $sliderList = get_field('main_swiper');
                        foreach ($sliderList as $slider) {
                            ?>
                            <div class="swiper-slide">
                                <img class="slider_picture"
                                     src="<?= $slider; ?>">
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                </div>
                <div class="swiper-button-next s_b_next"></div>
                <div class="swiper-button-prev s_b_prev"></div>
            </section>

        </div>

        <div class="flagTitle ">
            <div class="makeOrderMain">
                <input type="button" class="getOrderForm button" onclick="getOrderForm()" value="ЗАКАЗAТЬ">
                <div id="orderForm">
                    <?php
                    get_template_part('template-parts/order');
                    ?>
                </div>

            </div>
            <?php the_field('logo_subtitle'); ?> - <span
                    class="logo_title"><?php the_field('main_motto'); ?></span> !
        </div>

        <div class="container flag">
            <div class="flagImg">
                <img src="<?php echo bloginfo('template_url'); ?>/assets/svg/5.svg" alt="Flag" class="flagPicture">
            </div>
            <div class="flagInfo">
                <?php
                $serviceList = get_field('main_serniceList');
                foreach ($serviceList as $service) {
                    ?>
                    <div class="flagSubtitle"> <?= $service; ?><br></div>
                    <?php
                }
                ?>
            </div>
        </div>

        <div class=" container ourService">
            <div class="ourService__title">
                <p class="ourServiceData">
                    Услуги
                </p>
            </div>

            <div class="ourService__decor">
                <img src="<?php echo bloginfo('template_url'); ?>/assets/images/3.png" alt="" class="lines">
            </div>
        </div>
        <?php

        ?>
        <div class="container serviceList">
            <div class="row service__item__list__wrapper">
                <?php
                $serviceLinkList = get_field('service_link');
                foreach ($serviceLinkList as $serviceLink) {
                    ?>

                    <div class="col-sm-6 col-md-3 col-10 positionImage ">
                        <a class="service__item__list" href="http://portfolioanzhela/uslugi/">
                            <img src="<?= $serviceLink['service_picture']; ?>" class="card-img-top imageList">
                            <p class="serviceList__title _first">
                                <?= $serviceLink['service_name']; ?>
                            </p>
                        </a>
                    </div>


                    <?php
                }
                ?>


            </div>

            <div class=" container ourService">
                <div class="ourService__title">
                    <p class="ourServiceData">
                        Последние наши работы
                    </p>
                </div>
                <div class="ourService__decor _line">
                    <img src="<?php echo bloginfo('template_url'); ?>/assets/images/3.png" alt="" class="lines">
                </div>
            </div>

            <div class="container ourService__list">
                <div class="row row__wrapper">

                    <?php
                    $portfolio_list = get_field('portfolio_list');
                    foreach ($portfolio_list as $keyPortfolio => $portfolioItem) {
                        ?>
                        <div class="col-8 col-md-4 service_item_block">
                            <div class="main_s_item ourService__item <?= $keyPortfolio; ?>">
                                <img src="<?php echo bloginfo('template_url'); ?>/assets/images/15.png" alt="Портфолио"
                                     class="ourService__picture">

                            </div>
                            <div class="ourService__subtitle">
                                <p class="_subtitle"><?= the_field('logo_subtitle'); ?></p>
                                <p><?= $portfolioItem['project_name']; ?></p>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                </div>

            </div>

    </main>

<?php
get_template_part('template-parts/marquee');
get_template_part('template-parts/section_calculator');
?>
<?php
get_footer();
?>