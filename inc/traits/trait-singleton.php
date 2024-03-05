<?php

namespace mazzeo\Inc\Traits;

trait Singleton
{
    public function __construct()
    {
    }

    public function __clone()
    {
    }

    final public static function get_instance()
    {
        static $instance = [];
        $called_class = get_called_class(); //built-in php function; Gets the name of the class the static method is called in.

        if (!isset($instance[$called_class])) {
            $instance[$called_class] = new $called_class();

            do_action(sprintf('mazzeo_singleton_inits%s', $called_class));
        }

        return $instance[$called_class];
    }
}