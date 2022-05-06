<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<?php 
    $pagetitle = "Speeddating | Rundgang FH-Salzburg";
    require "components/head.php"; 
?>

<body>
    <?php // $captcha_image_path = "media/logo-icon.png"; include 'components/captcha.php';?>

    <?php require "components/nav.php"; ?>
    <main>
        <?php 
            $popup_title = "Soon..."; 
            $popup_message = "Page coming soon... <br>Stay tooned";
            include 'components/popup.php';
        ?>
        <?php 
            $popup_title = "Soon..."; 
            $popup_message = "Page coming soon... <br>Stay tooned";
            include 'components/popup.php';
        ?>
        <?php 
            $popup_title = "Soon..."; 
            $popup_message = "Page coming soon... <br>Stay tooned";
            include 'components/popup.php';
        ?>
    </main>
    
    <?php require "components/footer.php"; ?>
</body>
<script src="/js/captcha.js"></script>
<script src="/js/burgerMenuHandler.js"></script>
</html>