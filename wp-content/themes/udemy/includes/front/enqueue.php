<?php
function u_enqueue () {
    wp_register_style(
'u_font_rubik', 'https://fonts.googleapis.com/css2?family=Pacifico&family=Rubik:wght@300;400;500;700&display=swap'
    );
    wp_register_style(
        'u_bootstrap', get_theme_file_uri( 'assets/bootstrap-icons/bootstrap-icons.css')
            );
            wp_register_style(
                'u_style', get_theme_file_uri( 'assets/public/index.css' )
                    );
                    wp_enqueue_style('u_font_rubik');
                    wp_enqueue_style('u_bootstrap');
                    wp_enqueue_style('u_style');
}