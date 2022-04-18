<nav class="main-menu">
    <ul>
        <li><a href="/"><img src="media/logo-icon.png" alt="Rundgang Logo Icon"></a></li>
        <li><button id="burgerButton">Menu</button></li>
        <li><a href=""><img id="main-menu__search-icon" src="media/search-icon.png" alt="Search Icon"></a></li>
        <?php 
        if (!isSet($_SESSION['fhsUser'])) { ?> 
            <li><a href="/auth/authorized.php">login</a></li>
        <?php }else { ?>
            <li><a href="/logout.php">logout</a></li>
        <?php } ?>
    </ul>
    <ul>
        <?php if (isSet($_SESSION['fhsUser'])) echo $_SESSION['fhsUser']; ?>
        <li><a href="">Home</a></li>
        <li><a href="">Programm</a></li>
        <li><a href="">Speeddating</a></li>
        <li><a href="">Tickets</a></li>
        <li><a href="">Projekte</a></li>
        <li><a href="">About</a></li>
    </ul>
    
</nav>
<nav class="mobile-menu">
    <ul>
        <li><a href="">Home</a></li>
        <li><a href="">Programm</a></li>
        <li><a href="">Speeddating</a></li>
        <li><a href="">Tickts</a></li>
        <li><a href="">Projekte</a></li>
        <li><a href="">About</a></li>
    </ul>
</nav>