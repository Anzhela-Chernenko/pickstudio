<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo('name'); echo "|"; bloginfo('description'); ?></title>
    <?php
    wp_head();
    ?>
</head>
<body class="body">
<header class="header">
    <div class="container ">

        <nav class="navbar navbar-expand-lg navbar-light bg-transparent header__nav">
            <a href="tel:+380663195895" class="telNum"><?php the_field('fone_number_main',2); ?></a>
                <div class="navbar-brand">
                    <?php
                    the_custom_logo();
                    ?>
                    <a class="navbar-brand logo" href="http://portfolioanzhela"><?php the_field('logo_subtitle',2); ?></a>
                </div>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                    aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse navList" id="navbarNavDropdown">
                <?php
                wp_nav_menu( [
                    'menu'            => 'Main',
                    'container'       => false,
                    'menu_class'      => 'navbar-nav header__navbar',
                    'echo'            => true,
                    'fallback_cb'     => 'wp_page_menu',
                    'items_wrap'      => '<ul class="navbar-nav header__navbar">%3$s</ul>',
                    'depth'           => 2,


                ] );
                ?>

            </div>
        </nav>
    </div>
</header>