<?php /* Template Name: Page "Politique de confidentialité" */ ?>
<?php get_header(); ?>
    <div class="color-back right top xl gradient"></div>
    <div class="color-back right top b-8 xl"></div>
    <div class="color-back right top b-6 med"></div>
    <div class="color-back right top b-4 small"></div>
    <div class="color-back right top b-3 s-tiny"></div>

<?php if (have_posts()): while (have_posts()): the_post(); ?>

    <section class="privacy-container" itemprop="privacyPolicy" itemscope itemtype="https://schema.org/PrivacyPolicy">
        <div class="title-container">
            <h2 class="title" itemprop="headline"><?= get_field('titre'); ?></h2>
            <p><strong>Dernière mise à jour : <span
                            itemprop="dateModified"><?= get_the_modified_date(); ?></span></strong></p>
        </div>

        <div class="personnal-info">
            <h2>INFORMATIONS PERSONNELLES RECUEILLIES</h2>
            <h3><?= get_field('personnal-info')['titre']; ?></h3>
            <p><?= get_field('personnal-info')['texte']; ?></p>
            <ul>
                <?php foreach (get_field('personnal-info')['infos'] as $info): ?>
                    <li itemprop="name"><p><?= $info ?></p></li>
                <?php endforeach; ?>
            </ul>
        </div>

        <div class="use-info">
            <h2>UTILISATION DE VOS INFORMATIONS PERSONNELLES</h2>
            <p><?= get_field('use-info')['texte']; ?></p>
            <ul>
                <?php foreach (get_field('use-info')['usage'] as $use): ?>
                    <li itemprop="name"><p><?= $use ?></p></li>
                <?php endforeach; ?>
            </ul>
        </div>

        <div class="sharing-info">
            <h2>PARTAGE DE VOS INFORMATIONS PERSONNELLES</h2>
            <p><?= get_field('sharing-info')['texte']; ?></p>
            <ul>
                <li><p><?= get_field('sharing-info')['exception']; ?></p></li>
            </ul>
        </div>

        <div class="cookies">
            <h2>COOKIES</h2>
            <p><?= get_field('cookies'); ?></p>

        </div>

        <div class="rights">
            <h2>VOS DROITS</h2>
            <p><?= get_field('rights'); ?></p>
        </div>
        <div class="retention">
            <h2>RÉTENTION DES DONNÉES</h2>
            <p><?= get_field('retention'); ?></p>
        </div>

        <div class="changements">
            <h2>CHANGEMENTS</h2>
            <p><?= get_field('changements'); ?></p>
        </div>
        <div class="contact">
            <h2>NOUS CONTACTER</h2>
            <p><?= get_field('contact')['texte']; ?></p>
            <ul>
                <li><a href="mailto:<?= get_field('contact')['mail']; ?>"><?= get_field('contact')['mail']; ?></a></li>
                <li><p><?= get_field('contact')['adresse']; ?></p></li>
            </ul>
        </div>
    </section>
<?php endwhile; endif; ?>

<?php get_footer(); ?>