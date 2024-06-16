<?php

// Démarrer la session
if(session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Désactiver l'éditeur de texte Gutenberg de Wordpress :
add_filter('use_block_editor_for_post', '__return_false');

register_nav_menu('nav_principale', 'Navigation principale');



function pf_enqueue_styles() {
    wp_enqueue_style('main-style', get_template_directory_uri() . '/assets/css/main.css');
}
add_action('wp_enqueue_scripts', 'pf_enqueue_styles');

function pf_asset(string $file): string
{
    return get_template_directory_uri() . $file;
}



