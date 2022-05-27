<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<?php
$pagetitle = "Tickets | Rundgang FH-Salzburg";
require "components/head.php";
?>

<body>
    <?php // $captcha_image_path = "media/logo-icon.png"; include 'components/captcha.php';
    ?>

    <?php require "components/nav.php"; ?>
    <main class="tickets-main">
        <section class="section-hero tickets-hero">
            <img class="tickets-hero__hero-img" src="/media/Tickets.svg" sizes="(max-width: 480px) 120px"
                alt="rundgang pixelated text">
            <span class="tickets-hero__hero-span">
                <?php
                $popup_title = "Kinotickets";
                $popup_message = "Achtung, Kinoplätze nur begrenzt verfügbar!";
                include 'components/popup.php';
                ?>
                <?php
                $popup_title = "Kinotickets";
                $popup_message = "Bitte reserviere dir vorab deine kostenlosen Tickets!";
                include 'components/popup.php';
                ?>
            </span>
            <div class="section-hero__content">
                <p>Für das Stadtkino Hallein ist es notwendig kostenlose Tickets zu reservieren. Die Tickets müssen beim
                    Eintritt ins Kino in digitaler oder gedruckter Form vorgewiesen werden. Die Tickets sind übertragbar
                    und es herrscht freie Platzwahl. Auch für das Speeddating ist eine Voranmeldung wichtig, da nur ein
                    begrenztes Platzkontingent zur Verfügung steht.
                </p>
                <div class="section-hero__content__media">
                    <img src="/media/logo-icon-big.png" alt="Rundgang Logo Icon Big">
                </div>
            </div>
        </section>
        <div class="tickets-container">
            <div class="tickets-container__header tickets-container__header__tickets">
                <h3>02/06/2022<br>Stadtkino Hallein</h3>
            </div>
            <div class="tickets-container__tickets">
                <div class="tickets-container__tickets__blocks">
                    <?php
                    $tickets_block_time = "10:00";
                    $tickets_block_id = "1";
                    include "components/tickets_block.php";
                    ?>
                    <?php
                    $tickets_block_time = "12:30";
                    $tickets_block_id = "2";
                    include "components/tickets_block.php";
                    ?>
                    <?php
                    $tickets_block_time = "15:00";
                    $tickets_block_id = "3";
                    include "components/tickets_block.php";
                    ?>
                    <?php
                    $tickets_block_time = "17:15";
                    $tickets_block_id = "4";
                    include "components/tickets_block.php";
                    ?>
                    <?php
                    $tickets_block_time = "19:45";
                    $tickets_block_id = "5";
                    include "components/tickets_block.php";
                    ?>
                </div>
            </div>
            <div class="tickets-container__header tickets-container__header__speeddating">
                <h3>03/06/2022<br>Speeddating</ü>
            </div>
            <div class="tickets-container__speeddating">
                <div class="tickets-container__speeddating__blocks">
                    <?php
                    $speeddating_block_time = "15:00";
                    $speeddating_block_id = "1";
                    include "components/tickets_speeddating_block.php";
                    ?>
                    <?php
                    $speeddating_block_time = "16:15";
                    $speeddating_block_id = "2";
                    include "components/tickets_speeddating_block.php";
                    ?>
                    <?php
                    $speeddating_block_time = "18:30";
                    $speeddating_block_id = "3";
                    include "components/tickets_speeddating_block.php";
                    ?>
                </div>
            </div>
        </div>
        <div class="tickets-spacer">
            <div class="tickets-spacer__popups">
                <?php
                $popup_title = "Speeddating";
                $popup_message = "Super fürs Pflichtpraktikum!";
                include 'components/popup.php';
                ?>
                <?php
                $popup_title = "Speeddating";
                $popup_message = "Melde dich jetzt an, es zahlt sich aus!";
                include 'components/popup.php';
                ?>
                <?php
                $popup_title = "Speeddating";
                $popup_message = "Du magst nicht allein? Geht auch als Gruppe!";
                include 'components/popup.php';
                ?>
            </div>
        </div>

    </main>

    <?php require "components/footer.php"; ?>
</body>
<script src="/js/captcha.js"></script>
<script src="/js/burgerMenuHandler.js"></script>
<script>
const coll = document.getElementsByClassName("tickets-container__block__collapsible");

for (let i = 0; i < coll.length; i++) {
    coll[i].addEventListener("click", function() {
        this.classList.toggle("active");
        const content = this.nextElementSibling;
        if (content.style.maxHeight) {
            content.style.maxHeight = null;
        } else {
            content.style.maxHeight = content.scrollHeight + "px";
            for (let item of coll) {
                if (item !== this) {
                    item.classList.remove("active");
                    item.nextElementSibling.style.maxHeight = null;
                }
            }
        }
    });
}
</script>
<script src="/js/captcha.js"></script>
<script src="/js/burgerMenuHandler.js"></script>
</html>