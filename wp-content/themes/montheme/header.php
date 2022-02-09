<!DOCTYPE html>
<html <?php language_attributes() ?>> <!-- change la langue dynamiquement -->
<head>
    <meta charset="<?php bloginfo('charset') ?>"> <!-- va chercher les informations du site -->
    <title><?php bloginfo('name');wp_title(' - ') ?></title>
    <link rel="stylesheet" href="<?= THEME_URI ?>/style.css">
    <?php wp_head() ?>
</head>
<body>
    <nav class="nav-container">
        <ul id="logo">
            <li><?php the_custom_logo() ?></li>
        </ul>
        <!-- permet de dire au systeme que le menu doit s'afficher ici -->
        <?php wp_nav_menu([
            // identifiant du menu
            'theme_location' => 'primary',
            // ajouter un id dans l'html
            'menu_id' => 'main-menu',
            'menu_class' => 'menuTop'
        ]) ?>
    </nav>
    
    <div class="container">