<?php

/**
 * Theme functions.
 * 
 * @package Mazzeo
 */

function mazzeo_enqueue_scripts()
{
    wp_register_style('style-css', get_stylesheet_uri(), [], filemtime(get_template_directory() . '/style.css'), 'all');
    // filemtime() returns a timestamp (unix) of the last edit of the given file passed as param, in this case the style.css file; 
    //this is to prevent having to hard-refresh during development if the caches save old versions of the project.

    wp_register_script('main-js', get_template_directory_uri() . '/assets/main.js', [], filemtime(get_template_directory() . '/assets/main.js'), true);

    wp_enqueue_style('style-css');
    wp_enqueue_script('main-js');
};

add_action('wp_enqueue_scripts', 'mazzeo_enqueue_scripts');
