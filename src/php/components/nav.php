<nav class="main-menu">
    <ul>
        <li><a href="/"><img src="/media/logo-icon.svg" alt="Rundgang Logo Icon"></a></li>
        <li><button id="burgerButton">Menu</button></li>
        <?php
        if (!isset($_SESSION['fhsUser'])) { ?>
        <li><a href="/auth/authorized.php">login</a></li>
        <?php } else { ?>
        <li><a href="/projects/myprojects.php">My Projects</a></li>
        <li><a href="/logout.php">logout</a></li>
        <?php } ?>
    </ul>
    <ul>
        <li><a href="/">Home</a></li>
        <li><a href="/programm.php">Programm</a></li>
        <li><a href="/soon.php">Speeddating</a></li>
        <li><a href="/tickets.php">Tickets</a></li>
        <li><a href="/soon.php">Projekte</a></li>
        <li><a href="/about.php">About</a></li>
        <?php
        if (!isset($_SESSION['fhsUser'])) { ?>
        <li><a href="/auth/authorized.php">login</a></li>
        <?php } else { ?>
        <li><a href="/projects/myprojects.php">My Projects</a></li>
        <li><a href="/logout.php">logout</a></li>
        <?php } ?>
    </ul>

</nav>
<nav class="mobile-menu">
    <ul>
        <li><a href="/">Home</a></li>
        <li><a href="programm.php">Programm</a></li>
        <li><a href="/speeddating.php">Speeddating</a></li>
        <li><a href="/tickets.php">Tickets</a></li>
        <li><a href="/projects.php">Projekte</a></li>
        <li><a href="/about.php">About</a></li>
    </ul>
</nav>