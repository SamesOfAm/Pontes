<?php
if ($GLOBALS['TL_LANGUAGE'] === 'de') {

    $home = 'Startseite';
    $phosphor = 'phosphor-rückgewinnung';
    $product = 'unsere produkte';
    $service = 'unser angebot';
    $policy = 'datenschutz';
    $imprint = 'impressum';
    $contact = 'kontakt';

} elseif ($GLOBALS['TL_LANGUAGE'] === 'en') {

    $home = 'home';
    $phosphor = 'phosphate recycling';
    $product = 'our products';
    $service = 'our services';
    $policy = 'privacy policy';
    $imprint = 'imprint';
    $contact = 'contact';
};
?>

<ul class="mobile-menu-list">
    <div class="mobile-menu-close-button"><a href="#" data-mobile-menu="close">&times;</a></div>
    <li class="mobile-menu-option"><a href="home.html"><?= $home; ?></a></li>
    <li class="mobile-menu-option"><a href="phosphor.html"><?= $phosphor; ?></a></li>
    <li class="mobile-menu-option"><a href="produkte.html"><?= $product; ?></a></li>
    <li class="mobile-menu-option"><a href="angebot.html"><?= $service; ?></a></li>
    <li class="mobile-menu-option"><a href="datenschutz.html"><?= $policy; ?></a></li>
    <li class="mobile-menu-option"><a href="impressum.html"><?= $imprint; ?></a></li>
    <li class="mobile-menu-option"><a href="kontakt.html"><?= $contact; ?></a></li>
    <br><br>
    <li class="mobile-menu-option">{{insert_module::7}}</li>

</ul>