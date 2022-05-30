<footer>
    <div class="footer-content__left__logos">
        <?php
        # wrap every Logo in div with the class "logo" and the logo-name as id

        $logos = array(
            "Elements" => "elements_logo.svg",
            "Eurofunk" => "eurofunk_logo.svg",
            "FreshFX" => "freshfx_logo.svg",
            "FS1" => "FS1-logo.svg",
            "Kaun" => "kaun-logo.svg",
            "PixelArt" => "pixelart_logo.svg",
            "Polycular" => "polycular_logo.svg",
            "Stainer" => "print-tattoo-stainer_print_logo.png",
            "Punktvorstrich" => "punktformstrich_logo.svg",
            "RavenAndFinch" => "ravenandfinch_logo.svg",
            "Redox Interactive" => "redoxinteractive_logo.svg",
        );
        ?>
        <?php foreach ($logos as $logo => $logo_name) : ?>
        <div class="footer-content__left__logos__logo" id="<?= $logo ?>">
            <img src="/media/sponsor_logos/<?= $logo_name ?>" alt="<?= $logo ?>">
        </div>
        <?php endforeach; ?>
    </div>
    <div class="footer-content__right">
        <nav>
            <ul>
                <li>
                    <h3>Impressum</h3>
                </li>
            </ul>
        </nav>
        <p>
            Rundgang 2022 <br>Urstein Süd 1<br>A-5412 Puch b. Hallein
            <br><br>
            E-Mail: office@rundgang-fhsalzburg.com<br>Web: www.rundgang-fhsalzburg.com
            <br><br>
            Der Rundgang 2022 ist eine Veranstaltung in Kooperation mit der Fachhochschule Salzburg.
        </p>
    </div>
</footer>