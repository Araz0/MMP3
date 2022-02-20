
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<?php 
    $pagetitle = "Create Project";
    require '../config.php'; //This is the oauth-config! You will also need your standard-config file
    require '../functions.php';
    require "../components/head.php"; 
?>

<body>

    <?php //createProject(); ?>

    <form action="/projects/create.php" method="post">
    <label for="email"><b>Email</b></label>
        <input type="text" name="title" value="" id="title" required>
    </form>

</body>

</html>