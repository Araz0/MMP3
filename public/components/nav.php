<nav class="main-menu">

    
    <ul>
        <?php if (isSet($_SESSION['fhsUser'])) echo $_SESSION['fhsUser']; ?>
        <li><a href="/"><img src="media/logo-icon.png" alt="Rundgang Logo Icon"></a></li>
        <li><a href="">Home</a></li>
        <li><a href="">Programm</a></li>
        <li><a href="">Speeddating</a></li>
        <li><a href="">Tickts</a></li>
        <li><a href="">Projekte</a></li>
        <li><a href="">About</a></li>
    </ul>
    <ul>
        <?php 
        if (!isSet($_SESSION['fhsUser'])) { ?> 
            <li><a href="/auth/authorized.php">login</a></li>
        <?php }else { ?>
            <li><a href="/logout.php">logout</a></li>
        <?php } ?>
        <li><a href="">O-</a></li>
        <li><a href="">X</a></li>
    </ul>
</nav>