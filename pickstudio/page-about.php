<?php
    /*
     Template Name: О Нас
     */
?>
<?php
get_header();

$list=wp_get_nav_menu_items('Main');

?>

<main class="container about__main">
    <div class="decor "></div>
    <div class="row decor__content">
        <div class="col-7 decor__info">
            <p class="decor__title"><?php the_field('decor_title'); ?></p>
        </div>

        <div class="col-5 decor__links">
            <a href="http://portfolioanzhela/" class="home">Главная</a>
            <div class="about"><?= $list[0]->title; ?></div>
        </div>
        <div class="decor "></div>
        <div class="container motto">
            <div class="row">
                <div class="col-12 motto__content">
                    <div class="col-5 motto__img">
                        <img class="motto__picture" src="https://media.giphy.com/media/ZgTR3UQ9XAWDvqy9jv/giphy.gif">
                    </div>
                    <div class="motto__content">
                        <p class="motto__data">
                            <b><?php the_field('logo_subtitle',2); ?></b><?php the_field('motto_data'); ?>
                            <br> <br>
                        <h2 class="h2"><?php the_field('question'); ?></h2>


                        </p>
                    </div>
                </div>

            </div>
        </div>
        <?php
        get_template_part('template-parts/section_calculator');
        ?>

        <div class="decor"></div>
</main>


<?php
get_footer();
?>
