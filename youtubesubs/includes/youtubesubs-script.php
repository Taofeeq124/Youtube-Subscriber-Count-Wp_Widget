<?php
// Add Scripts

function yts_add_scripts(){
    // Add Main Css

    wp_enqueue_style('tys-main-style', plugins_url().'/youtubesubs/css/style.css');

    // Add Main Js

    wp_enqueue_script('tys-main-script', plugins_url().'/youtubesubs/js/main.js');

    // Add Google Script

    wp_register_script('google', 'https://apis.google.com/js/platform.js');
    wp_enqueue_script('google');
}

add_action('wp_enqueue_scripts', 'yts_add_scripts');