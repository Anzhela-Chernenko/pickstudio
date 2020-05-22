<?php
    add_action("wp_enqueue_scripts","pick_studio");

function pick_studio(){
    wp_enqueue_style('awesomeFont-style', get_template_directory_uri() . '/assets/fonts/font-awesome-4.3.0/css/font-awesome.css');


    wp_enqueue_style('bootstrap-style','https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css');
    wp_enqueue_style('swiper-style','https://unpkg.com/swiper/css/swiper.min.css');
    wp_enqueue_style('Sketchetik-style','https://db.onlinewebfonts.com/c/384932de4cd69a93678d29c787b0281b?family=Sketchetik');

    wp_enqueue_style("pick_studio",get_stylesheet_uri());




    wp_enqueue_script('swiper-script','https://unpkg.com/swiper/js/swiper.min.js',array(),null,true);
    wp_enqueue_script('jquery-script','https://code.jquery.com/jquery-3.5.1.min.js',array(),null,false);
    wp_enqueue_script('popper-script','https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js',array(),null,true);
    wp_enqueue_script('bootstrap-script','https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js',array(),null,false);
    wp_enqueue_script('main-script',get_template_directory_uri() . '/assets/js/script.js',array(),null,true);

};

add_theme_support('custom-logo');
add_theme_support('post-thumbnails');
add_theme_support('menus');

add_filter('nav_menu_link_attributes', 'filter_nav_menu_link_attributes',10,3);

function filter_nav_menu_link_attributes($atts,$item,$args){

    if($args->menu=== 'Main'){
        $atts['class']='nav-link navSketchetik';
    }
    return $atts;
}

/*добавляем к li класс*/
add_filter( 'nav_menu_css_class', 'add_my_class_to_nav_menu', 10, 2 );
function add_my_class_to_nav_menu( $classes, $item ){
       $classes[] = 'nav-item';

    return $classes;
}





?>