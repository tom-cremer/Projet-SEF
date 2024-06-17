<?php get_header(); ?>

<?php if (have_posts()): while (have_posts()): the_post(); // Ouverture de "The Loop" de Wordpress?>

    <div class="color-back right top xl gradient"></div>
    <div class="color-back right top b-8 xl"></div>
    <div class="color-back right top b-6 med"></div>
    <div class="color-back right top b-4 small"></div>
    <div class="color-back right top b-3 s-tiny"></div>

    <section class="section first-section">
        <div class="content-block">
            <div class="text">
                <h2 class="title"> <?= get_field('title_section1'); ?><span
                            class="highlight"><?= get_field('word_highlight'); ?></span></h2>
                <p><?= get_field('description_section1'); ?></p>
                <?php foreach (pf_get_navigation_links('contact') as $link): ?>
                    <a href="<?= $link->url ?>" class="btn big" itemprop="url"><?= $link->label ?></a>
                <?php endforeach; ?>
            </div>
            <div class="squares">
                <?php if (get_field('presentation_image')): ?>
                    <img src="<?= get_field('presentation_image')['url'] ?>"
                         alt="<?= get_field('presentation_image')['alt'] ?>" class="relate">
                <?php endif; ?>

                <?php foreach (get_field('tiny_infos') as $tiny): ?>
                    <div class="statistics absolute square">
                        <h3 class="number"><?= $tiny['number'] ?></h3>
                        <p class="label"><?= $tiny['name'] ?></p>
                    </div>

                <?php endforeach; ?>

            </div>
        </div>
    </section>
    <section class="citation">
        <h2 class="title-citation"><?= get_field('citation'); ?></h2>
    </section>
    <section class="section second-section">
        <h2 class="hidden">A propos</h2>
        <?php if (get_field('bloc_1')): ?>
            <div class="content-block">

                <?php if (get_field('bloc_1')['image']): ?>
                    <img src="<?= get_field('bloc_1')['image']['url'] ?>"
                         alt="<?= get_field('bloc_1')['image']['alt'] ?>" class="square">
                <?php endif; ?>
                <div class="text">
                    <h3 class="title"><?= get_field('bloc_1')['title']; ?></h3>
                    <p><?= get_field('bloc_1')['texte']; ?></p>
                </div>
            </div>
        <?php endif; ?>

        <?php if (get_field('bloc_2')): ?>
            <div class="content-block">
                <div class="text">
                    <h3 class="title"><?= get_field('bloc_2')['title']; ?></h3>
                    <p><?= get_field('bloc_2')['texte']; ?></p>
                </div>
                <?php if (get_field('bloc_2')['image']): ?>
                    <img src="<?= get_field('bloc_2')['image']['url'] ?>"
                         alt="<?= get_field('bloc_2')['image']['alt'] ?>" class="square">
                <?php endif; ?>
            </div>
        <?php endif; ?>
        <?php if (get_field('bloc_3')): ?>
            <div class="content-block">
                <?php if (get_field('bloc_3')['image_1']): ?>
                    <img src="<?= get_field('bloc_3')['image_1']['url'] ?>"
                         alt="<?= get_field('bloc_3')['image_1']['alt'] ?>" class="square">
                <?php endif; ?>
                <?php if (get_field('bloc_3')['image_2']): ?>
                    <img src="<?= get_field('bloc_3')['image_2']['url'] ?>"
                         alt="<?= get_field('bloc_3')['image_2']['alt'] ?>" class="square">
                <?php endif; ?>
                <div class="text">
                    <h3 class="title"><?= get_field('bloc_3')['title']; ?></h3>
                    <p><?= get_field('bloc_3')['texte']; ?></p>
                </div>
            </div>
        <?php endif; ?>
    </section>

    <section class="third-section">
        <div class="color-back left top b-6 large"></div>
        <div class="color-back left top b-4 med"></div>
        <div class="color-back left top b-3 tiny"></div>
        <h2><?= get_field('title_section3'); ?></h2>
        <div class="row">
            <div class="col">
                <div class="tabs">
                    <?php foreach (get_field('services') as $service):
                        if (strlen($service['service_title']) > 0):?>
                            <div class="tab">
                                <input type="checkbox" id="<?= $service['service_title']; ?>">
                                <label class="tab-label"
                                       for="<?= $service['service_title']; ?>"><?= $service['service_title']; ?></label>
                                <div class="tab-content">
                                    <p><?= $service['description']; ?></p>
                                </div>
                            </div>
                        <?php endif; endforeach; ?>

                </div>
            </div>
    </section>

<?php endwhile; endif; // Fin de "The Loop"?>
<?php get_footer(); ?>
