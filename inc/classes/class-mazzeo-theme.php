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
        Assets::get_instance();
        $this->setup_hooks();
    }

    protected function setup_hooks()
    {
        //actions

    }
}
