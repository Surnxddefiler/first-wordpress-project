<?php
add_action('wp_enqueue_scripts', 'style_theme');
add_action('after_setup_theme', 'menu');

function style_theme(){
    wp_enqueue_style('style', get_stylesheet_uri());
}
function menu(){
    register_nav_menu('primary', 'headerMenu');
    register_nav_menu('secondary', 'footerNav');
    add_filter( 'excerpt_length', function(){
        return 20;
    } );
    // add_theme_support( 'post-thumbnails', array('marketplaces') );
}
?>
