<?php session_start(); ?>
<!DOCTYPE html>
<html lang="de">

<?php 
    $pagetitle = "show projects";
    require '../functions.php';
    require "../components/head.php";
    $all_projects = getAllProjects();
?>

<body>
    <?php require "../components/nav.php"; ?>
    <main class="program-index">
        <section class="section-hero program-hero">
        <?php 
            $popup_title = "Human-Computer Interaction"; 
            $popup_message = "methodology & prototyping,
            Interaction design, digital 
            innovation, human factors & 
            user experience engineering, 
            contextual interfaces, uvm.";
            include '../components/popup.php';
            ?>
            <?php 
            $popup_title = "3D Animation"; 
            $popup_message = "Concept & Game Art, 
            3D & 2D Animation, 
            Character & Effects, 
            Compositing, uvm.";
            include '../components/popup.php';
            ?>
            <?php 
            $popup_title = "Game"; 
            $popup_message = "Game Engines, virtual
            & augmented Reality, 
            Software Architektur,
            Game Design, uvm.";
            include '../components/popup.php';
            ?>
            <?php 
            $popup_title = "Audio"; 
            $popup_message = "Musikproduktion, 
            Tonsatz, Studiotechnik
            Mix & Mastering,
            Vertonung, uvm.";
            include '../components/popup.php';
            ?>
            <?php 
            $popup_title = "Producing & Management"; 
            $popup_message = "Storytelling & Pitching,
            Navigating Ambiguity,
            Design Thinking, Innovation, 
            Real Industries, uvm.";
            include '../components/popup.php';
            ?>
            <?php 
            $popup_title = "Kommunikationsdesign"; 
            $popup_message = "Konzept, Kampagnen, 
            Typografie, Illustration, 
            Corporate Design,
            Interfacedesign, uvm.";
            include '../components/popup.php';
            ?>
            <?php 
            $popup_title = "Web"; 
            $popup_message = "Frontend, Backend, 
            Interaction Design, 
            CMS Systeme, 
            Web Security, uvm.";
            include '../components/popup.php';
            ?>
            <?php 
            $popup_title = "Film"; 
            $popup_message = "Drehbuch, Regie, 
            Licht, Kamera, 
            Postproduction
            Inszenierung, uvm.";
            include '../components/popup.php';
            ?>
            <img class="section-hero__hero-img" srcset="/media/Projekte.png 193w, /media/Projekte.png 278w" sizes="(max-width: 480px) 120px" alt="rundgang pixelated text">
            <span class="program-hero__hero-span"></span>
            <div class="section-hero__content slide-herosection-up">
                <p>Der Rundgang der FH Salzburg bringt Kreativität und Technologie auf das nächste Level. Die Studierenden von MultiMediaArt, MultiMediaTechnology und Human-Computer Interaction versuchen sich in politische und technologische Neuerungen zu integrieren, um diese für die Zukunft anwenden zu können. Sie beschäftigen sich neben dem Einsatz unterschiedlicher technischer Innovationen und neuen Medien, vor allem auch mit aktuellen, kritischen Fragestellungen und bieten Lösungsvorschläge für die Zukunft an.</p>
                <span></span>
                <!-- <video class="section-hero__content__media" id="hero-logo" autoplay loop>
                    <source src="/media/animations/grey_logo.mp4" type="video/mp4">
                    Your browser does not support HTML video. Please update or use newer browser.
                </video> -->
                <img class="section-hero__content__media" src="/media/logo-icon-big.png" alt="Rundgang Logo Icon Big">
                <span></span>
            </div>
        </section>
        <section class="projects__filter">
            <div class="projects__filter__header">
                <h3>Sortieren nach</h3>
                <span class="s1"></span>
                <span class="s2"></span>
                <span class="s3"></span>
                <span class="s4"></span>
            </div>
            <div class="projects__filter__tags">
                <div class="projects__filter__tags__container">
                <span onclick='filterTag(this)' class="selected_tag">Alles</span>
                    <?php 
                        $allTags = "";
                        $arrayOfTags = array();
                        foreach ($all_projects as $i => $project) {
                            $allTags = explode(",", $project->tags);
                            foreach ($allTags as $t => $tag) {
                                array_push($arrayOfTags, trim($tag));
                            }
                            
                        }
                        $arrayOfTags = array_unique($arrayOfTags);
                        array_multisort($arrayOfTags, SORT_ASC, SORT_NATURAL);
                        
                        foreach ($arrayOfTags as $t => $tag) {
                            if ($tag != "" || !(strlen($tag) <= 0)) {
                                echo "<span onclick='filterTag(this)'>".$tag."</span>";
                            }
                        }
                    ?>
                </div>
            </div>
            <div class="projects__filter__degree">
                <div class="projects__filter__degree__head">
                    <h4>Alle Semester</h4>
                    <span onclick="toggleFilterDegree(this)"></span>
                </div>
                <div class="projects__filter__degree__options">
                    <span onclick="filterDegree(this)">Alles</span>
                    <span onclick="filterDegree(this)">Masterprojekt</span>
                    <span onclick="filterDegree(this)">Bachelorprojekt</span>
                    <span onclick="filterDegree(this)">Sonstiges</span>
                </div>
            </div>
            <div class="projects__filter__category">
                <div class="projects__filter__category__head">
                    <h4>Alle Kategorien</h4>
                    <span id="categoryfilterid" onclick="toggleFilterCategory(this)"></span>
                </div>
                <div class="projects__filter__category__options">
                    <span onclick="filterCategory(this)">Alles</span>
                    <?php 
                    $projectsCategoryArray = array();
                    foreach ($all_projects as $i => $project) {
                        array_push($projectsCategoryArray, $project->category);
                    }
                    $projectsCategoryArray = array_unique($projectsCategoryArray);
                    array_multisort($projectsCategoryArray, SORT_ASC, SORT_NATURAL);
                    
                    foreach ($projectsCategoryArray as $c => $category) {
                        if ($category != "" || !(strlen($category) <= 0)) {
                            echo "<span onclick='filterCategory(this)'>".$category."</span>";
                        }
                    }
                    
                ?>
                </div>
            </div>
        </section>
        <section class="projects__container">
            <?php 
                foreach ($all_projects as $i => $project) {
            ?>
                <div id="project-<?php echo $project->id; ?>" class="projects__container__project">
                    <div class="projects__container__project__thumbnail">
                        <img src="<?php echo $project->thumbnail; ?>" alt="<?php echo $project->title; ?> thumbnail image">
                    </div>  
                    <div class="projects__container__project__title">
                        <h3><?php echo $project->title; ?></h3>
                        <span onclick="toggleProject(this)"></span>
                    </div>  
                    <div class="projects__container__project__tags">
                        <div class="projects__container__project__tags_container">
                            <?php
                                $__tags = explode(",", $project->tags);
                                foreach ($__tags as $t => $tag) {
                                    if ($tag != "") {
                                        echo "<span>".trim($tag)."</span>";
                                    }
                                    
                                }
                            ?>
                        </div>
                    
                    </div>
                    <div class="projects__container__project__members clamp_projects">
                        <p><?php echo trim($project->members); ?></p>
                    </div>
                    
                    <p class="projects__container__project__degree"><?php echo $project->degree; ?></p>
                    <p class="projects__container__project__category"><?php echo $project->category; ?></p>
                    <div class="projects__container__project__description">
                        <p><?php echo $project->description; ?></p>
                    </div>

                </div>

            <?php 
                }
            ?>
        </section>
        <section class="section__captchas-38rem"></section>
        <section class="section__moreStudyInfo">
        
            <div class="section__moreStudyInfo__splited">
                <p>Erfahre mehr über die ausstellenden Studiengänge</p>
                <img class="filler-pixels" src="/media/px-bg-trans.png" alt="pixlated background image filler">
            </div>
        </section>
        <section class="section__studies">
        <div class="section__studies__filler">
            <?php 
            $popup_title = "Human-Computer Interaction"; 
            $popup_message = "methodology & prototyping,
            Interaction design, digital 
            innovation, human factors & 
            user experience engineering, 
            contextual interfaces, uvm.";
            include '../components/popup.php';
            ?>
            <?php 
            $popup_title = "3D Animation"; 
            $popup_message = "Concept & Game Art, 
            3D & 2D Animation, 
            Character & Effects, 
            Compositing, uvm.";
            include '../components/popup.php';
            ?>
            <?php 
            $popup_title = "Game"; 
            $popup_message = "Game Engines, virtual
            & augmented Reality, 
            Software Architektur,
            Game Design, uvm.";
            include '../components/popup.php';
            ?>
            <?php 
            $popup_title = "Audio"; 
            $popup_message = "Musikproduktion, 
            Tonsatz, Studiotechnik
            Mix & Mastering,
            Vertonung, uvm.";
            include '../components/popup.php';
            ?>
            <?php 
            $popup_title = "Producing & Management"; 
            $popup_message = "Storytelling & Pitching,
            Navigating Ambiguity,
            Design Thinking, Innovation, 
            Real Industries, uvm.";
            include '../components/popup.php';
            ?>
            <?php 
            $popup_title = "Kommunikationsdesign"; 
            $popup_message = "Konzept, Kampagnen, 
            Typografie, Illustration, 
            Corporate Design,
            Interfacedesign, uvm.";
            include '../components/popup.php';
            ?>
            <?php 
            $popup_title = "Web"; 
            $popup_message = "Frontend, Backend, 
            Interaction Design, 
            CMS Systeme, 
            Web Security, uvm.";
            include '../components/popup.php';
            ?>
            <?php 
            $popup_title = "Film"; 
            $popup_message = "Drehbuch, Regie, 
            Licht, Kamera, 
            Postproduction
            Inszenierung, uvm.";
            include '../components/popup.php';
            ?>
            <img class="filler-pixels" src="/media/px-bg-trans.png" alt="pixlated background image filler">
        </div>
            <div class="section__studies__collection">
                <div class="section__studies__part">
                    <div class="section__studies__part__header">
                        <h3>MultiMedia Art</h3>
                        <span onclick="toggleStudy(this)"></span>
                    </div>
                    <p>MultiMediaArt passiert, wo Kunst auf Kommunikation und Ästhetik auf Funktion trifft. Ob im Film, in Magazinen, Online, auf Werbeplakaten oder in Videospielen: Multimediale Designlösungen begegnen uns tagtäglich. Im Bachelorstudium MultiMediaArt entstehen stilsichere und vernetzt denkende Designer*innen an der Schnittstelle von Grafik, Bewegtbild, Interaktion und Audio.</p>
                </div>
                <div class="section__studies__part">
                    <div class="section__studies__part__header">
                        <h3>MultiMedia Technology</h3>
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
                <img class="filler-pixels" src="/media/px-bg-trans.png" alt="pixlated background image filler">
                <div class="section__socials__information">
                    <p>Alle Details zu den Studiengängen sind auf der FH Website.</p>
                    <ul>
                        <li><a href="https://multimediaart.at/">MultiMedia Art</a></li>
                        <li><a href="https://multimediatechnology.at/">MultiMedia Technology</a></li>
                        <li><a href="https://www.fh-salzburg.ac.at/en/study/design-media-and-arts/human-computer-interaction-joint-master">Human-Computer Interaction</a></li>
                    </ul>
                </div>
            </div>
        </section>
    </main>
    <?php require "../components/footer.php"; ?>
</body>
<script src="../js/captcha.js"></script>
<script src="../js/burgerMenuHandler.js"></script>
<script>
    document.getElementById("hero-logo").play();
</script>
</html>