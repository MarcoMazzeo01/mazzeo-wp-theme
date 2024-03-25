<?php

/**
 * No Content found template
 * 
 * @package mazzeo
 */

?>

<section class="no-result not-found">
    <header class="page-header">
        <h1 class="page-title">
            <?php
            esc_html_e('Nessun post trovato :(', 'mazzeo');
            ?>
        </h1>
    </header>

    <div class="page-content">
        <?php
        if (is_home() && current_user_can('publish_posts')) {
        ?>
            <p>

                <?php

                printf(
                    wp_kses(
                        __('Pronto a postare? <a href="%s">Inizia da qui!</a>', 'mazzeo'),
                        [
                            'a' => [
                                'href' => []
                            ]
                        ]
                    ),
                    esc_url(admin_url('post-new.php'))
                )
                ?>
            <?php
        }
            ?>
    </div>
</section>