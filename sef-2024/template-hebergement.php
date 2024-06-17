<?php /* Template Name: Page "Hébergement" */ ?>
<?php get_header(); ?>
<div class="color-back top left med gradient"></div>
<div class="color-back top left b-6 med"></div>
<div class="color-back top left b-4 small"></div>
<div class="color-back top left b-3 s-tiny"></div>
<?php if (have_posts()): while (have_posts()): the_post(); ?>

    <section class="hebergement">
        <h2><?= get_field('titre'); ?></h2>
        <p class="subtitle"><?= get_field('subtitle'); ?></p>
        <div class="step-container">

            <svg xmlns="http://www.w3.org/2000/svg" width="332.45" height="109.584" viewBox="0 0 332.45 109.584">
                <path id="Path_1" data-name="Path 1" d="M5163,3.161c-37.789,86.455-327.66,41.8-327.66,108.583"
                      transform="translate(-4832.84 -2.16)" fill="none" stroke="#5bbaff" stroke-linecap="round"
                      stroke-width="5" stroke-dasharray="14"/>
            </svg>

            <div class="step">
                <div>
                    <span class="step-number">01</span>
                    <h3><?= get_field('step_1')['titre']; ?></h3>
                    <p><?= get_field('step_1')['description']; ?></p>
                </div>
                <div class="image-placeholder">
                    <?php if (get_field('step_1')['image']): ?>
                        <img src="<?= get_field('step_1')['image']['url']; ?>"
                             alt="<?= get_field('step_1')['image']['alt']; ?>" class="square">
                    <?php endif; ?>
                </div>
            </div>

            <svg xmlns="http://www.w3.org/2000/svg" width="612.209" height="162.388" viewBox="0 0 612.209 162.388">
                <path id="Path_2" data-name="Path 2" d="M5308.519,100.011c-45.361-181.288-521.578,11.538-605.82-156"
                      transform="translate(-4699.342 59.345)" fill="none" stroke="#5bbaff" stroke-linecap="round"
                      stroke-width="5" stroke-dasharray="14"/>
            </svg>

            <div class="step reverse">
                <div>
                    <span class="step-number">02</span>
                    <h3><?= get_field('step_2')['titre']; ?></h3>
                    <p><?= get_field('step_2')['description']; ?></p>
                </div>
                <div class="image-placeholder">
                    <?php if (get_field('step_2')['image']): ?>
                        <img src="<?= get_field('step_2')['image']['url']; ?>"
                             alt="<?= get_field('step_2')['image']['alt']; ?>" class="square">
                    <?php endif; ?>
                </div>
            </div>

            <svg xmlns="http://www.w3.org/2000/svg" width="508.078" height="236.619" viewBox="0 0 508.078 236.619">
                <path id="Path_3" data-name="Path 3" d="M4781.442,40.311c-8.814-163.739,481.348-24.768,502.717-231.244"
                      transform="translate(-4778.825 193.677)" fill="none" stroke="#5bbaff" stroke-linecap="round"
                      stroke-width="5" stroke-dasharray="14"/>
            </svg>

            <div class="step">
                <div>
                    <span class="step-number">03</span>
                    <h3><?= get_field('step_3')['titre']; ?></h3>
                    <p><?= get_field('step_3')['description']; ?></p>
                </div>
                <div class="image-placeholder">
                    <?php if (get_field('step_3')['image']): ?>
                        <img src="<?= get_field('step_3')['image']['url']; ?>"
                             alt="<?= get_field('step_3')['image']['alt']; ?>" class="square">
                    <?php endif; ?>
                </div>
            </div>
            <?php if (get_field('additional')): ?>
                <div class="additional-info square">
                    <h3><?= get_field('additional')['titre']; ?></h3>
                    <p><?= get_field('additional')['description']; ?></p>
                </div>
            <?php endif; ?>
            <div class="step">
                <div>
                    <span class="step-number">04</span>
                    <h3><?= get_field('step_4')['titre']; ?></h3>
                    <p><?= get_field('step_4')['description']; ?></p>
                </div>

            </div>
        </div>
    </section>

<?php endwhile; endif; ?>
<?php get_footer(); ?>
