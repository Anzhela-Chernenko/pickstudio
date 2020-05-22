<div id="goCalc" class="container">
    <br>
    <h3 class="h3 _calc_h3">Посчитать предварительную стоимость сайта:</h3>
    <br>
</div>

<section class="container calculator">
    <form action="#solution" method="post">
        <div class="row">
            <div class="col-lg-2 col-md-4 col-sm-4 col-6 calculator__type ">

                <h4 class="calculator__h4">1.Укажите тип желаемого сайта:</h4>
                <hr>
                <div tabindex="1" class="btn from-right ">
                    <input class="checkbox" type="radio" name="Работа" value="Сайт визитка" id='calcVisit'>
                    <label class="label" for="calcVisit">
                        Сайт визитка
                    </label>
                    <span class="infoBox">ℹ️
                            <div class="infoHover">
                              <p class="infoHover__title"> Колличество веб-страниц: до 5</p>
                            </div>
                            </span>
                </div>

                <div tabindex="2" class="btn from-right ">
                    <input class="checkbox" type="radio" name="Работа" value="Landing Page" id='calcLanding'>
                    <label class="label" for="calcLanding">
                        Landing Page
                    </label>
                    <span class="infoBox">ℹ️
                                <div class="infoHover">
                              <p class="infoHover__title"> Колличество веб-страниц: 1</p>
                            </div>
                            </span>

                </div>
                <div tabindex="3" class="btn from-right ">
                    <input class="checkbox" type="radio" name="Работа" value="Корпоративный сайт"
                           id='calcCorporate'>
                    <label class="label" for="calcCorporate">
                        Корпоративный сайт ️
                    </label>
                    <span class="infoBox">ℹ️
                            <div class="infoHover">
                              <p class="infoHover__title infoH__own">
                                  Дизайн соответсвует логотипу компании.
                                  Присутствует каталог продукции.
                                  Форум, новости, модули по запросу.
                              </p>
                            </div>
                            </span>

                </div>
                <div tabindex="4" class="btn from-right ">
                    <input class="checkbox" type="radio" name="Работа" value="Интернет магазин"
                           id='calcShop'>
                    <label class="label" for="calcShop">Не большой интернет-магазин
                    </label><span class="infoBox">ℹ️
                            <div class="infoHover">
                              <p class="infoHover__title infoH__own">
                                  Многоуровневая структура.
                                  Направлен на продажу продукции.
                                  Форум, новости, модули по запросу.
                              </p>
                            </div>
                            </span>

                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-4 col-sm-4 col-6 calculator__type ">

                <h4 class="calculator__h4">2.Дизайн:</h4>
                <hr>
                <div tabindex="5" class="btn from-right ">
                    <input class="checkbox" type="radio" name="Дизайн" value="1000" id='calcDesignTrue'>
                    <label class="label" for="calcDesignTrue">
                        Нужен дизайн
                    </label>

                </div>
                <div tabindex="6" class="btn from-right ">
                    <input class="checkbox" type="radio" name="Дизайн" value="0" id='calcDesignFalse'>
                    <label class="label" for="calcDesignFalse">
                        Дизайн уже есть(свой)
                    </label>
                </div>

            </div>

            <div class="col-lg-2 col-md-4 col-4 col-sm-4 col-6 calculator__type ">
                <h4 class="calculator__h4">3.Адаптивность:</h4>
                <hr>
                <div tabindex="7" class="btn from-right ">
                    <input class="checkbox" type="checkbox" name="Адаптивность" value="600" id='calcResponse'>
                    <label class="label" for="calcResponse">
                        Отзывчивая вёрстка
                    </label>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-4 col-sm-4 col-6 calculator__type ">
                <h4 class="calculator__h4">4.Движок:</h4>
                <hr>
                <div tabindex="8" class="btn from-right ">
                    <input class="checkbox" type="radio" name="Движок" value="600" id='calcWP'>
                    <label class="label" for="calcWP">
                        WordPress
                    </label>
                </div>
                <div tabindex="9" class="btn from-right ">
                    <input class="checkbox" type="radio" name="Движок" value="0" id='calcWPfalse'>
                    <label class="label" for="calcWPfalse">
                        Не нужен
                    </label>
                </div>
            </div>


            <div class="col-lg-2 col-md-4 col-4 col-sm-4 col-6 calculator__type ">
                <h4 class="calculator__h4">5.Домен и хостинг:</h4>
                <hr>
                <div tabindex="12" class="btn from-right ">
                    <input class="checkbox" type="checkbox" name="Домен/хостинг" value="900"
                           id='calcHost'>
                    <label class="label" for="calcHost">
                        Домен и хостинг
                    </label>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-4 col-sm-4 col-6 calculator__type ">
                <h4 class="calculator__h4">6.Мультиязычность:</h4>
                <hr>
                <div tabindex="13" class="btn from-right ">
                    <input class="checkbox" type="checkbox" name="Мультиязычность/English" value="1000"
                           id='calcEnglish'>

                    <label class="label" for="calcEnglish">
                        English
                    </label>
                </div>
                <div tabindex="13" class="btn from-right ">
                    <input class="checkbox" type="checkbox" name="Мультиязычность/Русский" value="500"
                           id='calcRussian'>
                    <label class="label" for="calcRussian">
                        Русский
                    </label>
                </div>
                <div tabindex="13" class="btn from-right ">
                    <input class="checkbox" type="checkbox" name="Мультиязычность/Укріїнська" value="500"
                           id='calcUkrainian'>
                    <label class="label" for="calcUkrainian">
                        Українська
                    </label>
                </div>
            </div>


        </div>
        <br>
        <div class="row">


            <div class="col-6 col-lg-3 col-lg-2 col-md-3 calculator__type ">

                <h4 class="calculator__h4">7.Наполнение товарами/за 1
                    страницу:</h4>
                <hr>
                <div tabindex="10" class="btn from-right ">
                    <input class="checkbox" type="radio" name="Контент" value="300" id='calcContent'>
                    <label class="label" for="calcContent">
                        Нужен
                    </label>
                </div>
                <div tabindex="11" class="btn from-right ">
                    <input class="checkbox" type="radio" name="Контент" value="0" id='calcContentFalse'>
                    <label class="label" for="calcContentFalse">
                        Не нужен
                    </label>
                </div>
            </div>

            <div class="col-6 col-lg-2 col-md-3 calculator__type col-lg-3">

                <h4 class="calculator__h4">8.Настройка рекламы Google AdWords:</h4>
                <hr>
                <div tabindex="10" class="btn from-right ">
                    <input class="checkbox" type="radio" name="Google AdWords" value="1000" id='calcContentAW'>
                    <label class="label" for="calcContentAW">
                        Настоить
                    </label>
                </div>
                <div tabindex="11" class="btn from-right ">
                    <input class="checkbox" type="radio" name="Google AdWords" value="0" id='calcContentAWFalse'>
                    <label class="label" for="calcContentAWFalse">
                        Не нужен
                    </label>
                </div>
            </div>

            <?php

            if (!empty($_POST['calculator'])) {

                ?>
                <div id="solution" class="col-11 col-md-4 col-md-4 calculator__result">
                    <h4 class="calculator__h4">Предварительная стоимость:</h4>
                    <?php
                    if (!empty($_POST['Работа'])) {
                        ?>
                        <h5 class="h5"> <?= $_POST['Работа'] ?></h5>
                        <?php
                    }
                    $totalPrice = 0;

                    foreach ($_POST as $key => $value) {

                        if ($_POST[$key] != $_POST['calculator']) {
                            if ($value == 'Сайт визитка') {
                                $time = 'до 30 дней';
                                $value = 800;
                            } elseif ($value == 'Landing Page') {
                                $time = 'до 20 дней';
                                $value = 400;
                            } elseif ($value == 'Корпоративный сайт') {
                                $time = 'до 30 дней';
                                $value = 800;
                            } elseif ($value == 'Интернет магазин') {
                                $time = 'до 30 дней';
                                $value = 2500;
                            }
                            $totalPrice += $value;

                            ?>
                            <p class="calc__type"><?= $key; ?>:
                                <span class='type__price'><?= $value; ?></span>


                            </p>
                            <?php

                        }
                    }
                    ?>
                    <span class='type__price'>Сроки выполнения: <?= $time; ?></span>
                    <h2 class="totalPrice">Общая стоимость:<span class="total__price"> <?= $totalPrice; ?> грн</span>
                    </h2>

                    <div class="calculator__order">
                        <input type="button" value="Оформить заказ"  id="setOrder"
                               class="calc__order button" name="calc__order">
                    </div>
                </div>
                <?php


            }



            ?>


        </div>
        <input type="submit" class="button" value="Рассчитать" name="calculator">

    </form>
    <!--форма оформления заказа после подсчета на калькуляторе-->
    <?php
    get_template_part('template-parts/order');
    ?>
</section>


<?php

if (!empty($_POST['calc__order'])) {

    ?>
    <div id="byeInfo" class="container-fluid byeMessage">
        <div class="row byeMessage__content">

            <div class="offset-4 col-4 offset-4" id="byeMessage">
                <div class="ExitByeMessage" onclick="byeExit()">X</div>
                <h2>Ваша заявка принята!</h2>
                <p>В ближайшее время с Вами свяжется администратор для уточнения заказа.</p>
                <p>Спасибо за выбор!</p>
            </div>
        </div>

    </div>

    <?php

}
//header('Location:localhost:80/portfolio/about.php');


?>