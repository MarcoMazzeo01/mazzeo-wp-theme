<?php

/**
 * Bootstraps the theme.
 * Meaning: adds all the basic functionality of a theme.
 * 
 * @package Mazzeo
 */

namespace MAZZEO_THEME\Inc;

use MAZZEO_THEME\Inc\Traits\Singleton;

class MAZZEO_THEME
{
    use Singleton;

    protected function __construct()
    {
        //load class
        Assets::get_instance(); //enqueues style and scripts;
        $this->setup_hooks();
    }

    protected function setup_hooks()
    {
        //actions
        add_action('after_setup_theme', [$this, 'setup_theme']);
    }

    public function setup_theme()
    {
        add_theme_support('title-tag');
        add_theme_support('custom-logo', [
            'header-text' => ['site-title', 'site-description'],
            'height' => 25,
            'width' => 25,
            'flex-height' => false,
            'flex-width' => false,
        ]);

        add_theme_support('custom-background', [
            'default-image' => '',
            'default-color' => '#fff',
        ]);

        add_theme_support('post-thumbnails');
        add_theme_support('customize-selective-refresh-widgets'); //allows customizer preview to update automatically without having to reload
        add_theme_support('automatic-feed-links');

        add_theme_support(
            'html5',
            [
                'search-form',
                'comment-form',
                'comment-list',
                'gallery',
                'caption',
                'script',
                'style',
            ]
        );

        add_editor_style();

        add_theme_support('wp-block-styles');
        add_theme_support('align-wide');
    }
}
