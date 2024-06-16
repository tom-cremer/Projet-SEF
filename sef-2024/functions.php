<?php

// Démarrer la session
if(session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Désactiver l'éditeur de texte Gutenberg de Wordpress :
add_filter('use_block_editor_for_post', '__return_false');

register_nav_menu('nav_principale', 'Navigation principale');
register_nav_menu('footer_nav', 'Navigation secondaire, pied de page');
register_nav_menu('footer_legal', 'Liens légaux');
register_nav_menu('contact', 'Page Contact');

add_theme_support('title_tag');


function pf_enqueue_styles() {
    wp_enqueue_style('main-style', get_template_directory_uri() . '/assets/css/main.css');
}
add_action('wp_enqueue_scripts', 'pf_enqueue_styles');

function pf_asset(string $file): string
{
    return get_template_directory_uri() . $file;
}

function pf_get_navigation_links(string $location): array
{
    // Pour $location, retrouver le menu.
    $locations = get_nav_menu_locations();
    $menuId = $locations[$location] ?? null;

    // Au cas où il n'y a pas de menu assignés à $location, renvoyer un tableau de liens vide.
    if(is_null($menuId)) {
        return [];
    }

    // Pour ce menu, récupérer les liens
    $items = wp_get_nav_menu_items($menuId);

    // Formater les liens en objets pour ne garder que "URL" et "label" comme propriétés
    foreach ($items as $key => $item) {
        $items[$key] = new stdClass();
        $items[$key]->url = $item->url;
        $items[$key]->label = $item->title;
    }

    // Retourner le tableau de liens formatés
    return $items;
}

