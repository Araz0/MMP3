
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<?php 
error_reporting(E_ALL);
ini_set('error_reporting', E_ALL);

    $pagetitle = "Create Project";
    require '../config.php'; //This is the oauth-config! You will also need your standard-config file
    require '../functions.php';
    require "../components/head.php";
    if (isset($_POST['project_title'])) {
        $project_title = $_POST['project_title'];
        $project_sufix = $_POST['project_sufix'];
        $project_subtitle = $_POST['project_subtitle'];
        $project_excerpt = $_POST['project_excerpt'];
        $project_description = $_POST['project_description'];

        //define file names and other variables to make code easier to read
        $upload_folder = "storage/";
        $uploadDir = dirname( $_SERVER["DOCUMENT_ROOT"] ) . "/public/".$upload_folder;
        $thumUpload = basename($_FILES['project_thumbnail']['name']);
        $heroUpload = basename($_FILES['project_hero']['name']);

        $tmpThumName = basename($_FILES['project_thumbnail']['tmp_name']);
        $tmpHeroName = basename($_FILES['project_hero']['tmp_name']);
        $hashedThumName = md5($tmpThumName.$thumUpload).".jpg";
        $hashedHeroName = md5($tmpHeroName.$heroUpload).".jpg";
        $heroPath = $upload_folder.$hashedHeroName;
        $thumbnailPath = $upload_folder.$hashedThumName;
        $extensions = array( 'image/jpeg','image/jpg');
        if (move_uploaded_file($_FILES['project_thumbnail']['tmp_name'], $uploadDir.$thumUpload) && move_uploaded_file($_FILES['project_hero']['tmp_name'], $uploadDir.$heroUpload)) {
            echo "🚀🚀🚀🚀🚀🚀";
        } else {
            echo "❌❌❌❌";
        }
    }
    
?>

<body>

    <?php //createProject(); //sufix, title, subtitle, excerpt, description, thumbnail, hero, members, degree, category, tags, links, location, user_id ?>
    
    <form action="/projects/create.php" method="post" enctype="multipart/form-data">
        <label for="project_title"><b>project_title</b></label>
        <input type="text" name="project_title" value="my title" id="project_title" required> <br>
    
        <label for="project_sufix"><b>project_sufix</b></label>
        <input type="text" name="project_sufix" value="mysufix" id="project_sufix" required> <br>

        <label for="project_subtitle"><b>project_subtitle</b></label>
        <input type="text" name="project_subtitle" value="subtitle here" id="project_subtitle" required> <br>

        <label for="project_excerpt"><b>project_excerpt</b></label>
        <input type="text" name="project_excerpt" value="excerpt here of description" id="project_excerpt" required> <br>

        <label for="project_description"><b>project_description</b></label>
        <textarea name="project_description" id="project_description" rows="4" cols="50" required>project_description project_description project_description</textarea> <br>

        <label for="project_thumbnail"><b>project_thumbnail</b></label>
        <input type="file" name="project_thumbnail" id="project_thumbnail" accept="image/*,.jpg" required> <br>

        <label for="project_hero"><b>project_hero</b></label>
        <input type="file" name="project_hero" id="project_hero" accept="image/*,.jpg,video/mp4" required> <br>
        

        <label for="project_degree"><b>project_degree</b></label>
        <input type="text" name="project_degree" value="Bachelor" list="degrees_list"> <br>
            <datalist id="degrees_list">
                <option value="Bachelor">
                <option value="Master">
            </datalist>

        <label for="project_category"><b>project_category</b></label>
        <input type="text" name="project_category" value="MMP1" list="categories_list"> <br>
            <datalist id="categories_list">
                <option value="MMP1">
                <option value="MMP2">
                <option value="MMP2a">
                <option value="MMP2b">
                <option value="MMP3">
                <option value="Master Project">
            </datalist>

        <label for="project_tags"><b>project_tags</b></label>
        <input type="text" name="project_tags" value="tag1, tag2, tag3" id="project_tags" required> <br>

        <input class="" type="submit" value='Create' name='create_project'>
    </form>

</body>

</html>