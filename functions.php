<?php

function hello_elementor_child_enqueue_styles() {

    wp_enqueue_style(
        'hello-elementor-parent',
        get_template_directory_uri() . '/style.css'
    );

    wp_enqueue_style(
        'hello-elementor-child',
        get_stylesheet_uri(),
        array('hello-elementor-parent')
    );
}

add_action('wp_enqueue_scripts', 'hello_elementor_child_enqueue_styles');