<?php

/**
 * Enqueue theme assets.
 * 
 * @package Mazzeo
 */

namespace MAZZEO_THEME\Inc;

use MAZZEO_THEME\Inc\Traits\Singleton;

class Assets
{
    use Singleton;

    protected function __construct()
    {
        //load class

        $this->setup_hooks();
    }

    protected function setup_hooks()
    {
        //actions
        add_action('wp_enqueue_scripts', [$this, 'register_styles']);
        add_action('wp_enqueue_scripts', [$this, 'register_scripts']);
    }

    public function register_styles()
    {
        //register style.css
        wp_register_style('style-css', get_stylesheet_uri(), [], filemtime(MAZZEO_DIR_PATH . '/style.css'), 'all');
        // filemtime() returns a timestamp (unix) of the last edit of the given file passed as param, in this case the style.css file; 
        //this is to prevent having to hard-refresh during development if the caches save old versions of the project.

        //register boostrap css
        wp_register_style('bootstrap-css', get_template_directory_uri() . '/assets/src/library/css/bootstrap.min.css', [], false, 'all');

        wp_enqueue_style('style-css'); //enqueue style.css
        wp_enqueue_style('bootstrap-css'); //enqueue bootstrap css
    }

    public function register_scripts()
    {
        //register script.js
        wp_register_script('main-js', get_template_directory_uri() . '/assets/main.js', [], filemtime(MAZZEO_DIR_PATH . '/assets/main.js'), true);

        //register bootstrap js
        wp_register_script('bootstrap-js', get_template_directory_uri() . '/assets/src/library/js/bootstrap.bundle.min.js', ['jquery'], false, true);

        wp_enqueue_script('main-js'); //enqueue script.js
        wp_enqueue_script('bootstrap-js'); //enqueue bootstrap js
    }
}
