<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<?php 
    $pagetitle = "MMP3";
    require "components/head.php"; 
?>

<body>
    <?php // $captcha_image_path = "media/logo-icon.png"; include 'components/captcha.php';?>

    <?php require "components/nav.php"; ?>
    <section class="section-hero">
        <img src="media/rundgang-px.png" alt="rundgang pixelated text">
        <div class="section-hero__content">
            <p>Der Rundgang, ist eine Veranstaltung der FH Salzburg bei der alle MultiMediaArt und MultiMediaTechnology Bachelor- und Masterprojekte sowie einige Human-Computer Interaction Projekte ausgestellt werden. Er findet am 02.06.2022 im Stadtkino Hallein und am 03.06.2022 am FH Salzburg Campus Urstein statt.</p>
            <img src="media/logo-icon.png" alt="Rundgang Logo Icon Big">
        </div>
    </section>
    <section class="section-schedule">
        <div class="section-schedule__table">
            <h3>Donnerstag</h3>
            <h3>Ab</h3>
            <h3>Kino</h3>
            <h3>Freitag</h3>
            <h3>Ab</h3>
            <h3>Puch</h3>
            <h3>Afterparty</h3>
            <h3>22:30</h3>
        </div>
        <div class="section-schedule__information">
            <p>FH Salzburg 
            Campus Urstein
            Urstein Süd 1
            5412 Puch</p>
            <ul>
                <li><a href="https://www.fh-salzburg.ac.at">Website</a></li>
                <li><a href="">Routenplaner</a></li>
                <li><a href="">Kinotickts</a></li>
                <li><a href="">Programm</a></li>
            </ul>
        </div>
        <img src="media/px-bg.png" alt="pixlated background image filler">
        <div class="section-schedule__information">
            <p>Stadtkino Hallein
            Kuffergasse 2
            5400 Hallein</p>
            <ul>
                <li><a href="https://www.kino-theater.at">Website</a></li>
                <li><a href="">Routenplaner</a></li>
                <li><a href="">Kinotickts</a></li>
                <li><a href="">Programm</a></li>
            </ul>
        </div>
    </section>
    <section class="section-konzept">
        <h2>Konzept</h2>
        <p>Die vier unterschiedlichen Captcha Bilder, machen bei genauerer Betrachtung auf die Problemstellungen in unserer Welt aufmerksam. Auch MultiMediaArt, MultiMediaTechnology und Human-Computer Interaction beschäftigen sich neben dem Einsatz unterschiedlicher technischer Innovationen und neuen Medien vor allem auch mit aktuellen, kritischen Fragestellungen. Die subtil kritischen Captcha Bilder greifen dies auf, geben uns Menschen - im Gegensatz zu Robotern - einen Denkanstoß und berühren uns. Daher verifiziert man sich in einer interaktiven Animation, kein Roboter zu sein. In dieser Animation verschmelzen Technik und Konzept - das Captcha verschwindet und legt den Blick auf den verpixelten Rundgang-Schriftzug frei, der einlädt, an der zukunftsschaffenden Welt von MultiMediaArt, MultiMediaTechnology und Human-Computer Interaction teilhaben zu können.</p>
        <img class="section-konzept__img-pixles" src="media/px-bg.png" alt="pixlated background image filler">
        <img class="section-konzept__img-notarobot" src="media/not-a-robot-px-borderd.png" alt="pixlated im not a robot signe">
        <div class="section-konzept__information">
            <p>Folge Rundgang auf Social Media um nichts zu verpassen.</p>
            <ul>
                <li><a href="">Instagram</a></li>
                <li><a href="">Facebook</a></li>
                <li><a href="">TikTok</a></li>
            </ul>
        </div>
    </section>
</body>
<script src="/js/captcha.js"></script>
</html>