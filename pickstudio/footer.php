
<footer class="container footer main__style">
    <?php
        get_template_part('template-parts/section_feedback_news');
    ?>

    <div class=" container ourService ">

        <div class="row ourService__title main__decorate">
            <div class="col-6">
                <p class="ourServiceData">
                    Связаться с нами
                </p>
            </div>
            <div class="col-6 ourService__decor">
                <img src="<?php echo bloginfo('template_url');?>/assets/images/3.png" alt="" class="lines">
            </div>
        </div>

    </div>
    <?php

    $footerData = get_field('footer_data',2);
    ?>
    <div class="container findUs">
        <p class="findUs__subtitle">
            <?= $footerData['clogan']; ?>
    </p>
    <p class="findUs__subtitle">
        <?= $footerData['prisoedinyajtes']; ?>
    </p>
    <div class="findUs__list">
        <?php
foreach ($footerData as $keySocial=>$valueSocial){
    if(is_array($valueSocial)){
       ?>
        <a href="<?php
        if(!empty($valueSocial['link'])){
           echo $valueSocial['link'];
        }
        ?>">
                <img class="findUs__facebook" src="<?php
                if(!empty($valueSocial['picture'])){
                   echo $valueSocial['picture'];
                }
                ?>">
            </a>
            <?php
    }
}
    ?>
            <div class="mustache">
                <img class="mustache__picture" src="<?php echo bloginfo('template_url');?>/assets/images/28.png">
            </div>
        </div>


</footer>

<?php
get_template_part('template-parts/rights');
?>

<?php
wp_footer();
?>
</body>
</html>
<?php

?>