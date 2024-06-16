<?php get_header(); ?>
<?php if (have_posts()): while (have_posts()): the_post(); // Ouverture de "The Loop" de Wordpress ?>

    <section class="article-single" itemscope itemtype="https://schema.org/Article">
        <div class="aside">
            <div class="article-header">
                <h2 class="title" itemprop="headline"><?= get_field('titre'); ?></h2>
                <time datetime="<?= get_field('date'); ?>" itemprop="datePublished"><?= get_field('date'); ?></time>
            </div>
            <div class="image-container">
                <?php if (get_field('image')): ?>
                    <img class="image square" src="<?= get_field('image')['url']; ?>" alt="<?= get_field('image')['alt']; ?>" itemprop="image">
                <?php endif; ?>
            </div>
            <div class="adresse square" itemscope itemtype="https://schema.org/Place">
                <h3 class="title">Adresse</h3>
                <div class="pin" itemprop="address" itemscope itemtype="https://schema.org/PostalAddress">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                         stroke="#52B6FF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                         class="lucide lucide-map-pin">
                        <path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/>
                        <circle cx="12" cy="10" r="3"/>
                    </svg>
                    <p itemprop="streetAddress"><?= get_field('adresse')['rue']; ?>,</p>
                    <p itemprop="postalCode"><?= get_field('adresse')['code_postal']; ?></p>
                    <p itemprop="addressLocality"><?= get_field('adresse')['localite']; ?></p>
                </div>
                <div class="hours">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                         stroke="#52B6FF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                         class="lucide lucide-clock">
                        <circle cx="12" cy="12" r="10"/>
                        <polyline points="12 6 12 12 16 14"/>
                    </svg>
                    <time itemprop="openingHours" datetime="<?= get_field('heure_de_debut')?>-<?= get_field('heure_de_fin') ?>"><?= get_field('heure_de_debut')?>&nbsp;-&nbsp;<?= get_field('heure_de_fin') ?></time>
                </div>
            </div>

        </div>
        <div class="description" itemprop="articleBody">
            <h3 class="title">Description</h3>
            <?php foreach (get_field('paragraphes') as $paragraph): ?>
            <?php if (strlen($paragraph) !== 0): ?>
                <p><?= $paragraph ?></p>
            <?php endif; endforeach; ?>
        </div>

    </section>

<?php endwhile; endif; ?>
<?php get_footer(); ?>
