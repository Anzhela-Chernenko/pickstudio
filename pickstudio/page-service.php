<?php
/*
 Template Name: Услуги
 */
?>
<?php
get_header();
?>

<main class="container service__main">
    <?php
    $serviceLinkList = get_field('service_link', 2);
    foreach ($serviceLinkList as $key => $serviceLink) {
        if ($key == 'main_develop_sites') {
            ?>
            <div class="row service__row">
                <div class="col-lg-3 col-sm-5 positionImage ">
                    <img src="<?php echo bloginfo('template_url'); ?>/assets/svg/6.svg" class="card-img-top imageList"
                         alt="...">
                    <p class="serviceList__title _first">
                        Разработка
                    </p>
                    <p class="serviceList__title">
                        Сайтов
                    </p>
                </div>
                <div class="col-lg-8 col-sm-11">

                    <div class="serviceInfo">
                        <img class="service__img" src="<?php echo bloginfo('template_url'); ?>/assets/images/32.png">
                        Сайт визитка -
                        <span class="serviceInfo__data">
                  это Ваша визитная карточка в Сети. Ее основная цель краткая передача информации
                         о компании или персоне для привлечения внимания посетителей (до 5 веб-страниц).
                     </span>
                    </div>

                    <div class="serviceInfo">
                        <img class="service__img" src="<?php echo bloginfo('template_url'); ?>/assets/images/32.png">
                        Landing Page -
                        <span class="serviceInfo__data">
                  это мощный инструмент интернет-маркетинга, разработанный для увеличения продаж.Лендинг
                    концентрирует внимание человека на предложении и призывать к действию
                  (покупке, оформлению подписки, загрузке контента и пр.) (1 веб-страница)
                </span>
                    </div>

                    <div class="serviceInfo">
                        <img class="service__img" src="<?php echo bloginfo('template_url'); ?>/assets/images/32.png">
                        Корпоративный сайт -
                        <span class="serviceInfo__data">
                  это полноценное представительство компании в интернете и эффективный
                    инструмент для привлечения и удержания новых клиентов.
                </span>
                    </div>

                    <div class="serviceInfo">
                        <img class="service__img" src="<?php echo bloginfo('template_url'); ?>/assets/images/32.png">
                        Не большой интернет-магазин -
                        <span class="serviceInfo__data">
                  это сервис, который позволяет совершать покупки в интернете.
                </span>
                    </div>
                </div>
            </div>
            <div id="calc" class="row">
                <div class="col-10">
                    <h3 class="service__h3">Посчитать предварительную стоимость сайта, Вы пожете воспользовавшись
                        калькулятором <i class="fa fa-level-down"></i></h3>
                    <a href="#goCalc" class="button service__button">Рассчитать</a>
                </div>
            </div>
            <?php
        } else {
            ?>

            <div class="row service__row">

                <div class="col-lg-3 col-sm-5 positionImage">
                    <img src="<?= $serviceLink['service_picture']; ?>" class="card-img-top imageList" alt="...">
                    <p class="serviceList__title _first">
                        <?= $serviceLink['service_name']; ?>
                    </p>

                </div>
                <div class="col-lg-8 col-sm-12 ">

                    <div class="serviceInfo">
                        <img class="service__img" src="<?php echo bloginfo('template_url'); ?>/assets/images/32.png">

                        <span class="serviceInfo__data">
                         <?php
                         if (!empty($serviceLink['describeService'])) {
                             echo $serviceLink['describeService'];
                         }
                         ?>

                    <br> <br><p>
                               <?php
                               if (!empty($serviceLink['addToMind'])) {
                                   echo $serviceLink['addToMind'];
                               }
                               ?>
                    </p>
                </span>

                    </div>
                </div>
            </div>
            <?php
        }

    }
    ?>

    <?php
    get_template_part('template-parts/section_calculator');
    ?>

    <div class="decor"></div>
</main>


<?php
get_footer();
?>


