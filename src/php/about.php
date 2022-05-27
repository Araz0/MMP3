<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<?php
$pagetitle = "About | Rundgang FH-Salzburg";
require "components/head.php";
?>

<body>
    <?php // $captcha_image_path = "media/logo-icon.png"; include 'components/captcha.php';
    ?>

    <?php require "components/nav.php"; ?>
    <main>
        <section class="section-hero tickets-hero">
            <img class="tickets-hero__hero-img" src="/media/About.svg" sizes="(max-width: 480px) 120px"
                alt="rundgang pixelated text">
            <span class="tickets-hero__hero-span">
            </span>
            <div class="section-hero__content">
                <p>
                    Als Bachelorabslovent*innen der FH Salzburg beschäftigen uns wir in unseren Projekten neben
                    technischen Neuerungen vor allem mit kritischen Fragestellungen. Damit zeigen wir, dass wir keine
                    Roboter sind und uns solche Themen nicht egal sind! Mit dem Rundgang verschaffen wir dem
                    Abschlussjahrgang 2022 die Möglichkeit dies der Öffentlichkeit zu präsentieren.
                </p>
                <div class="section-hero__content__media">
                    <img src="/media/logo-icon-big.png" alt="Rundgang Logo Icon Big">
                </div>
            </div>
        </section>
        <div class="about_container">

        </div>

    </main>

    <?php require "components/footer.php"; ?>
</body>
<script src="/js/captcha.js"></script>
<script src="/js/burgerMenuHandler.js"></script>

</html>