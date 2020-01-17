<?php
if ($GLOBALS['TL_LANGUAGE'] === 'de') {

    $home = 'Unsere Partner';
    $policy = 'Datenschutz';
    $imprint = 'Impressum';
    $contact = 'Kontakt';
    $phosphor1 = 'phosphor-';
    $phosphor2 = 'rückgewinnung';
    $product1 = 'unsere';
    $product2 = 'produkte';
    $service1 = 'unser';
    $service2 = 'angebot';

} elseif ($GLOBALS['TL_LANGUAGE'] === 'en') {

    $home = 'Partnerships';
    $policy = 'Privacy Policy';
    $imprint = 'Imprint';
    $contact = 'Contact';
    $phosphor1 = 'phosphate';
    $phosphor2 = 'recycling';
    $product1 = 'our';
    $product2 = 'products';
    $service1 = 'our';
    $service2 = 'services';

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
                        <a href="home.html#partner">
                            <span><?= $home; ?></span>
                        </a>
                    </li>
                    <li class="meta-option">
                        <a href="kontakt.html">
                            <span><?= $contact; ?></span>
                        </a>
                    </li>
                    <li class="meta-option">
                        <a href="datenschutz.html">
                            <span><?= $policy; ?></span>
                        </a>
                    </li>
                    <li class="meta-option">
                        <a href="impressum.html">
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
                <source type="video/mp4" src="files/video/bild_mit_grafik_Startseite.mp4" title="bild_mit_grafik_Startseite.mp4">
            </video>
            <div class="teaser-overlay-long"></div>
            <div class="teaser-navigation">
                <a href="home.html">
                    <div class="teaser-option option-active">
                        <div class="teaser-option-icon pontes-icon"><img src="files/images/layout/logo-white-no-slogan.png"></div>
                        <div class="option-underline">
                            <span>Pontes <br class="teaser-option-break">Pabuli</span>
                        </div>
                    </div>
                </a>
                <a href="phosphor.html">
                    <div class="teaser-option">
                        <div class="teaser-option-icon phosphor-icon"><img src="files/images/layout/phosphor.svg"></div>
                        <div class="option-underline">
                            <span><?= $phosphor1; ?><br class="teaser-option-break"><?= $phosphor2; ?></span>
                        </div>
                    </div>
                </a>
                <a href="produkte.html">
                    <div class="teaser-option">
                        <div class="teaser-option-icon product-icon"><img src="files/images/layout/produkte.svg"></div>
                        <div class="option-underline">
                            <span><?= $product1; ?> <br class="teaser-option-break"><?= $product2; ?></span>
                        </div>
                    </div>
                </a>
                <a href="angebot.html">
                    <div class="teaser-option">
                        <div class="teaser-option-icon services-icon"><img src="files/images/layout/angebot.svg"></div>
                        <div class="option-underline">
                            <span><?= $service1; ?><br class="teaser-option-break"><?= $service2; ?></span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="teaser-overlay">
                <div class="teaser-headline">
                    <img src="files/images/layout/logo-white.png">
                </div>
                <div class="mobile-logo">
                    <img src="files/images/layout/logo-white.svg">
                </div>
            </div>
        </div>
    </div>
</div>