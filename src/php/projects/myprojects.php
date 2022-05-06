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
        <h1>Meine Projekte</h1>
        <div class="myprojects__container__newBtn">
            <a class="old-btn" href="/projects/create.php">Add new Project</a>
        </div>
        <div class="myprojects__container__projects">
        <?php 
        if (count($user_projects) > 0) {
            foreach ($user_projects as $i => $project) {
        ?>
            <div class="myprojects__container__projects__entry">
                <div class="myprojects__container__projects__entry__header">
                    <h2><?php echo "$project->title"; ?></h2>
                </div>
                <div class="myprojects__container__projects__entry__body">
                    <span><?php echo "$project->degree - $project->category"; ?></span>
                    <a class="old-btn" href='/projects/update.php?pid=<?php echo "$project->sufix"; ?>'>manage</a>
                </div>
                <div class="myprojects__container__projects__entry__img">
                    <img src='<?php echo "$project->thumbnail"; ?>' alt='<?php echo "$project->title"; ?>'>
                </div>
                
            </div>
            

        <?php
            }
        }else {
        ?>
            <p>you have not published any projects yet...</p>
        <?php
        }
        ?>
        </div>
        
    </section>
    <?php require "../components/footer.php"; ?>
</body>
</html>