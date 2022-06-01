<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<?php 
    $pagetitle = "401 Unauthorized | Rundgang FH-Salzburg";
    require "components/head.php"; 
?>

<body>
    <?php // $captcha_image_path = "media/logo-icon.png"; include 'components/captcha.php';?>

    <?php require "components/nav.php"; ?>
    <main>

        <?php 
            $popup_title = "401 Unauthorized"; 
            $popup_message = "Although the HTTP standard specifies 'unauthorized', semantically this response means 'unauthenticated'. That is, the client must authenticate itself to get the requested response.";
            include 'components/popup.php';
        ?>

    </main>
    
    <?php require "components/footer.php"; ?>
</body>
<script src="/js/captcha.js"></script>
<script src="/js/burgerMenuHandler.js"></script>
</html>