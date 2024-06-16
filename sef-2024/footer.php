<footer class="site-footer" itemscope itemtype="https://schema.org/WPFooter">
    <div class="footer-container">
        <div class="footer-logo" itemscope itemtype="https://schema.org/Organization">
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
                <span itemprop="name"><?= get_field('brand_name'); ?></span>
            <?php else: ?>
                <span itemprop="name">SEF</span>
            <?php endif; ?>


        </div>
        <div class="footer-column" itemscope itemtype="https://schema.org/SiteNavigationElement">
            <h4>NAVIGATION</h4>
            <ul>
                <?php foreach (pf_get_navigation_links('footer_nav') as $link): ?>
                    <li><a href="<?= $link->url ?>" itemprop="url"><?= $link->label ?></a></li>
                <?php endforeach; ?>
            </ul>
        </div>
        <div class="footer-column" itemscope itemtype="https://schema.org/SiteNavigationElement">
            <h4>LEGAL</h4>
            <ul>
                <li><a href="#" itemprop="url">Mentions Légales</a></li>
                <li><a href="#" itemprop="url">Politique de Confidentialité</a></li>
                <li><a href="#" itemprop="url">Conditions Générales</a></li>
            </ul>
        </div>

        <div class="footer-contact">
            <?php foreach (pf_get_navigation_links('contact') as $link): ?>
                <a href="<?= $link->url ?>" class="contact-button" itemprop="url"><?= $link->label ?></a>
            <?php endforeach; ?>
            <a class="mail" href="mailto:contact@sef-asbl.com">contact@sef-asbl.com</a>
            <p>BE43 2400 2934 2201</p>
        </div>
    </div>
    <div class="footer-bottom">
        <p>&copy; 2024 <?php if (get_field('brand_name')): ?>
                <?= get_field('brand_name'); ?>
            <?php else: ?>
                SEF
            <?php endif; ?> - Développé par <span itemprop="creator">Cremer Tom</span></p>
    </div>
</footer>
</body>
</html>