<?php /* Template Name: Page "Actualité" */ ?>
<?php get_header(); ?>

<div class="color-back left top xl gradient"></div>
<div class="color-back left top b-6 med"></div>
<div class="color-back left top b-4 small"></div>
<div class="color-back left top b-3 s-tiny"></div>


<section class="news-section">
    <div class="news-content" itemscope itemtype="https://schema.org/NewsArticle">
        <h2 class="news-title"><span><?= get_field('titre'); ?></span> <span itemprop="name"
                                                                             class="highlight"><?= get_field('highlight'); ?></span>
        </h2>
        <p class="news-description" itemprop="description"><?= get_field('description'); ?></p>
    </div>
    <div class="news-image">
        <?php if (get_field('image')): ?>
            <img src="<?= get_field('image')['url']; ?>" alt="<?= get_field('image')['alt']; ?>" class="square"
                 itemprop="image">
        <?php endif; ?>
    </div>
</section>

<section class="event-section">
    <h2>News</h2>
    <div class="event-cards" itemscope itemtype="https://schema.org/Event">
        <?php if (have_posts()): while (have_posts()): the_post(); // Ouverture de "The Loop" de Wordpress ?>
            <?php
            // Créer une nouvelle requête Wordpress pour récupérer mes 3 derniers projets en date.

            $articles = new WP_Query([
                'post_type' => 'event',
                'post_status' => 'publish',
                'posts_per_page' => 7,
                'orderby' => 'date',
                'order' => 'DESC',
            ]);
            ?>


            <?php
            // Boucler via "The Loop" sur le résultat de cette requête
            if ($articles->have_posts()): while ($articles->have_posts()): $articles->the_post();
                ?>
                <article class="event-card">
                    <?php if (get_field('image')): ?>
                        <img src="<?= get_field('image')['url']; ?>" alt="<?= get_field('image')['alt']; ?>"
                             itemprop="image">
                    <?php endif; ?>
                    <div class="event-info">
                        <h3 itemprop="name"><?= get_field('titre'); ?></h3>
                        <p class="date" itemprop="date"><?= get_field('date'); ?></p>
                        <p itemprop="description"><?= get_field('description'); ?></p>
                        <a href="<?= get_permalink(); ?>" class="event-link" itemprop="url">Voir l'article</a>
                    </div>
                </article>
            <?php endwhile; endif; // Fin de "The Loop" des recettes ?>

        <?php endwhile; endif; // Fin de "The Loop" des recettes ?>

    </div>
    <!--    <div class="event-button">
        <a href="<?php /*= get_field('actualite'); */ ?>" class="see-more">Voir Plus</a>
    </div>-->
</section>



<?php get_footer(); ?>
