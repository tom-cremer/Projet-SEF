<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Accueil - SEF</title>
    <link rel="stylesheet" href="<?= pf_asset('/assets/css/main.css') ?>">
    <?php wp_head(); ?>
</head>
<body>
<header class="header">
    <div class="logo">
        <img src="<?= get_field('brand_logo')['url']; ?>" alt="<?= get_field('brand_logo')['alt']; ?>">
        <h1><?= get_field('brand_name'); ?></h1>
    </div>
    <input type="checkbox" id="burger" class="menu-checkbox hidden" autocomplete="off" aria-expanded="false">
    <label for="burger" class="burger-button">
        <span class="burger-line top"></span>
        <span class="burger-line middle"></span>
        <span class="burger-line bottom"></span>
    </label>
    <nav class="nav">
        <h2 class="hidden"><?= __('Navigation principale', 'pf') ?></h2>
        <ul class="nav-container">
            <li><a href="#" class="nav-links">Accueil</a></li>
            <li><a href="#" class="nav-links">Actualités</a></li>
            <li><a href="#" class="nav-links">Équipe</a></li>
            <li><a href="#" class="nav-links">Le Dépôt <span>↗</span></a></li>
            <li><a href="#Contact" class="btn">Contact</a></li>
        </ul>
    </nav>
</header>