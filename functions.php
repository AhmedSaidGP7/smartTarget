<?php

function smartTarget_regsiter_styles(){
    wp_enqueue_style('SmartTargetStyle', get_template_directory_uri() . "/assets/css/style.css", array(), '1.0', 'all');
}

add_action('wp_enqueue_scripts', 'smartTarget_regsiter_styles');

?>