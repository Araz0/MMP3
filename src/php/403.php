<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<?php 
    $pagetitle = "403 Forbidden | Rundgang FH-Salzburg";
    require "components/head.php"; 
?>

<body>
    <?php // $captcha_image_path = "media/logo-icon.png"; include 'components/captcha.php';?>

    <?php require "components/nav.php"; ?>
    <main>
        <?php 
            $popup_title = "403 Forbidden"; 
            $popup_message = "This means you need to login!";
            include 'components/popup.php';
        ?>
        <?php 
            $popup_title = "403 Forbidden"; 
            $popup_message = "The client does not have access rights to the content; that is, it is unauthorized, so the server is refusing to give the requested resource. Unlike 401 Unauthorized, the client's identity is known to the server.";
            include 'components/popup.php';
        ?>

        <?php 
            $popup_title = "403 Forbidden"; 
            $popup_message = "This means you need to login!";
            include 'components/popup.php';
        ?>
    </main>
    
    <?php require "components/footer.php"; ?>
</body>
<script src="/js/captcha.js"></script>
<script src="/js/burgerMenuHandler.js"></script>
</html>