
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<?php 

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

        for ($i=0; $i < count($_POST['project_members_name']); $i++) { 
            $member_data = array(
                'name' => $_POST['project_members_name'][$i],
                'role' => $_POST['project_members_role'][$i],
                'thumbnail' => $_FILES['project_members_thumbnail']['name'][$i]
            );
            //$member_data = json_encode($member_data, JSON_FORCE_OBJECT);
            $project_members[] = $member_data;
        }

        for ($i=0; $i < count($_POST['project_link_title']); $i++) { 
            $link_data = array(
                'title' => $_POST['project_link_title'][$i],
                'link' => $_POST['project_link_url'][$i]
            );
            $project_links[] = $link_data;
        }

        $project_location = array(
            'type' => $_POST['project_location_type'][$i],
            'address' => $_POST['project_location_address'][$i]
        );

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
        /*if (move_uploaded_file($_FILES['project_thumbnail']['tmp_name'], $uploadDir.$thumUpload) && move_uploaded_file($_FILES['project_hero']['tmp_name'], $uploadDir.$heroUpload)) {
            echo "🚀🚀🚀🚀🚀🚀";
        } else {
            echo "❌❌❌❌";
        }*/
    }
    
?>

<body>

    <?php //createProject(); //sufix, title, subtitle, excerpt, description, thumbnail, hero, members, degree, category, tags, links, location, user_id ?>
    
    <form action="/projects/create.php" method="post" enctype="multipart/form-data">
        <label for="project_title"><b>project_title</b>
            <input type="text" name="project_title" value="my title" id="project_title" required>
        </label> <br>
    
        <label for="project_sufix"><b>project_sufix</b>
            <input type="text" name="project_sufix" value="mysufix" id="project_sufix" required>
        </label> <br>

        <label for="project_subtitle"><b>project_subtitle</b>
            <input type="text" name="project_subtitle" value="subtitle here" id="project_subtitle" required>
        </label> <br>

        <label for="project_excerpt"><b>project_excerpt</b>
            <input type="text" name="project_excerpt" value="excerpt here of description" id="project_excerpt" required>
        </label> <br>

        <label for="project_description"><b>project_description</b>
            <textarea name="project_description" id="project_description" rows="4" cols="50" required>project_description project_description project_description</textarea>
        </label> <br>

        <label for="project_thumbnail"><b>project_thumbnail</b>
            <input type="file" name="project_thumbnail" id="project_thumbnail" accept="image/*,.jpg">
        </label> <br>

        <label for="project_hero"><b>project_hero</b>
            <input type="file" name="project_hero" id="project_hero" accept="image/*,.jpg,video/mp4">
        </label> <br>
        
        <div class="project_members_container" id="project_members_container">
            <div class="project_member_wrapper">
                <label for="project_members_name[]"><b>project_members</b>
                    <input type="text" name="project_members_name[]" id="project_members_name" value="member name 1" required>
                </label>
                <label for="project_members_role[]"><b>project_members_role</b>
                    <input type="text" name="project_members_role[]" id="project_members_role" value="member role 1" required>
                </label>
                <label for="project_members_thumbnail[]"><b>project_members_thumbnail</b>
                    <input type="file" name="project_members_thumbnail[]" id="project_members_thumbnail" accept="image/*,.jpg" required>
                </label>
            </div>
            <button type="button" id="add_new_member_btn">Add New Member</button> 
        </div>

        <label for="project_degree"><b>project_degree</b>
            <input type="text" name="project_degree" value="Bachelor" list="degrees_list">
            <datalist id="degrees_list">
                <option value="Bachelor">
                <option value="Master">
            </datalist>
        </label> <br>

        <label for="project_category"><b>project_category</b>
            <input type="text" name="project_category" value="MMP1" list="categories_list"> 
            <datalist id="categories_list">
                <option value="MMP1">
                <option value="MMP2">
                <option value="MMP2a">
                <option value="MMP2b">
                <option value="MMP3">
                <option value="Master Project">
            </datalist>
        </label> <br>

        <label for="project_tags"><b>project_tags</b>
            <input type="text" name="project_tags" value="tag1, tag2, tag3" id="project_tags" required>
        </label>  <br>

        <div class="project_links_container" id="project_links_container">
            <div class="project_link_wrapper">
                <label for="project_link_title[]"><b>project_link_title</b>
                    <input type="text" name="project_link_title[]" id="project_link_title" value="link 1" required>
                </label>
                <label for="project_link_url[]"><b>project_link_url</b>
                    <input type="text" name="project_link_url[]" id="project_link_url" value="https://www.example.com" required>
                </label> <br>
            </div>
            <button type="button" id="add_new_link_btn">Add New Link</button> 
        </div>

        <label for="project_location_type"><b>project_location_type</b>
            <input type="text" name="project_location_type" value="FH Room" list="locations_list">
            <datalist id="locations_list">
                <option value="FH Room">
                <option value="Street Address">
            </datalist>
        </label> <br>

        <label for="project_location_address"><b>project_location_address</b>
            <input type="text" name="project_location_address" value="355" id="project_location_address" required>
        </label> <br>

        <input class="" type="submit" value='Create' name='create_project'>
    </form>

</body>
    <script src="../js/addProjectFields.js"></script>
</html>