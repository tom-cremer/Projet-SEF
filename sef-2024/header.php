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
    <div class="logo" itemscope itemtype="https://schema.org/Organization">
        <?php if (get_field('brand_logo')): ?>
            <img src="<?= get_field('brand_logo')['url']; ?>" alt="<?= get_field('brand_logo')['alt']; ?>">
        <?php else: ?>
            <svg xmlns="http://www.w3.org/2000/svg" width="49" height="48.154" viewBox="0 0 49 48.154">
                <path id="Vector"
                      d="M14.667,43H9.778A9.854,9.854,0,0,1,0,33.071V17.451A9.963,9.963,0,0,1,4.71,8.96L16.932,1.438a9.65,9.65,0,0,1,10.136,0L39.29,8.96A9.962,9.962,0,0,1,44,17.451v15.62A9.854,9.854,0,0,1,34.222,43H29.333m0,0V33.071a7.334,7.334,0,1,0-14.667,0V43m14.667,0H14.667"
                      transform="translate(2.5 2.654)" fill="none" stroke="#5bbaff" stroke-linecap="round"
                      stroke-linejoin="round" stroke-width="5"/>
            </svg>
        <?php endif; ?>
        <?php if (get_field('brand_name')): ?>
            <h1 itemprop="name"><?= get_field('brand_name'); ?></h1>
        <?php else: ?>
            <h1 itemprop="name">SEF</h1>
        <?php endif; ?>
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
            <?php
            $links = pf_get_navigation_links('nav_principale');
            $total_links = count($links);
            $counter = 0;
            foreach ($links as $link):
                $counter++;
                $class = ($counter === $total_links) ? 'btn' : 'nav-links';
                ?>
                <li><a href="<?= $link->url ?>" class="<?= $class ?>"><?= $link->label ?></a></li>
            <?php endforeach; ?>
        </ul>
    </nav>

</header>