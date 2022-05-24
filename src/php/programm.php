<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<?php 
    $pagetitle = "Programm | Rundgang FH-Salzburg";
    require "components/head.php"; 
?>

<body>
    <?php // $captcha_image_path = "media/logo-icon.png"; include 'components/captcha.php';?>
    <?php require "components/nav.php"; ?>
    <main>
        <section class="section-hero program-hero">
            <img class="section-hero__hero-img" srcset="/media/Projekte.png 193w, /media/Projekte.png 278w" sizes="(max-width: 480px) 120px" alt="rundgang pixelated text">
            <span class="program-hero__hero-span"></span>
            <div class="section-hero__content">
                <p>Der Rundgang der FH Salzburg bringt Kreativität und Technologie auf das nächste Level. Die Studierenden von MultiMediaArt, MultiMediaTechnology und Human-Computer Interaction versuchen sich in politische und technologische Neuerungen zu integrieren, um diese für die Zukunft anwenden zu können. Sie beschäftigen sich neben dem Einsatz unterschiedlicher technischer Innovationen und neuen Medien, vor allem auch mit aktuellen, kritischen Fragestellungen und bieten Lösungsvorschläge für die Zukunft an.</p>
                <span></span>
                <!-- <video class="section-hero__content__media" id="hero-logo" autoplay loop>
                    <source src="/media/animations/grey_logo.mp4" type="video/mp4">
                    Your browser does not support HTML video. Please update or use newer browser.
                </video> -->
                <img class="section-hero__content__media" src="/media/logo-icon-big.png" alt="Rundgang Logo Icon Big">
            </div>
        </section>
        <div class="program-container">
            <div class="program-container__header">
                <h3>Donnerstag<br>02/06/2022</h3>
                <h3>Stadtkino Hallein<br>Kuffergasse 2</h3>
            </div>
            <div class="program-container__table">
                
                <div class="program-container__table__list">
                    <?php
                        $program_block_entry_time = "10:00";
                        $program_block_entry_title = "1. Filmblock";
                        $program_block_entry_rfiller = true;
                        $entry_items = array(
                                            array("Sündenbock","/soon.php"),
                                            array("Das verräterische Herz","/soon.php"),
                                            array("Komm, wir gehen.","/soon.php")
                                        );
                        include "components/program_block_entry.php";
                    ?>
                    <?php
                        $program_block_entry_time = "12:30";
                        $program_block_entry_title = "2. Filmblock";
                        $program_block_entry_rfiller = false;
                        $entry_items = array(
                                            array("VERA","/soon.php"),
                                            array("Social Score System","/soon.php"),
                                            array("Kum å ba dia","/soon.php"),
                                            array("La Manera","/soon.php"),
                                            array("Overflow","/soon.php")
                                        );
                        include "components/program_block_entry.php";
                    ?>
                    <?php
                        $program_block_entry_time = "15:00";
                        $program_block_entry_title = "3. Filmblock";
                        $program_block_entry_rfiller = false;
                        $entry_items = array(
                                            array("Namik","/soon.php"),
                                            array("Babushka","/soon.php"),
                                            array("Leo","/soon.php"),
                                            array("FLOCK","/soon.php"),
                                            array("Träume","/soon.php")
                                        );
                        include "components/program_block_entry.php";
                    ?>
                    <?php
                        $program_block_entry_time = "17:15";
                        $program_block_entry_title = "4. Filmblock";
                        $program_block_entry_rfiller = false;
                        $entry_items = array(
                                            array("Sould","/soon.php"),
                                            array("Dreaming Moria","/soon.php"),
                                            array("Journey.","/soon.php"),
                                            array("train cabin","/soon.php"),
                                            array("Express Yourself","/soon.php")
                                        );
                        include "components/program_block_entry.php";
                    ?>
                    <?php
                        $program_block_entry_time = "19:45";
                        $program_block_entry_title = "5. Filmblock";
                        $program_block_entry_rfiller = false;
                        $entry_items = array(
                                            array("Kugellager","/soon.php"),
                                            array("Ein tödliches Wochenende","/soon.php"),
                                            array("Der Erbsenzähler","/soon.php"),
                                            array("The Showdown","/soon.php"),
                                            array("Wer bin ich?","/soon.php"),
                                            array("Saint Jeffery","/soon.php")
                                        );
                        include "components/program_block_entry.php";
                    ?>

                </div>
                
                <div class="program-container__table__filler">
                    
                    <img class="filler-pixels" src="/media/px-bg-trans.png" alt="pixlated background image filler">
                    <img class="filler-pixels" src="/media/px-bg-trans.png" alt="pixlated background image filler">
                    <div class="program-container__table__filler__tickets">
                            <h3 class="program-container__table__filler__tickets__head" >Tickets</h3>
                            <a href="#" class="program-container__table__filler__tickets__link" target="_blank">1. Filmblock</a>
                            <a href="#" class="program-container__table__filler__tickets__link" target="_blank">2. Filmblock</a>
                            <a href="#" class="program-container__table__filler__tickets__link" target="_blank">3. Filmblock</a>
                            <a href="#" class="program-container__table__filler__tickets__link" target="_blank">4. Filmblock</a>
                            <a href="#" class="program-container__table__filler__tickets__link" target="_blank">5. Filmblock</a>
                    </div>
                    <img class="filler-pixels" src="/media/px-bg-trans.png" alt="pixlated background image filler">
                    <?php 
                        $popup_title = "Kinotickets"; 
                        $popup_message = "Bitte reserviere <br>dir vorab deine <br>kostenlosen Tickets!";
                        $popup_id = "Kinotickets_1";
                        include 'components/popup.php';
                    ?>

                    <?php 
                        $popup_title = "Kinotickets"; 
                        $popup_message = "Bitte reserviere <br>dir vorab deine <br>kostenlosen Tickets!";
                        $popup_id = "Kinotickets_1";
                        include 'components/popup.php';
                    ?>
                    <?php 
                        $popup_title = "Kinotickets"; 
                        $popup_message = "Achtung, <br>Kinoplätze <br>nur begrenzt <br>verfügbar!";
                        $popup_id = "Kinotickets_1";
                        include 'components/popup.php';
                    ?>

                    <?php 
                        $popup_title = "Kinotickets"; 
                        $popup_message = "Bitte reserviere <br>dir vorab deine <br>kostenlosen Tickets!";
                        $popup_id = "Kinotickets_1";
                        include 'components/popup.php';
                    ?>
                    <?php 
                        $popup_title = "Kinotickets"; 
                        $popup_message = "Achtung, <br>Kinoplätze <br>nur begrenzt <br>verfügbar!";
                        $popup_id = "Kinotickets_1";
                        include 'components/popup.php';
                    ?>
                </div>
            </div>
            
        </div>
        <div class="program-container">
        <div class="program-container__header">
                <h3>Freitag<br>03/06/2022</h3>
                <h3>FH Salzburg<br>Urstein Süd 1</h3>
            </div>
            <div class="program-container__table">
                <div class="program-container__table__list">
                    <?php
                        $program_block_entry_time = "14:00";
                        $program_block_entry_title = "Eröffnung";
                        $program_block_entry_rfiller = true;
                        $program_block_entry_text_set = true;
                        $program_block_entry_text = "Ausstellung: Projekte aus den Bereichen MultiMediaArt, MultiMediaTechnology und Human-Computer Interaktion.";
                        $program_block_entry_rbuttons_set = false;
                        $second_entry_set = false;
                        $entry_items = array();
                        include "components/program_block_entry_2.php";
                    ?>
                    <?php
                        $program_block_entry_time = "14:30";
                        $program_block_entry_title = "Filmscreening";
                        $program_block_entry_rfiller = true;
                        $program_block_entry_text_set = true;
                        $program_block_entry_text = "Im Raum 352 (3. OG) werden alle Filme vom Vortag zu den folgenden Uhrzeiten erneut gezeigt (Zutritt ohne Ticket):";
                        $program_block_entry_rbuttons_set = false;
                        $second_entry_set = false;
                        $entry_items = array(
                            array("Kugellager","14:00","/soon.php"),
                            array("Ein tödliches Wochenende","14:00","/soon.php"),
                            array("Der Erbsenzähler","14:00","/soon.php"),
                            array("The Showdown","14:00","/soon.php"),
                            array("Wer bin ich?","14:00","/soon.php")
                        );
                        include "components/program_block_entry_2.php";
                    ?>
                    <?php
                        $program_block_entry_time = "15:00";
                        $program_block_entry_title = "Speeddating 1. Runde";
                        $program_block_entry_text = "Das Speeddating bietet die einmalige Chance 10 Salzburger Agenturen in einer lockeren und unverbindlichen Atmosphäre persönlich kennenzulernen.";
                        $program_block_entry_rbuttons_set = false;
                        $entry_items = array(
                            array("Anmeldung 1. runde","#"),
                            array("mehr zum Speeddating","#")
                        );
                        include "components/program_block_entry_3.php";
                    ?>
                    <?php
                        $program_block_entry_time = "15:00";
                        $program_block_entry_title = "Web Dev Meetup";
                        $program_block_entry_text = "Im Hörsaal 012 halten die Web Studierenden Vorträge zu technischen Aspekten ihrer Projekten.";
                        $program_block_entry_rbuttons_set = false;
                        $entry_items = array(array("Mehr Information","https://www.meetup.com/salzburgwebdev/events/285542979/"));
                        include "components/program_block_entry_3.php";
                    ?>
                    <?php
                        $program_block_entry_time = "16:15";
                        $program_block_entry_title = "Speeddating 2. Runde";
                        $program_block_entry_text = "Das Speeddating bietet die einmalige Chance 10 Salzburger Agenturen in einer lockeren und unverbindlichen Atmosphäre persönlich kennenzulernen.";
                        $program_block_entry_rbuttons_set = false;
                        $entry_items = array(
                            array("Anmeldung 2. Runde","#"),
                            array("mehr zum Speeddating","#")
                        );
                        include "components/program_block_entry_3.php";
                    ?>
                    <?php
                        $program_block_entry_time = "17:30";
                        $program_block_entry_title = 'Performance „Tonotopy“';
                        $program_block_entry_text = "Bernd Siebenhofer und Ulrich Gahleitner.";
                        $program_block_entry_rbuttons_set = false;
                        $entry_items = array(
                            array("mehr zum Projekt","#")
                        );
                        include "components/program_block_entry_3.php";
                    ?>
                    <?php
                        $program_block_entry_time = "18:30";
                        $program_block_entry_title = "Speeddating 3. Runde";
                        $program_block_entry_text = "Das Speeddating bietet die einmalige Chance 10 Salzburger Agenturen in einer lockeren und unverbindlichen Atmosphäre persönlich kennenzulernen.";
                        $program_block_entry_rbuttons_set = false;
                        $entry_items = array(
                            array("Anmeldung 3. Runde","#"),
                            array("mehr zum Speeddating","#")
                        );
                        include "components/program_block_entry_3.php";
                    ?>
                    <?php
                        $program_block_entry_time = "17:30";
                        $program_block_entry_title = 'Performance „I Regret“';
                        $program_block_entry_text = 'Kilian Kofler aka. „Killin’ Void“.';
                        $program_block_entry_rbuttons_set = false;
                        $entry_items = array(
                            array("mehr zum Projekt","#")
                        );
                        include "components/program_block_entry_3.php";
                    ?>
                    <?php
                        $program_block_entry_time = "17:30";
                        $program_block_entry_title = 'Performance „Nexus“';
                        $program_block_entry_text = 'Elisa Visca';
                        $program_block_entry_rbuttons_set = false;
                        $entry_items = array(
                            array("mehr zum Projekt","#")
                        );
                        include "components/program_block_entry_3.php";
                    ?>
                    <?php
                        $program_block_entry_time = "23:00";
                        $program_block_entry_title = "Afterparty";
                        $program_block_entry_rfiller = false;
                        $program_block_entry_text_set = false;
                        $program_block_entry_rbuttons_set = false;
                        $second_entry_set = true;
                        $entry_items = array(
                            array("Ion Diary","23:00","#"),
                            array("Philip Law","00:00","#"),
                            array("Projectdeeothought","01:00","#"),
                            array("Next21 b2b Synged","02:00","#"),
                            array("Killin`Void b2b Feistling","03:30","#")
                        );
                        include "components/program_block_entry_2.php";
                    ?>
                </div>
                <div class="program-container__table__filler-2">
                    <img class="filler-pixels" src="/media/px-bg-trans.png" alt="pixlated background image filler">
                    <div class="program-container__table__filler__tickets">
                            <h3 class="program-container__table__filler__tickets__head" >Tickets</h3>
                            <a href="#" class="program-container__table__filler__tickets__link" target="_blank">Speeddating</a>
                            <a href="#" class="program-container__table__filler__tickets__link" target="_blank">Anmeldung Veranstaltung</a>
                    </div>
                    <img class="filler-pixels" src="/media/px-bg-trans.png" alt="pixlated background image filler">
                    <img class="" src="/media/MOBILE_not_a_robot.svg" alt="pixlated I am not a robot image filler">

                    <?php 
                        $popup_title = "Speeddating"; 
                        $popup_message = "Super fürs <br>Pflichtpraktikum!";
                        $popup_id = "Speeddating_1";
                        include 'components/popup.php';
                    ?>
                    <?php 
                        $popup_title = "Speeddating"; 
                        $popup_message = "Du magst nicht allein?<br>Geht auch als Gruppe!";
                        $popup_id = "Speeddating_1";
                        include 'components/popup.php';
                    ?>
                    <?php 
                        $popup_title = "Speeddating"; 
                        $popup_message = "Melde dich jetzt an,<br>es zahlt sich aus!";
                        $popup_id = "Speeddating_1";
                        include 'components/popup.php';
                    ?>
                    <?php 
                        $popup_title = "Speeddating"; 
                        $popup_message = "Du magst nicht allein?<br>Geht auch als Gruppe!";
                        $popup_id = "Speeddating_1";
                        include 'components/popup.php';
                    ?>

                    <?php 
                        $popup_title = "Speeddating"; 
                        $popup_message = "Du magst nicht allein?<br>Geht auch als Gruppe!";
                        $popup_id = "Speeddating_1";
                        include 'components/popup.php';
                    ?>
                    <?php 
                        $popup_title = "Speeddating"; 
                        $popup_message = "Melde dich jetzt an,<br>es zahlt sich aus!";
                        $popup_id = "Speeddating_1";
                        include 'components/popup.php';
                    ?>
                </div>
            </div>
        </div>	
    </main>
    
    <?php require "components/footer.php"; ?>
</body>
<script src="/js/captcha.js"></script>
<script src="/js/burgerMenuHandler.js"></script>
<script>
    document.getElementById("hero-logo").play();
</script>
</html>