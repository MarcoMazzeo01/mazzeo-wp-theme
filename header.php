<?php

/**
 * Header template.
 * 
 * @package Mazzeo
 */

?>

<!DOCTYPE html>
<html lang="<?php get_language_attributes() ?>">

<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head() ?>
    <!-- wp_head() invokes style.css and other scripts thru wordpress' api; mandatory -->

</head>

<body <?php body_class() ?>>

    <?php
    if (function_exists('wp_body_open')) {
        wp_body_open();
    }
    ?>

    <div id="page" class="site">
        <header id="masthead" class="site-header" role="banner">
            <?php get_template_part('template-parts/header/nav') ?>
        </header>
        <div id="content" class="site-content"></div>
    </div>