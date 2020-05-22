<?php
/*
 Template Name: Политика конфеденциальности

 */
?>

<?php
get_header();

$list=wp_get_nav_menu_items('Main');

?>
<div class="wrap">
    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

            <?php

            while ( have_posts() ) :
                the_post();

                get_template_part( 'template-parts/privacy', get_post_format() );

            endwhile;
            ?>

        </main>
    </div>

</div>

<?php
get_template_part('template-parts/rights');
?>
