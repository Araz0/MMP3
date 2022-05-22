
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<?php 
// Show all information, defaults to INFO_ALL

    $pagetitle = "Create Project";
    require '../functions.php';
    require "../components/head.php";
    $user_id = getUser($_SESSION['fhsUser'])->id;
    if (!isset($user_id)) {
        header('Location: /405.php');
    }
    
    if (isset($_POST['create_project'])) {
        $project_title = $_POST['project_title'];
        $project_sufix = makeStrUrlReady($project_title);
        $project_subtitle = $_POST['project_subtitle'];
        $project_excerpt = $_POST['project_excerpt'];
        $project_description = $_POST['project_description'];
        $project_degree = $_POST['project_degree'];
        $project_category = $_POST['project_category'];

        $_inputName = "project_thumbnail";
        $input_array = array(basename($_FILES[$_inputName]['name']), $_FILES[$_inputName]['tmp_name'], $_FILES[$_inputName]['size'], $_FILES[$_inputName]['type'], $_FILES[$_inputName]['error'], $user_id);
        $project_thumbnail = fileUpload( $input_array, $storage_folder, array('jpeg','jpg','png'));
        if ($project_thumbnail == null) { echo implode("\n ",$errors); exit(); }
        
        /*
            $_inputName = "project_teaser";
            $input_array = array(basename($_FILES[$_inputName]['name']), $_FILES[$_inputName]['tmp_name'], $_FILES[$_inputName]['size'], $_FILES[$_inputName]['type'], $_FILES[$_inputName]['error'], $user_id);
            $project_teaser = fileUpload( $input_array, $storage_folder, array('jpeg','jpg','png','mp4'));
            if ($project_teaser == null) { echo implode("\n ",$errors); exit(); }
        */


        $project_tags = $_POST['project_tags'];
        $project_links = [];
        if (isset($_POST['project_link_title'])) {
            for ($i=0; $i < count($_POST['project_link_title']); $i++) { 
                $link_data = array(
                    'title' => $_POST['project_link_title'][$i],
                    'link' => $_POST['project_link_url'][$i]
                );
                $project_links[] = $link_data;
            }
        }

        $project_members = $_POST['project_members'];
        $project_members_result = "";
        if (isset($project_members)) {
            $project_members_result = $project_members;
        }

        // $project_members = [];
        // $_inputName = "project_members_name";
        // if (isset($_POST[$_inputName]) && count($_POST[$_inputName]) > 0) {
        //     for ($i=0; $i<count($_POST[$_inputName]); $i++) {
        //         $member_data = array(
        //             'name' => $_POST['project_members_name'][$i],
        //             'role' => $_POST['project_members_role'][$i],
        //             'department' => $_POST['project_members_department'][$i],
        //             'category' => $_POST['project_members_category'][$i]
        //         );
        //         $project_members[] = $member_data;
        //     }
        // }
        
        $user_id = getUser($_SESSION['fhsUser'])->id;
        if (empty($errors)) {
            createProject($project_sufix, $project_title, $project_subtitle, $project_excerpt, $project_description, $project_thumbnail, $project_members_result, $project_degree, $project_category, $project_tags, $project_links, $user_id);
        }
        /*
        if (isset($_POST['project_media_type'])) {
            $project = getProjectbySufixAndUser($project_sufix, $user_id);
            $project_id = $project->id;

            $project_media_blocks = [];
            $_inputName = "project_media_text";
            if (isset($_POST[$_inputName]) && count($_POST[$_inputName]) > 0) {
                for ($i=0; $i<count($_POST[$_inputName]); $i++) {
                    $media_data = array(
                        'title' => $_POST['project_media_title'][$i],
                        'type' => $_POST['project_media_type'][$i],
                        'content' => $_POST['project_media_text'][$i],
                        'description' => '-',
                        'pid' => $project_id
                    );
                    $project_media_blocks[] = $media_data;
                }
                
            }
            $_inputName = "project_media_file";
            if (isset($_FILES[$_inputName]['name']) && count($_FILES[$_inputName]['name']) > 0) {
                for ($i=0; $i<count($_FILES[$_inputName]['name']); $i++) {
                    $input_array = array(basename($_FILES[$_inputName]['name'][$i]), $_FILES[$_inputName]['tmp_name'][$i], $_FILES[$_inputName]['size'][$i], $_FILES[$_inputName]['type'][$i], $_FILES[$_inputName]['error'][$i]);
                    $media_file = fileUpload( $input_array, $storage_folder, array('jpeg','jpg','png','gif','mp3','mp4','pdf','doc'));

                    $media_data = array(
                        'title' => $_POST['project_media_title'][$i],
                        'type' => $_POST['project_media_type'][$i],
                        'content' => $media_file,
                        'description' => $_POST['project_media_description'][$i],
                        'pid' => $project_id
                    );
                    $project_media_blocks[] = $media_data;
                }
                
            }
            $_inputName = "project_media_url";
            if (isset($_POST[$_inputName]) && count($_POST[$_inputName]) > 0) {
                for ($i=0; $i<count($_POST[$_inputName]); $i++) {
                    $media_data = array(
                        'title' => $_POST['project_media_title'][$i],
                        'type' => $_POST['project_media_type'][$i],
                        'content' => $_POST['project_media_url'][$i],
                        'description' => $_POST['project_media_description'][$i],
                        'pid' => $project_id
                    );
                    $project_media_blocks[] = $media_data;
                }
                
            }
            
            $_inputName = "project_media_gallery";
            if (isset($_POST[$_inputName]) && count($_POST[$_inputName]) > 0) {
                for ($i=0; $i<count($_POST[$_inputName]); $i++) {
                    $media_data = array(
                        'title' => $_POST['project_media_title'][$i],
                        'type' => $_POST['project_media_type'][$i],
                        'content' => $_POST['project_media_gallery'][$i],
                        'description' => $_POST['project_media_description'][$i],
                        'pid' => $project_id
                    );
                    $project_media_blocks[] = $media_data;
                }
                
            }
            $media_blocks = (array)$project_media_blocks;
            //createMediaBlock($title, $type, $content, $description, $project_id)
            if ($media_blocks) {
                for ($i=0; $i<count($media_blocks); $i++) { 
                    //$media_blocks[$i]
                    createMediaBlock($media_blocks[$i]['title'], $media_blocks[$i]['type'], $media_blocks[$i]['content'], $media_blocks[$i]['description'], $media_blocks[$i]['pid']);
                    
                }
            }
            
        }
        */
        //header('Location: /projects/update.php?pid='.$project_sufix);
        header('Location: /projects/myprojects.php');
    }
    
