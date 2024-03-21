<?php

/**
 * Register menus
 * 
 * @package Mazzeo
 */

namespace MAZZEO_THEME\Inc;

use MAZZEO_THEME\Inc\Traits\Singleton;

class Menus
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
        add_action('init', [$this, 'register_menus']);
    }

    public function register_menus()
    {
        register_nav_menus([
            'mazzeo-header-menu' => esc_html__('Header Menu', 'mazzeo'), //second arg is text domain in style.css
            'mazzeo-footer-menu' => esc_html__('Footer Menu', 'mazzeo')
        ]);
    }

    public function get_menu_id($location)
    {
        //get all the locations
        $locations = get_nav_menu_locations();

        //get object id by location
        $menu_id = $locations[$location];

        return !empty($menu_id) ? $menu_id : '';
    }
}
