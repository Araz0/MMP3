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
        <img srcset="media/rundgang-v.png 193w, media/rundgang-px.png 278w" sizes="(max-width: 480px) 120px" alt="rundgang pixelated text">
        <div class="section-hero__content">
            <p>Der Rundgang, ist eine Veranstaltung der FH Salzburg bei der alle MultiMediaArt und MultiMediaTechnology Bachelor- und Masterprojekte sowie einige Human-Computer Interaction Projekte ausgestellt werden. Er findet am 02.06.2022 im Stadtkino Hallein und am 03.06.2022 am FH Salzburg Campus Urstein statt.</p>
            <span></span>
            <img src="media/logo-icon.png" alt="Rundgang Logo Icon Big">
            <span></span>
        </div>
    </section>
    <section class="section-schedule">
        <div class="section-schedule__table">
            <h3>Donnerstag 02/06/2022</h3>
            <h3>Ab 14:00</h3>
            <h3>Kino Hallein</h3>
            <h3>Freitag  03/06/2022</h3>
            <h3>Ab 13:00</h3>
            <h3>Puch Urstein</h3>
            <h3>Afterparty</h3>
            <h3>22:30</h3>
            <span></span>
        </div>
        <div class="section-schedule__table-4">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
        <div class="section-schedule__layout">
            <div class="section-schedule__layout__information">
                <p>Stadtkino Hallein <br>
                Kuffergasse 2 <br>
                5400 Hallein</p>
                <ul>
                    <li><a href="https://www.kino-theater.at">Website</a></li>
                    <li><a href="">Routenplaner</a></li>
                    <li><a href="">Kinotickts</a></li>
                    <li><a href="">Programm</a></li>
                </ul>
            </div>
            <div class="section-schedule__layout__information">
                <p>FH Salzburg <br>
                Campus Urstein <br>
                Urstein Süd 1 <br>
                5412 Puch</p>
                <ul>
                    <li><a href="https://www.fh-salzburg.ac.at">Website</a></li>
                    <li><a href="">Routenplaner</a></li>
                    <li><a href="">Kinotickts</a></li>
                    <li><a href="">Programm</a></li>
                </ul>
            </div>
        </div>
        <img class="filler-pixels" src="media/px-bg.png" alt="pixlated background image filler">
    </section>
    <section class="section-konzept">
        <h2>Konzept</h2>
        <p>Die vier unterschiedlichen Captcha Bilder, machen bei genauerer Betrachtung auf die Problemstellungen in unserer Welt aufmerksam. Auch MultiMediaArt, MultiMediaTechnology und Human-Computer Interaction beschäftigen sich neben dem Einsatz unterschiedlicher technischer Innovationen und neuen Medien vor allem auch mit aktuellen, kritischen Fragestellungen. Die subtil kritischen Captcha Bilder greifen dies auf, geben uns Menschen - im Gegensatz zu Robotern - einen Denkanstoß und berühren uns. Daher verifiziert man sich in einer interaktiven Animation, kein Roboter zu sein. In dieser Animation verschmelzen Technik und Konzept - das Captcha verschwindet und legt den Blick auf den verpixelten Rundgang-Schriftzug frei, der einlädt, an der zukunftsschaffenden Welt von MultiMediaArt, MultiMediaTechnology und Human-Computer Interaction teilhaben zu können.</p>
        <img class="section-konzept__img-pixles filler-pixels" src="media/px-bg.png" alt="pixlated background image filler">
    </section>
    <section class="section__captchas-38rem"></section>
    <section class="section__socials">
        <img class="filler-pixels" src="media/px-bg.png" alt="pixlated background image filler">
        <div class="section__socials__information">
            <p>Folge Rundgang auf Social Media um nichts zu verpassen.</p>
            <ul>
                <li><a href="">Instagram</a></li>
                <li><a href="">Facebook</a></li>
                <li><a href="">TikTok</a></li>
            </ul>
        </div>
    </section>
    <section class="section__moreStudyInfo">
        <img srcset="media/not-a-robot-px-borderd-v.png 193w, media/not-a-robot-px-borderd.png 278w" sizes="(max-width: 480px) 120px" alt="pixlated im not a robot signe">
        <div class="section__moreStudyInfo__splited">
            <p>Erfahre mehr über die ausstellenden Studiengänge</p>
            <img class="filler-pixels" src="media/px-bg.png" alt="pixlated background image filler">
        </div>
        <div class="section__moreStudyInfo__splited">
            <span></span>
            <span></span>
        </div>
        <div class="section__moreStudyInfo__splited">
            <span></span>
            <span></span>
        </div>
        <div class="section__moreStudyInfo__splited">
            <span></span>
            <span></span>
        </div>
        <div class="section__moreStudyInfo__splited">
            <span></span>
            <span></span>
        </div>
        <div class="section__moreStudyInfo__splited">
            <span></span>
            <span></span>
        </div>
        <div class="section__moreStudyInfo__splited">
            <span></span>
            <span></span>
        </div>
    </section>


    <section class="section__socials">
        <img class="filler-pixels" src="media/px-bg.png" alt="pixlated background image filler">
        <div class="section__socials__information">
            <p>Alle Details zu den Studiengängen sind auf der FH Website.</p>
            <ul>
                <li><a href="">MultiMediaArt</a></li>
                <li><a href="">MultiMediaTechnology</a></li>
                <li><a href="">Human-Computer Interaction</a></li>
            </ul>
        </div>
    </section>
    <?php require "components/footer.php"; ?>
</body>
<script src="/js/captcha.js"></script>
<script src="/js/burgerMenuHandler.js"></script>
</html>