?>

<body>
    <?php require "../components/nav.php"; ?>
    <section class="projects__create__container">
        
        <form action="" method="post" enctype="multipart/form-data">
            <input type="hidden" name="project_id" value="-" id="project_id" required>

            <label for="project_title"><b>Project Title</b></label>
            <input type="text" name="project_title" placeholder="please write project title here" value="" id="project_title" required>
            
            <input type="hidden" name="project_sufix" value="mysufix" id="project_sufix" required>
            

            <!-- <label for="project_subtitle"><b>project_subtitle</b></label> -->
            <input type="hidden" name="project_subtitle" value="subtitle here" id="project_subtitle" required>
            

            <!-- <label for="project_excerpt"><b>Short description</b></label> -->
            <input type="hidden" name="project_excerpt" value="excerpt here of description" id="project_excerpt" required>
            

            <label for="project_description"><b>Description (max. 120 Wörter)</b></label>
            <textarea name="project_description" id="project_description" placeholder="please write project description here" cols="50" required></textarea>
            
            
    <?php /*
            <label for="project_teaser"><b>project_teaser</b></label>
            <input type="file" name="project_teaser" id="project_teaser" accept="image/*,.jpg,video/mp4">
    */?>
            <label for="project_degree"><b>Project degree</b></label>
            <select name="project_degree" id="project_degree" required>
                <option value="Bachelorprojekt">Bachelorprojekt</option>
                <option value="Masterprojekt">Masterprojekt</option>
                <option value="Sonstiges">Sonstiges Projekt</option>
            </select>
            <label for="project_category"><b>Project category</b></label>
            <select name="project_category" id="project_category" required>
                <option value="Album">Album</option>
                <option value="Animationsfilm">Animationsfilm</option>
                <option value="App">App</option>
                <option value="Ausstellung">Ausstellung</option>
                <option value="Branding">Branding</option>
                <option value="Editorial">Editorial</option>
                <option value="Film">Film</option>
                <option value="Fotografien">Fotografien</option>
                <option value="Game">Game</option>
                <option value="Illustration">Illustration</option>
                <option value="Installation">Installation</option>
                <option value="Hörbuch">Hörbuch</option>
                <option value="Kampagne">Kampagne</option>
                <option value="Kurzfilm">Kurzfilm</option>
                <option value="Musik">Musik</option>
                <option value="Musikvideo">Musikvideo</option>
                <option value="Performance">Performance</option>
                <option value="Prototyp">Prototyp</option>
                <option value="Trailer">Trailer</option>
                <option value="Veranstaltung">Veranstaltung</option>
                <option value="Reality">Reality</option>
                <option value="Applikation">Applikation</option>
                <option value="Website">Website</option>
                <option value="Werbespot">Werbespot</option>
            </select>

            <label for="project_tags"><b>Project tags (6 tags minimum)</b></label>
            <input type="text" name="project_tags" placeholder="tag1, tag2, tag3" value="" id="project_tags" required>

            <label for="project_members"><b>Project members</b></label>
            <input type="text" name="project_members" placeholder="name 1, name 2, name 3" value="" id="project_members" required>
            
            <div class="project_members_container span-2-col" id="project_members_container">
                <?php /*<div class="project_member_wrapper form-group-wrapper">
                    <label for="project_members_name[]"><b>project_members_name</b></label>
                    <input type="text" name="project_members_name[]" id="project_members_name" value="member name 1" required>
                    
                    <label for="project_members_department[]"><b>project_members_department</b></label>
                    <select name="project_members_department[]" id="project_members_department"> 
                        <option value="MMT">MMT</option>
                        <option value="MMA">MMA</option>
                        <option value="HCI">HCI</option>
                        <option value="KMU">KMU</option>
                        <option value="HTB">HTB</option>
                        <option value="SMB">SMB</option>
                        <option value="SMC">SMC</option>
                        <option value="ITS">ITS</option>
                        <option value="AIS">AIS</option>
                        <option value="HTW">HTW</option>
                        <option value="BWI">BWI</option>
                        <option value="IMT">IMT</option>
                        <option value="SOZA">SOZA</option>
                        <option value="PDM">PDM</option>
                        <option value="BMA">BMA</option>
                        <option value="HEB">HEB</option>
                        <option value="GUK">GUK</option>
                        <option value="OTH">OTH</option>
                        <option value="ETH">ETH</option>
                        <option value="PTH">PTH</option>
                        <option value="RET">RET</option>
                    </select>

                    <label for="project_members_role[]"><b>project_members_role</b></label>
                    <input type="text" name="project_members_role[]" id="project_members_role" value="member role 1" required>
                    
                    <label for="project_members_category[]"><b>project_members_category</b></label>
                    <select name="project_members_category[]" id="project_members_category"> 
                        <option value="MMP1">MMP1</option>
                        <option value="MMP2">MMP2</option>
                        <option value="MMP2a">MMP2a</option>
                        <option value="MMP2b">MMP2b</option>
                        <option value="MMP3">MMP3</option>
                        <option value="AbschlussProject">Master Project</option>
                    </select>
                    
                    <button type="button" onclick="deleteField(this)">Delete Memeber</button> 
                </div>
                <button type="button" id="add_new_member_btn">Add New Member</button> 
                */?>
            </div>

            
            

            <div class="project_links_container span-2-col" id="project_links_container">
            <?php /*    
                <div class="project_link_wrapper form-group-wrapper">
                    <label for="project_link_title[]"><b>link txt</b></label>
                    <input type="text" name="project_link_title[]" id="project_link_title" value="link 1" required>

                    <label for="project_link_url[]"><b>link url</b></label>
                    <input type="text" name="project_link_url[]" id="project_link_url" value="https://www.example.com" required>

                    <button type="button" onclick="deleteField(this)">Delete Link</button> 
                </div>
            */?>
                <!-- <button class="old-btn" type="button" id="add_new_link_btn">Add New Link</button>  -->
            </div>

            <label for="project_thumbnail"><b>Thumbnail (1MB max)</b></label>
            <input type="file" name="project_thumbnail" id="project_thumbnail" max-size="1000" accept="image/*,.jpg" required>
    <?php /*
            <div class="project_media_container span-2-col" id="project_media_container">
                <button type="button" id="add_new_media_btn">Add New Media</button> 
            </div>
    */?>
            <input class="old-btn save-btn" type="submit" value='Create' name='create_project'>
        </form>
    </section>

    <?php require "../components/footer.php"; ?>
</body>
    <script src="../js/manageProjectFields.js"></script>
    <script src="../js/checkMediaLength.js"></script>
</html>