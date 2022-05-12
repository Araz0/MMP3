<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<?php 
    $pagetitle = "Meine Projekte";
    require '../functions.php';
    require "../components/head.php";
    $user = getUser($_SESSION['fhsUser']);
    $user_id = $user->id;
    $user_projects = new stdClass();
    if(in_array($user->username, $admins)){
        $user_projects = getAllProjects();
        $isAdmin = true;
    }else{
        $user_projects = getUserProjectbyUserId($user_id);
    }
    if (!isset($user_id)) {
        header('Location: /405.php');
    }
    
?>

<body>
    <?php require "../components/nav.php"; ?>
    <section class="myprojects__container">
        
        <h1>Meine Projekte <?php $count = count($user_projects); echo "($count)"; if ($isAdmin == true){ echo ' - <span style="color:green;">Admin view (ALL Projects)</span>'; } ?></h1>
        <div class="myprojects__container__newBtn">
            <a class="old-btn" href="/projects/create.php">Add new Project</a>
        </div>
        <div class="myprojects__container__projects">
        <?php 
        if (count($user_projects) > 0) {
            foreach ($user_projects as $i => $project) {
            $project_user = getUserbyId($project->user_id);
        ?>
            <div class="myprojects__container__projects__entry">
                <div class="myprojects__container__projects__entry__header">
                    <h2><?php echo "$project->title"; ?></h2>
                    <?php if ($isAdmin == true && isset($project_user->last_name)){ echo '<span style="color:green;">Posted by: '.$project_user->first_name.' '.$project_user->last_name.' - '.$project_user->email.'</span>'; } ?>
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