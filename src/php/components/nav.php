<nav>
    <ul>
        <?php 
        if (!isSet($_SESSION['fhsUser'])) { ?> 
            <li><a href="/auth/authorized.php">login</a></li>
        <?php }else { ?>
            <li><a href="/logout.php">logout</a></li>
        <?php } ?>
    </ul>
</nav>