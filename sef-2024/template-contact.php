<?php /* Template Name: Page "Contact" */ ?>
<?php get_header();
if (have_posts()): while (have_posts()): the_post(); // Ouverture de "The Loop" de Wordpress?>

<section class="contact-section" itemscope itemtype="https://schema.org/ContactPage">
    <div class="contact-info" itemscope itemtype="https://schema.org/Organization">
        <h2 class="title"><?= get_field('title'); ?></h2>
        <p class="description"><?= get_field('text'); ?></p>
        <address itemprop="address" itemscope itemtype="https://schema.org/PostalAddress">
            <h3 class="title">Nos Coordonnées</h3>
            <p class="info">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                     stroke="#52B6FF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                     class="lucide lucide-phone icon">
                    <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
                </svg>
                <span itemprop="telephone"><?= get_field('contact_infos')['phone']; ?></span></p>
            <p class="info">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                     stroke="#52B6FF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                     class="lucide lucide-mail icon">
                    <rect width="20" height="16" x="2" y="4" rx="2"/>
                    <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/>
                </svg>
                <span itemprop="email"><?= get_field('contact_infos')['mail']; ?></span></p>
            <p class="info">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                     stroke="#52B6FF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                     class="lucide lucide-map-pin icon">
                    <path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/>
                    <circle cx="12" cy="10" r="3"/>
                </svg>
                <span itemprop="streetAddress"><?= get_field('contact_infos')['address']['rue']; ?></span>, <span itemprop="postalCode"><?= get_field('contact_infos')['address']['postal_code']; ?></span> <span
                        itemprop="addressLocality"><?= get_field('contact_infos')['address']['localite']; ?></span></p>
        </address>
    </div>
    <form class="contact-form" action="#" method="post" itemscope itemtype="https://schema.org/ContactForm">
        <fieldset class="form-group">
            <label for="nom">Nom</label>
            <input type="text" id="nom" name="nom" placeholder="Doe" required>
        </fieldset>
        <fieldset class="form-group">
            <label for="prenom">Prénom</label>
            <input type="text" id="prenom" name="prenom" placeholder="John" required>
        </fieldset>
        <fieldset class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="john.doe@gmail.com" required>
        </fieldset>
        <fieldset class="form-group">
            <label for="telephone">Numéro de téléphone</label>
            <input type="tel" id="telephone" name="telephone" placeholder="<?= get_field('contact_infos')['phone']; ?>" required>
        </fieldset>
        <fieldset class="form-group">
            <label for="sujet">Sujet</label>
            <input type="text" id="sujet" name="sujet" placeholder="Demande de prise en charge" required>
        </fieldset>
        <fieldset class="form-group">
            <label for="message">Message</label>
            <textarea id="message" name="message" rows="4" placeholder="Votre message ici..." required></textarea>
        </fieldset>
        <button type="submit">Envoyer</button>
    </form>
</section>

<div class="color-back right top xl gradient"></div>
<div class="color-back right top b-8 xl"></div>
<div class="color-back right top b-6 med"></div>
<div class="color-back right top b-4 small"></div>
<div class="color-back right top b-3 s-tiny"></div>

<?php endwhile; endif; // Fin de "The Loop" ?>
<?php get_footer(); ?>
