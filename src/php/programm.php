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
                    ?>
                    <?php include "components/program_block_entry.php"; ?>
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
                    ?>
                    <?php include "components/program_block_entry.php"; ?>
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
                    ?>
                    <?php include "components/program_block_entry.php"; ?>
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
                    ?>
                    <?php include "components/program_block_entry.php"; ?>
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
                    ?>
                    <?php include "components/program_block_entry.php"; ?>

                </div>
                <div class="program-container__table__filler">
                    <img class="filler-pixels" src="/media/px-bg-trans.png" alt="pixlated background image filler">
                </div>
            </div>
            <div class="program-container__header">
                <h3>Freitag<br>03/06/2022</h3>
                <h3>FH Salzburg<br>Urstein Süd 1</h3>
            </div>
            <div class="program-container__table">
                <div class="program-container__table__list">
                    

                </div>
                <div class="program-container__table__filler">
                    <img class="filler-pixels" src="/media/px-bg-trans.png" alt="pixlated background image filler">
                </div>
            </div>
        </div>
    </main>
    
    <?php require "components/footer.php"; ?>
</body>
<script src="/js/captcha.js"></script>
<script src="/js/burgerMenuHandler.js"></script>
</html>