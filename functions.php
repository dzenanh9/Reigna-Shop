<?php
function load_stylesheets(){
    wp_register_style('main', get_template_directory_uri() . '/assets/css/main.css ', array(), false,'all' );
    wp_enqueue_style('main');

}

add_action('wp_enqueue_scripts', 'load_stylesheets');
?>