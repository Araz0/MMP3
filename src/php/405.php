<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<?php 
    $pagetitle = "405 | Rundgang FH-Salzburg";
    require "components/head.php"; 
?>

<body>
    <?php // $captcha_image_path = "media/logo-icon.png"; include 'components/captcha.php';?>

    <?php require "components/nav.php"; ?>
    <main>

        <?php 
            $popup_title = "405 Method Not Allowed"; 
            $popup_message = "The request method is known by the server but is not supported by the target resource.<br><br>For example, an API may not allow calling DELETE to remove a resource.";
            include 'components/popup.php';
        ?>

    </main>
    
    <?php require "components/footer.php"; ?>
</body>
<script src="/js/captcha.js"></script>
<script src="/js/burgerMenuHandler.js"></script>
</html>