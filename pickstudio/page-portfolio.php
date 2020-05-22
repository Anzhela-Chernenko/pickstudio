<?php
/*
 Template Name: Портфолио
 */
?>
<?php
get_header();
?>
    <main class="container   portfolio__main">
        <div class="decor"></div>

        <div class="container  ourService__list">
            <div class="row positionPic">
                <?php
                $countTab = 0;
                $portfolio_list=get_field('portfolio_list',2);
                foreach ($portfolio_list as $keyPortfolio=>$portfolioItem){
                    $countTab++;
                    ?>
                    <div class="portfolio__list">

                        <div tabindex="<?= $countTab; ?>" class=" pictureHover ourService__item <?= $keyPortfolio; ?>">
                            <img src="<?php echo bloginfo('template_url');?>/assets/images/15.png" alt="Портфолио" class="ourService__picture">

                        </div>

                        <div class="ourService__subtitle">
                            <br><br>
                            <p class="portfolio__hover"><?= $portfolioItem['project_name']; ?></p>
                        </div>
                    </div>


                    <?php
                }
                ?>

        </div>

    </main>


<?php
get_footer();
?>