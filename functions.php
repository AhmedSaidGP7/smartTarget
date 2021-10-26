<?php

function smartTarget_regsiter_styles(){
    wp-enqueue_style('SmartTargetStyle', get_template_directory_uri() . "/style.css", array(), '1.0', 'all')
}

add_action('wp-enqueue_scripts', 'smartTarget_regsiter_styles' )

?>