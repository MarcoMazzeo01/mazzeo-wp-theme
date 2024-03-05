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
        wp_die('hello');
        //load class
        $this->set_hooks();
    }

    protected function set_hooks()
    {
        //actions and filters;
    }
}