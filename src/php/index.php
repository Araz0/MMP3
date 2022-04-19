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
        <?php 
        $popup_title = "02/06/2022"; 
        $popup_message = "14 Uhr \n Film Screening im Stadtkino Hallein";
        include 'components/popup.php';
        ?>
        <?php 
        $captcha_image_path = "media/logo-icon.png"; 
        $captcha_message = "Select all squares with palm trees.";
        include 'components/captcha.php';
        ?>
        <?php
        $captcha_image_path = "media/logo-icon.png";
        $captcha_message = "Select all squares with crosswalks.";
        include 'components/captcha.php';
        ?>
        <?php
        $captcha_image_path = "media/logo-icon.png";
        $captcha_message = "Select all squares with cars.";
        include 'components/captcha.php';
        ?>
        <?php
        $captcha_image_path = "media/logo-icon.png";
        $captcha_message = "Select all squares with signs.";
        include 'components/captcha.php';
        ?>
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
        <span class="section-schedule__span"></span>
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
        <img class="filler-pixels" src="media/px-bg-trans.png" alt="pixlated background image filler">
        
    </section>
    <section class="section-konzept">
    <?php 
        $captcha_image_path = "media/logo-icon.png"; 
        $captcha_message = "Select all squares with palm trees.";
        include 'components/captcha.php';
        ?>
        <?php
        $captcha_image_path = "media/logo-icon.png";
        $captcha_message = "Select all squares with crosswalks.";
        include 'components/captcha.php';
        ?>
        <?php
        $captcha_image_path = "media/logo-icon.png";
        $captcha_message = "Select all squares with cars.";
        include 'components/captcha.php';
        ?>
        <?php
        $captcha_image_path = "media/logo-icon.png";
        $captcha_message = "Select all squares with signs.";
        include 'components/captcha.php';
        ?>
        <h2 class="section-konzept__header">Konzept</h2>
        <p class="section-konzept__message">Die vier unterschiedlichen Captcha Bilder, machen bei genauerer Betrachtung auf die Problemstellungen in unserer Welt aufmerksam. Auch MultiMediaArt, MultiMediaTechnology und Human-Computer Interaction beschäftigen sich neben dem Einsatz unterschiedlicher technischer Innovationen und neuen Medien vor allem auch mit aktuellen, kritischen Fragestellungen. Die subtil kritischen Captcha Bilder greifen dies auf, geben uns Menschen - im Gegensatz zu Robotern - einen Denkanstoß und berühren uns. Daher verifiziert man sich in einer interaktiven Animation, kein Roboter zu sein. In dieser Animation verschmelzen Technik und Konzept - das Captcha verschwindet und legt den Blick auf den verpixelten Rundgang-Schriftzug frei, der einlädt, an der zukunftsschaffenden Welt von MultiMediaArt, MultiMediaTechnology und Human-Computer Interaction teilhaben zu können.</p>
        <img class="section-konzept__img-pixles filler-pixels" src="media/px-bg-trans.png" alt="pixlated background image filler">
    </section>
    <section class="section__captchas-38rem"></section>
    <section class="section__socials">
        <img class="filler-pixels" src="media/px-bg-trans.png" alt="pixlated background image filler">
        <div class="section__socials__information">
            <p>Folge Rundgang auf Social Media um nichts zu verpassen.</p>
            <ul>
                <li><a href="">Instagram</a></li>
                <li><a href="">Facebook</a></li>
                <li><a href="">TikTok</a></li>
            </ul>
        </div>
        <img class="section__socials__logo" srcset="media/not-a-robot-px-borderd-v.png 193w, media/not-a-robot-px-borderd.png 278w" sizes="(max-width: 480px) 120px" alt="pixlated im not a robot signe">
    </section>
    <section class="section__moreStudyInfo">
        
        <div class="section__moreStudyInfo__splited">
            <p>Erfahre mehr über die ausstellenden Studiengänge</p>
            <img class="filler-pixels" src="media/px-bg-trans.png" alt="pixlated background image filler">
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

    <section class="section__studies">
        <div class="section__studies__filler">
            <img class="filler-pixels" src="media/px-bg-trans.png" alt="pixlated background image filler">
        </div>
        <div class="section__studies__collection">
            <div class="section__studies__part">
                <div class="section__studies__part__header">
                    <h3>MultiMediaArt</h3>
                    <span onclick="toggleStudy(this)"></span>
                </div>
                <p>MultiMediaArt passiert, wo Kunst auf Kommunikation und Ästhetik auf Funktion trifft. Ob im Film, in Magazinen, Online, auf Werbeplakaten oder in Videospielen: Multimediale Designlösungen begegnen uns tagtäglich. Im Bachelorstudium MultiMediaArt entstehen stilsichere und vernetzt denkende Designer*innen an der Schnittstelle von Grafik, Bewegtbild, Interaktion und Audio.</p>
            </div>
            <div class="section__studies__part">
                <div class="section__studies__part__header">
                    <h3>MultiMediaTechnology</h3>
                    <span onclick="toggleStudy(this)"></span>
                </div>
                <p>Durchdachte Web-Anwendungen, mobile Apps und innovative Games - im MultiMediaTechnology Studium wird digitale Zukunft gestaltet. Neben Medieninformatik und Softwareentwicklung werden Technologie und Kreativität miteinander zu kombiniert wodurch, wegweisende Anwendungen für die Welt von morgen zu entwickelt werden.</p>
            </div>
            <div class="section__studies__part">
                <div class="section__studies__part__header">
                    <h3>Human-Computer Interaction</h3>
                    <span onclick="toggleStudy(this)"></span>
                </div>
                <p>Ob Smart Home, Industrie 4.0 oder autonome Fahrzeuge - viele der modernsten Entwicklungen von heute basieren auf der Interaktion zwischen Mensch und Computer. Im Studiengang Human-Computer Interaction wird eben diese Interaktion von Menschen mit digitalen Anwendungen, Produkten und Dienstleistungen gestaltet. Human-Computer Interaction zählt somit zu den dynamischsten und bedeutendsten Innovationsfelder von heute.</p>
            </div>
        </div>
        <div class="section__socials">
            <img class="filler-pixels" src="media/px-bg-trans.png" alt="pixlated background image filler">
            <div class="section__socials__information">
                <p>Alle Details zu den Studiengängen sind auf der FH Website.</p>
                <ul>
                    <li><a href="">MultiMediaArt</a></li>
                    <li><a href="">MultiMediaTechnology</a></li>
                    <li><a href="">Human-Computer Interaction</a></li>
                </ul>
            </div>
        </div>
    </section>
    
    <?php require "components/footer.php"; ?>
</body>
<script src="/js/captcha.js"></script>
<script src="/js/burgerMenuHandler.js"></script>
</html>