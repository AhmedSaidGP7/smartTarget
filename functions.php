<?php

function smartTarget_regsiter_styles(){
    wp_enqueue_style('SmartTarget-bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" , array(), '1.0', 'all');
    wp_enqueue_style('SmartTarget-fontawesome', "https://use.fontawesome.com/releases/v5.15.4/css/all.css", array(), '1.0', 'all');
    wp_enqueue_style('SmartTargetStyle', get_template_directory_uri() . "/assets/css/style.css", array(), '1.0', 'all');

}

add_action('wp_enqueue_scripts', 'smartTarget_regsiter_styles');

?>