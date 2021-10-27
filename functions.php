<?php


// Title
function smartTarget_theme_support(){
    add_theme_support('title-tag')
}

add_action('after_theme_setup','smartTarget_theme_support')


// Style in head 
function smartTarget_regsiter_styles(){
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('SmartTarget-bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" , array(), '5.1.3', 'all');
    wp_enqueue_style('SmartTarget-fontawesome', "https://use.fontawesome.com/releases/v5.15.4/css/all.css", array(), '5.15.4', 'all');
    wp_enqueue_style('SmartTarget-CairoFont', "https://fonts.googleapis.com/css?family=Cairo&display=swap", array(), '1.0', 'all');
    wp_enqueue_style('SmartTargetStyle', get_template_directory_uri() . "/assets/css/style.css", array(), '1.0', 'all');

}

add_action('wp_enqueue_scripts', 'smartTarget_regsiter_styles');


// JS files in body

function smartTarget_regsiter_scripts(){
    wp_enqueue_script('SmartTarget-bootstrapJS', "https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" , array(), '5.1.3', 'all');
    wp_enqueue_script('SmartTarget-mainJS', get_template_directory_uri() . "/assets/js/main.js", array(), '5.1.3', 'all');
   
}

add_action('wp_enqueue_scripts', 'smartTarget_regsiter_scripts');



?>