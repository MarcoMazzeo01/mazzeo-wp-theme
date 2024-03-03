<?php

/**
 * Theme functions.
 * 
 * @package Mazzeo
 */

function mazzeo_enqueue_scripts()
{
    //register style.css
    wp_register_style('style-css', get_stylesheet_uri(), [], filemtime(get_template_directory() . '/style.css'), 'all');
    // filemtime() returns a timestamp (unix) of the last edit of the given file passed as param, in this case the style.css file; 
    //this is to prevent having to hard-refresh during development if the caches save old versions of the project.

    //register boostrap css
    wp_register_style('bootstrap-css', get_template_directory_uri() . '/assets/src/library/css/bootstrap.min.css', [], false, 'all');

    //register script.js
    wp_register_script('main-js', get_template_directory_uri() . '/assets/main.js', [], filemtime(get_template_directory() . '/assets/main.js'), true);

    //register bootstrap js
    wp_register_script('bootstrap-js', get_template_directory_uri() . '/assets/src/library/js/bootstrap.min.js', ['jquery'], false, true);


    wp_enqueue_style('style-css'); //enqueue style.css
    wp_enqueue_style('bootstrap-css'); //enqueue bootstrap css
    wp_enqueue_script('main-js'); //enqueue script.js
    wp_enqueue_script('bootstrap-js'); //enqueue bootstrap js
};

add_action('wp_enqueue_scripts', 'mazzeo_enqueue_scripts');
