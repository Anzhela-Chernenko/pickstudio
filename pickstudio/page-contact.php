<?php
/*
 Template Name: Контакты
 */
?>
<?php
get_header();
?>
    <main class="container contact__main">
        <div class="decor"></div>
        <div class="row decor__content">
            <div class="col-md-7 col-12 decor__info">
                <p class="decor__title"><?php the_field('prizyv_contact',175);?></p>
            </div>

        </div>
        <div class="decor"></div>
        <div class="container map sliderSection">

            <section class="slider">

                <img class="slider__border" src="<?php echo bloginfo('template_url');?>/assets/images/10.png">
                <div class="googleMap">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d87643.08026739833!2d32.537741840330696!3d46.649551080890525!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40c41aa25d9bf967%3A0xf3a5478c8e3121fe!2z0KXQtdGA0YHQvtC9LCDQpdC10YDRgdC-0L3RgdC60LDRjyDQvtCx0LvQsNGB0YLRjCwgNzMwMDA!5e0!3m2!1sru!2sua!4v1588707233857!5m2!1sru!2sua" width="100%" height="90%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </section>
        </div>
        <div class="container ourService__title">
            <div class="row contact__line">
                <p class="col-md-5 col-12 contact__motto contStyle">
                    <?php the_field('dejstvie_contact',175);?>
                </p>
                <div class=" col-md-7  col-12 ourService__decor">
                    <img src="<?php echo bloginfo('template_url');?>/assets/images/3.png" alt="" class="lines">
                </div>
            </div>

        </div>
        <div class="row contact__wrapper">
            <div class="col-md-3 col-6 contact__information">
                <img class="contact__phone" src="<?php echo bloginfo('template_url');?>/assets/images/33.png">
                <div class="contact__phones">
                    <?php
                     $contactList = get_field('contact_fones',175);
                    foreach ($contactList as $keyContact=>$valueContact){
                        if(!empty($valueContact && $keyContact != 'pochta_mail')){
                            ?>
                            <a href="tel:<?= $valueContact; ?>" class="ridOfP"><?= $valueContact; ?></a>
                            <?php
                        }
                    }
                    ?>

                </div>
            </div>
            <div class="col-md-4 col-6 offset-md-1 contact__information">
                <img class="contact__phone" src="<?php echo bloginfo('template_url');?>/assets/images/34.png">
                <div class="contact__phones">
                    <a href="mailto:<?= $contactList['pochta_mail']; ?>" class="ridOfP"><?= $contactList['pochta_mail']; ?></a>

                </div>
            </div>

        </div>
        <div class="container ourService__title">
            <div class="row contact__line">
                <p class="col-md-5 col-12 contact__motto contStyle">
                    Оставить сообщение
                </p>
                <div class=" col-md-7  col-12  ourService__decor">
                    <img src="<?php echo bloginfo('template_url');?>/assets/images/3.png" alt="" class="lines">
                </div>
            </div>

        </div>
        <div class="row ">
            <form  autocomplete="off" class="sendQuestion__form" action="" method="post">
                <div class="sendQuestion">
                    <div class="col-md-6 col-12 sendQuestion__fildList">
                        <input required='required' class="sendQuestion__input" type="text" maxlength="30" name="sendQuestion__name" placeholder="Имя">
                        <input required='required' class="sendQuestion__input" type="email" maxlength="30" name="sendQuestion__email" placeholder="Email">
                    </div>
                    <div class="col-md-6 col-12 sendQuestion__textArea">
                        <textarea required='required' maxlength="120" class="textArea" placeholder="Вопрос" name="textQuestion"></textarea>
                    </div>
                </div>


                <input type="submit" value="Отправить" class="button questionButStyle" name="sendQuestion">

        </div>

        </form>

        </div>

    </main>



<?php
get_template_part('template-parts/section_footer');
?>