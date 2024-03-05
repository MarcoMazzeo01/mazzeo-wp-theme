<?php

/**
 * Theme functions.
 * 
 * @package Mazzeo
 */


if (!defined('MAZZEO_DIR_PATH')) {
    define('MAZZEO_DIR_PATH', untrailingslashit(get_template_directory()));
}

require_once MAZZEO_DIR_PATH . '/inc/helpers/autoloader.php';

function mazzeo_get_theme_instance()
{
    \MAZZEO_THEME\Inc\MAZZEO_THEME::get_instance(); //create theme class
}

mazzeo_get_theme_instance();


function mazzeo_enqueue_scripts()
{
};

add_action('wp_enqueue_scripts', 'mazzeo_enqueue_scripts');