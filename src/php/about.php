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
    <main class="about-main">
        <section class="section-hero about-hero">
            <img class="about-hero__hero-img" src="/media/About.svg" sizes="(max-width: 480px) 120px"
                alt="rundgang pixelated text">
            <span class="about-hero__hero-span">
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
        <div class="about-container">
            <div class="about-container__blocks">
                <?php
                $person_name = "Alina Traun";
                $person_videolink = "/media/about_faces/alina.gif";
                $person_role = "Konzept, Organisation, Corporate Identity, Plakat, Katalog, Website";
                $bg_dir = 'r';
                $insta_handle = '@alinachristiane';
                include "components/about_entry.php";
                ?>
                <?php
                $person_name = "Anna Sophie Wehmeyer";
                $person_videolink = "/media/about_faces/annaw.gif";
                $person_role = "Social Media, Organisation, Grafik Design";
                $bg_dir = 'r';
                $insta_handle = '@annasophie_wehmeyer';
                include "components/about_entry.php";
                ?>
                <?php
                $person_name = "Luca Carubia";
                $person_videolink = "/media/about_faces/luca.gif";
                $person_role = "Konzept, Animation, Grafik Design";
                $bg_dir = 'l';
                $insta_handle = '@luca.carubia';
                include "components/about_entry.php";
                ?>
                <?php
                $person_name = "Sebastian Scholtze";
                $person_videolink = "/media/about_faces/seb.gif";
                $person_role = "Animation, Katalog, Grafik Design";
                $bg_dir = 'l';
                $insta_handle = '@scholtze_sebastian';
                include "components/about_entry.php";
                ?>
                <?php
                $person_name = "Katja Gröbl";
                $person_videolink = "/media/about_faces/katja.gif";
                $person_role = "Logo, Leitsystem";
                $bg_dir = 'r';
                $insta_handle = '@hellveticaangel';
                include "components/about_entry.php";
                ?>
                <?php
                $person_name = "Anna Klementova";
                $person_videolink = "/media/about_faces/annak.gif";
                $person_role = "Trailer, Interviews, Aftermovie";
                $bg_dir = 'r';
                $insta_handle = '@lo.stinspace';
                include "components/about_entry.php";
                ?>
            </div>
            <div class="about-container__thanks-to">
                <h3 class="about-container__thanks-to__heading">Danke, an alle die uns geholfen haben:</h3>
                <?php
                $person_name = "FH-Prof. Dipl. Designerin Viktoria Schneider-Kirjuchina";
                $person_role = "Projektbetreuung";
                include "components/about_entry_small.php";
                ?>
                <?php
                $person_name = "Araz Al Hamdani";
                $person_role = "Programmierung";
                include "components/about_entry_small.php";
                ?>
                <?php
                $person_name = "Carla Bambauer";
                $person_role = "Organisation";
                include "components/about_entry_small.php";
                ?>
                <?php
                $person_name = "Tobias Türk";
                $person_role = "Audio Branding \nSounddesign";
                include "components/about_entry_small.php";
                ?>
                <?php
                $person_name = "Julius Jung";
                $person_role = "Musik";
                include "components/about_entry_small.php";
                ?>
                <?php
                $person_name = "Daniel Wetzelhütter";
                $person_role = "Visuals";
                include "components/about_entry_small.php";
                ?>
                <?php
                $person_name = "Bakk. Janina Koster";
                $person_role = "Assistenz";
                include "components/about_entry_small.php";
                ?>
                <?php
                $person_name = "FH-Prof. Dipl. DesignerIn (FH), Dipl. Regisseur Till Fuhrmeister";
                $person_role = "Kommunikation";
                include "components/about_entry_small.php";
                ?>
                <div class="about-container__thanks-to__filler"></div>
            </div>
        </div>

    </main>

    <?php require "components/footer.php"; ?>
</body>
<script src="/js/captcha.js"></script>
<script src="/js/burgerMenuHandler.js"></script>

</html>