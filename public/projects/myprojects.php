<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<?php 
    $pagetitle = "Meine Projekte";
    require '../functions.php';
    require "../components/head.php";
    $user_id = getUser($_SESSION['fhsUser'])->id;
    if (!isset($user_id)) {
        header('Location: /405.php');
    }
    $user_projects = getUserProjectbyUserId($user_id);
?>

<body>
    <?php require "../components/nav.php"; ?>
    <section class="myprojects__container">
        <a class="old-btn" href="/projects/create.php">Add new Project</a>
        <?php 
            foreach ($user_projects as $i => $project) {
                echo "$project->title <br>";
            }
        ?>
    </section>
</body>
</html>