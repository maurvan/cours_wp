<?php 
// Pour définir la logique de mon theme

// uniquement du code PHP donc pas besoin de balises fermantes

// définitions des constantes
define('THEME_URI', get_stylesheet_directory_uri());

// hook de cycle de vie de wordpress
add_action('after_setup_theme', function() {
    // registrer mon premier menu
    // le parametre de register nav menus est un tableau dans lequel on va définir les différents menus
    register_nav_menus([
        "primary" => "Menu haut",
        "footer" => "Menu bas"
    ]);

    // permet de rajouter des fonctionnalités à votre theme
    add_theme_support( 'custom-logo', array(
        'height' => 45,
        'width' => 179
    ));
    add_theme_support('post-thumbnails');
});

// hook du cycle de vie permettant l'ajout de feuilles de style ou de scripts
add_action('wp_enqueue_scripts', function() {
    if(is_home()) {
        // si je suis sur la page projet, je charge:
        wp_enqueue_style('projets', THEME_URI . './assets/dist/projets.css');
    };
    if(is_single()) {
        wp_enqueue_style('single', THEME_URI . './assets/dist/single.css');
    };
});

function getRelatedProjects($nbArticle, $id) {

    // wordpress va traduire ceci en SQL pour demander les infos à la DB (via WP_Query)
    $args = [
        'post_type' => ['post'],
        'post_status' => 'publish',
        'post__not_in' => [$id], // pour ne pas inclure le post ou on est dessus
        'post_per_page' => $nbArticle,
        'order_by' => 'publish_date',
        'order' => 'desc'
    ];

    return new WP_Query($args);
};

/* on peut modifier des fonctions wordpress existantes en ajoutant un filtre

add_filter('get_the_title', function($content) {
    return '♥' . $content; // <- ajoute un coeur avant chaque titre
}); */

add_filter('excerpt_length', function($length) {
    return $length / 5; // on manipule l'ancienne longeur
});