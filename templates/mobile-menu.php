<?php
if ($GLOBALS['TL_LANGUAGE'] === 'de') {

    $home = 'Startseite';
    $phosphor = 'phosphor-rückgewinnung';
    $product = 'unsere produkte';
    $service = 'unser angebot';
    $policy = 'datenschutz';
    $imprint = 'impressum';
    $contact = 'kontakt';

    //Links
    $home_link = 'home.html';
    $contact_link = 'kontakt.html';
    $policy_link = 'datenschutz.html';
    $imprint_link = 'impressum.html';
    $phosphor_link = 'phosphor.html';
    $products_link = 'produkte.html';
    $services_link = 'angebot.html';

} elseif ($GLOBALS['TL_LANGUAGE'] === 'en') {

    $home = 'home';
    $phosphor = 'phosphate recycling';
    $product = 'our products';
    $service = 'our services';
    $policy = 'privacy policy';
    $imprint = 'imprint';
    $contact = 'contact';

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

<ul class="mobile-menu-list">
    <div class="mobile-menu-close-button"><a href="#" data-mobile-menu="close">&times;</a></div>
    <li class="mobile-menu-option"><a href="<?= $home_link; ?>"><?= $home; ?></a></li>
    <li class="mobile-menu-option"><a href="<?= $phosphor_link; ?>"><?= $phosphor; ?></a></li>
    <li class="mobile-menu-option"><a href="<?= $products_link; ?>"><?= $product; ?></a></li>
    <li class="mobile-menu-option"><a href="<?= $services_link; ?>"><?= $service; ?></a></li>
    <li class="mobile-menu-option"><a href="<?= $policy_link; ?>"><?= $policy; ?></a></li>
    <li class="mobile-menu-option"><a href="<?= $imprint_link; ?>"><?= $imprint; ?></a></li>
    <li class="mobile-menu-option"><a href="<?= $contact_link; ?>"><?= $contact; ?></a></li>
    <br><br>
    <li class="mobile-menu-option">{{insert_module::7}}</li>

</ul>