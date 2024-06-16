<footer class="site-footer" itemscope itemtype="https://schema.org/WPFooter">
    <div class="footer-container">
        <div class="footer-logo" itemscope itemtype="https://schema.org/Organization">
            <img itemprop="logo" src="<?= get_field('brand_logo')['url']; ?>" alt="<?= get_field('brand_logo')['alt']; ?>">
            <span itemprop="name"><?= get_field('brand_name'); ?></span>
        </div>
        <div class="footer-column" itemscope itemtype="https://schema.org/SiteNavigationElement">
            <h4>NAVIGATION</h4>
            <ul>
                <li><a href="#" itemprop="url">Accueil</a></li>
                <li><a href="#" itemprop="url">Actualités</a></li>
                <li><a href="#" itemprop="url">Équipe</a></li>
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
            <a href="#" class="contact-button">Contact</a>
            <a class="mail" href="mailto:contact@sef-asbl.com">contact@sef-asbl.com</a>
            <p>BE43 2400 2934 2201</p>
        </div>
    </div>
    <div class="footer-bottom">
        <p>&copy; 2024 SEF - Développé par <span itemprop="creator">Cremer Tom</span></p>
    </div>
</footer>
</body>
</html>