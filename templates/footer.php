<?php
if ($GLOBALS['TL_LANGUAGE'] === 'de') {
    $phone = 'Telefon';
    $country = '';
} elseif ($GLOBALS['TL_LANGUAGE'] === 'en') {
    $phone = 'Phone';
    $country = 'GERMANY';
};
?>

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

<div class="footer-logo">
    <img src="files/images/layout/logo-white.svg">
</div>
<div class="footer-wrapper">
    {{insert_module::9}}

    <div class="footer-info">
        <div class="footer-address">
            <div class="footer-icon"><img src="files/images/layout/address.svg"></div>
            <div class="footer-text">
                pontes pabuli GmbH<br>
                Harkortstraße 8<br>
                04107 Leipzig<br>
                <?= $country ?>
            </div>

        </div>
        <div class="footer-phone">
            <div class="footer-icon"><img src="files/images/layout/phone.svg"></div>
            <div class="footer-text"><a href="tel:+491736586018"><span class="info-desktop"><?= $phone; ?>&nbsp;&nbsp;&nbsp;</span>+49 172 340 10 14</a></div>
        </div>
        <div class="footer-mail">
            <div class="footer-icon"><img src="files/images/layout/mail.svg"></div>
            <div class="footer-text"><a href="mailto:l.leidolph@pontes-pabuli.de"><span class="info-desktop">E-Mail&nbsp;&nbsp;&nbsp;</span>T.Hager@pontes-pabuli.de</a></div>
        </div>
        <div class="info-desktop">{{insert_module::7}}</div>
        <div class="image-mobile">{{insert_module::7}}</div>
    </div>
</div>