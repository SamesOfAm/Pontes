<?php
if ($GLOBALS['TL_LANGUAGE'] === 'de') {

    $home = 'Unsere Partner';
    $policy = 'Datenschutz';
    $imprint = 'Impressum';
    $contact = 'Kontakt';
    $phosphor1 = 'phosphor-<br class="teaser-option-break">rückgewinnung';
    $product1 = 'unsere <br class="teaser-option-break">produkte';
    $service1 = 'unser <br class="teaser-option-break">angebot';

    //Links
    $home_link = 'home.html';
    $contact_link = 'kontakt.html';
    $policy_link = 'datenschutz.html';
    $imprint_link = 'impressum.html';
    $phosphor_link = 'phosphor.html';
    $products_link = 'produkte.html';
    $services_link = 'angebot.html';

    //


} elseif ($GLOBALS['TL_LANGUAGE'] === 'en') {

    $home = 'Partnerships';
    $policy = 'Privacy Policy';
    $imprint = 'Imprint';
    $contact = 'Contact';
    $phosphor1 = 'phosphate<br class="teaser-option-break"> recycling';
    $product1 = 'our <br class="teaser-option-break">products';
    $service1 = 'our <br class="teaser-option-break">services';

    //Links
    $home_link = 'home-13.html';
    $contact_link = 'contact.html';
    $policy_link = 'privacy-policy.html';
    $imprint_link = 'imprint.html';
    $phosphor_link = 'phosphate-recycling.html';
    $products_link = 'our-products.html';
    $services_link = 'our-services.html';
};
?>
<div id="header-wrapper">
    <div class="meta-navigation-bar">
        <div class="meta-navigation-content">
            <nav class="meta-navigation">
                <ul>
                    <!-- <li class="meta-option">
                        <a href="home.html">
                            <span>Suche</span><img class="search-icon" src="files/images/layout/search.svg">
                        </a>
                    </li>  -->
                    <li class="meta-option">
                        <a href="<?= $home_link; ?>#partner">
                            <span><?= $home; ?></span>
                        </a>
                    </li>
                    <li class="meta-option">
                        <a href="<?= $contact_link; ?>">
                            <span><?= $contact; ?></span>
                        </a>
                    </li>
                    <li class="meta-option">
                        <a href="<?= $policy_link; ?>">
                            <span><?= $policy; ?></span>
                        </a>
                    </li>
                    <li class="meta-option">
                        <a href="<?= $imprint_link; ?>">
                            <span><?= $imprint; ?></span>
                        </a>
                    </li>
                </ul>
            </nav>
            {{insert_module::7}}
        </div>
    </div>
    <div class="teaser-wrapper">
        <div class="teaser">
            <video class="teaser-video" autoplay loop width="100%" height="auto">
                <source type="video/mp4" src="files/video/<?= $GLOBALS['objPage']->cssClass; ?>.mp4" title="bild_mit_grafik_Startseite.mp4">
            </video>
            <div class="teaser-overlay-long"></div>
            <div class="teaser-navigation">
                <a href="<?= $home_link; ?>">
                    <div class="teaser-option <?php if($GLOBALS['objPage']->alias === 'home' || $GLOBALS['objPage']->alias === 'home-13'): ?>option-active<?php endif; ?>">
                        <div class="teaser-option-icon pontes-icon"><img src="files/images/layout/logo-white-no-slogan.png"></div>
                        <div class="option-underline">
                            <span>Pontes <br class="teaser-option-break">Pabuli</span>
                        </div>
                    </div>
                </a>
                <a href="<?= $phosphor_link; ?>">
                    <div class="teaser-option <?php if($GLOBALS['objPage']->alias === 'phosphor' || $GLOBALS['objPage']->alias === 'phosphate-recycling'): ?>option-active<?php endif; ?>">
                        <div class="teaser-option-icon phosphor-icon"><img src="files/images/layout/phosphor.svg"></div>
                        <div class="option-underline">
                            <span><?= $phosphor1; ?></span>
                        </div>
                    </div>
                </a>
                <a href="<?= $products_link; ?>">
                    <div class="teaser-option <?php if($GLOBALS['objPage']->alias === 'produkte' || $GLOBALS['objPage']->alias === 'our-products'): ?>option-active<?php endif; ?>">
                        <div class="teaser-option-icon product-icon"><img src="files/images/layout/produkte.svg"></div>
                        <div class="option-underline">
                            <span><?= $product1; ?></span>
                        </div>
                    </div>
                </a>
                <a href="<?= $services_link; ?>">
                    <div class="teaser-option <?php if($GLOBALS['objPage']->alias === 'angebot' || $GLOBALS['objPage']->alias === 'our-services'): ?>option-active<?php endif; ?>">
                        <div class="teaser-option-icon services-icon"><img src="files/images/layout/angebot.svg"></div>
                        <div class="option-underline">
                            <span><?= $service1; ?></span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="teaser-overlay">
                <div class="teaser-headline">
                    <img src="files/images/layout/logo-white-{{page::language}}.png">
                </div>
                <div class="mobile-logo">
                    <img src="files/images/layout/logo-white.svg">
                </div>
            </div>
        </div>
    </div>
</div>