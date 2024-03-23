<?php

/**
 * Main template file.
 * 
 * @package Mazzeo
 */

get_header()
?>


<div class="content">


    <div class="container">
        <?php
        // echo 'Directory: </br>';
        // echo get_template_directory() . '</br>';
        // echo 'URI: </br>';
        // echo get_template_directory_uri();
        esc_html_e('Content Index', 'mazzeo');
        ?>
    </div>
</div>

<?php get_footer();
