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
            <div class="section-hero__content">
                <p>Der Rundgang der FH Salzburg bringt Kreativität und Technologie auf das nächste Level. Die Studierenden von MultiMediaArt, MultiMediaTechnology und Human-Computer Interaction versuchen sich in politische und technologische Neuerungen zu integrieren, um diese für die Zukunft anwenden zu können. Sie beschäftigen sich neben dem Einsatz unterschiedlicher technischer Innovationen und neuen Medien, vor allem auch mit aktuellen, kritischen Fragestellungen und bieten Lösungsvorschläge für die Zukunft an.</p>
                <span></span>
                <img src="/media/logo-icon-big.png" alt="Rundgang Logo Icon Big">
                <span></span>
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
                                            array("Sündenbock","https://wwww.rundgang-fhsalzburg.com"),
                                            array("Das verräterische Herz","https://wwww.rundgang-fhsalzburg.com"),
                                            array("Komm, wir gehen.","https://wwww.rundgang-fhsalzburg.com")
                                        );
                        include "components/program_block_entry.php";
                    ?>
                    <?php
                        $program_block_entry_time = "12:30";
                        $program_block_entry_title = "2. Filmblock";
                        $program_block_entry_rfiller = false;
                        $entry_items = array(
                                            array("VERA","https://wwww.rundgang-fhsalzburg.com"),
                                            array("Social Score System","https://wwww.rundgang-fhsalzburg.com"),
                                            array("Kom O ba dia.","https://wwww.rundgang-fhsalzburg.com"),
                                            array("La Manera","https://wwww.rundgang-fhsalzburg.com"),
                                            array("Overflow","https://wwww.rundgang-fhsalzburg.com")
                                        );
                        include "components/program_block_entry.php";
                    ?>
                    <?php
                        $program_block_entry_time = "15:00";
                        $program_block_entry_title = "3. Filmblock";
                        $program_block_entry_rfiller = false;
                        $entry_items = array(
                                            array("Namik","https://wwww.rundgang-fhsalzburg.com"),
                                            array("Babushka","https://wwww.rundgang-fhsalzburg.com"),
                                            array("Leo","https://wwww.rundgang-fhsalzburg.com"),
                                            array("FLOCK","https://wwww.rundgang-fhsalzburg.com")
                                        );
                        include "components/program_block_entry.php";
                    ?>
                    <?php
                        $program_block_entry_time = "17:15";
                        $program_block_entry_title = "4. Filmblock";
                        $program_block_entry_rfiller = false;
                        $entry_items = array(
                                            array("Sould","https://wwww.rundgang-fhsalzburg.com"),
                                            array("90 bpm","https://wwww.rundgang-fhsalzburg.com"),
                                            array("Journey.","https://wwww.rundgang-fhsalzburg.com"),
                                            array("train cabin","https://wwww.rundgang-fhsalzburg.com"),
                                            array("Express Yourself","https://wwww.rundgang-fhsalzburg.com")
                                        );
                        include "components/program_block_entry.php";
                    ?>
                    <?php
                        $program_block_entry_time = "19:45";
                        $program_block_entry_title = "5. Filmblock";
                        $program_block_entry_rfiller = false;
                        $entry_items = array(
                                            array("Kugellager","https://wwww.rundgang-fhsalzburg.com"),
                                            array("Ein tödliches Wochenende","https://wwww.rundgang-fhsalzburg.com"),
                                            array("Der Erbsenzähler","https://wwww.rundgang-fhsalzburg.com"),
                                            array("The Showdown","https://wwww.rundgang-fhsalzburg.com"),
                                            array("Wer bin ich?","https://wwww.rundgang-fhsalzburg.com")
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
                            array("Kugellager","14:00","https://wwww.rundgang-fhsalzburg.com"),
                            array("Ein tödliches Wochenende","14:00","https://wwww.rundgang-fhsalzburg.com"),
                            array("Der Erbsenzähler","14:00","https://wwww.rundgang-fhsalzburg.com"),
                            array("The Showdown","14:00","https://wwww.rundgang-fhsalzburg.com"),
                            array("Wer bin ich?","14:00","https://wwww.rundgang-fhsalzburg.com")
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
                        $program_block_entry_time = "16:15";
                        $program_block_entry_title = "Speeddating 2. Runde";
                        $program_block_entry_text = "Das Speeddating bietet die einmalige Chance 10 Salzburger Agenturen in einer lockeren und unverbindlichen Atmosphäre persönlich kennenzulernen.";
                        $program_block_entry_rbuttons_set = false;
                        $entry_items = array(
                            array("Anmeldung 2. runde","#"),
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
                            array("mehr zum Project","#")
                        );
                        include "components/program_block_entry_3.php";
                    ?>
                    <?php
                        $program_block_entry_time = "18:30";
                        $program_block_entry_title = "Speeddating 3. Runde";
                        $program_block_entry_text = "Das Speeddating bietet die einmalige Chance 10 Salzburger Agenturen in einer lockeren und unverbindlichen Atmosphäre persönlich kennenzulernen.";
                        $program_block_entry_rbuttons_set = false;
                        $entry_items = array(
                            array("Anmeldung 3. runde","#"),
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
                            array("mehr zum Project","#")
                        );
                        include "components/program_block_entry_3.php";
                    ?>
                    <?php
                        $program_block_entry_time = "17:30";
                        $program_block_entry_title = 'Performance „Nexus“';
                        $program_block_entry_text = 'Elisa Visca';
                        $program_block_entry_rbuttons_set = false;
                        $entry_items = array(
                            array("mehr zum Project","#")
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
                            array("DJ Socke Blabla","23:00","#"),
                            array("DJ Synged","00:30","#"),
                            array("Sick n’ young","01:30","#"),
                            array("Julius b2b Kenji Araki ","02:45","#"),
                            array("DJ Shanti","03:45","#"),
                            array("DJ Marcopolo yolo","05:00","#"),
                            array("Killin Void","06:00","#")
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
                </div>
            </div>
        </div>	
    </main>
    
    <?php require "components/footer.php"; ?>
</body>
<script src="/js/captcha.js"></script>
<script src="/js/burgerMenuHandler.js"></script>
</html>