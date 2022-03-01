
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<?php 
// Show all information, defaults to INFO_ALL


    $pagetitle = "Create Project";
    require '../config.php'; //This is the oauth-config! You will also need your standard-config file
    require '../functions.php';
    require "../components/head.php";

    $user_id = getUser($_SESSION['fhsUser'])->id;
    $project = getProjectbySufixAndUser($_GET['pid'], $user_id);

    if (isset($_POST['update_project'])) {
        $project_title = $_POST['project_title'];
        $project_sufix = makeStrUrlReady($project_title);
        $project_subtitle = $_POST['project_subtitle'];
        $project_excerpt = $_POST['project_excerpt'];
        $project_description = $_POST['project_description'];

        $_inputName = "project_thumbnail";
        $input_array = array(basename($_FILES[$_inputName]['name']), $_FILES[$_inputName]['tmp_name'], $_FILES[$_inputName]['size'], $_FILES[$_inputName]['type'], $_FILES[$_inputName]['error']);
        $project_thumbnail = fileUpload( $input_array, $storage_folder, array('jpeg','jpg','png'));

        $_inputName = "project_teaser";
        $input_array = array(basename($_FILES[$_inputName]['name']), $_FILES[$_inputName]['tmp_name'], $_FILES[$_inputName]['size'], $_FILES[$_inputName]['type'], $_FILES[$_inputName]['error']);
        $project_teaser = fileUpload( $input_array, $storage_folder, array('jpeg','jpg','png','mp4'));

        $project_excerpt = $_POST['project_excerpt'];
        $project_degree = $_POST['project_degree'];

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

        $project_members = [];
        $_inputName = "project_members_name";
        if (isset($_POST[$_inputName]) && count($_POST[$_inputName]) > 0) {
            for ($i=0; $i<count($_POST[$_inputName]); $i++) {
                $member_data = array(
                    'name' => $_POST['project_members_name'][$i],
                    'role' => $_POST['project_members_role'][$i],
                    'department' => $_POST['project_members_department'][$i],
                    'category' => $_POST['project_members_category'][$i]
                );
                $project_members[] = $member_data;
            }
        }
        
        $user_id = getUser($_SESSION['fhsUser'])->id;
        
        createProject($project_sufix, $project_title, $project_subtitle, $project_excerpt, $project_description, $project_thumbnail, $project_teaser, $project_members, $project_degree, $project_tags, $project_links, $user_id);
        
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
    }
    
?>

<body>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="project_id" value="-" id="project_id" required>

        <label for="project_title"><b>project_title</b></label>
        <input type="text" name="project_title" value="<?php echo $project->title; ?>" id="project_title" required>
        
        <label for="project_sufix"><b>project_sufix</b></label>
        <input type="text" name="project_sufix" value="<?php echo $project->sufix; ?>" id="project_sufix" required>

        <label for="project_subtitle"><b>project_subtitle</b></label>
        <input type="text" name="project_subtitle" value="<?php echo $project->subtitle; ?>" id="project_subtitle" required>
        

        <label for="project_excerpt"><b>project_excerpt</b></label>
        <input type="text" name="project_excerpt" value="<?php echo $project->excerpt; ?>" id="project_excerpt" required>
        

        <label for="project_description"><b>project_description</b></label>
        <textarea name="project_description" id="project_description" rows="4" cols="50" required><?php echo $project->description; ?></textarea>
        

        <label for="project_thumbnail"><b>project_thumbnail</b></label>
        <input type="file" name="project_thumbnail" id="project_thumbnail" accept="image/*,.jpg">
        <img src="<?php echo $project->thumbnail; ?>" alt="<?php echo $project->title . ' thumbnail'; ?>" class="span-2-col">
        

        <label for="project_teaser"><b>project_teaser</b></label>
        <input type="file" name="project_teaser" id="project_teaser" accept="image/*,.jpg,video/mp4">
        <?php 
            $fileExtension = $project->teaser;
            if ($fileExtension == 'mp4') {
                # code...
            }else{ ?>
                <img src="<?php echo $project->teaser; ?>" alt="<?php echo $project->title . ' teaser'; ?>" class="span-2-col">
            <?php }
        ?>
        
        <label for="project_degree"><b>project_degree</b></label>
        <select name="project_degree" id="project_degree" value="<?php echo $project->degree; ?>">
            <option value="Bachelor">Bachelor</option>
            <option value="Master">Master</option>
        </select>

        <label for="project_tags"><b>project_tags</b></label>
        <input type="text" name="project_tags" value="<?php echo $project->tags; ?>" id="project_tags" required>
        
        <div class="project_members_container span-2-col" id="project_members_container">

            <?php 
                $members = json_decode($project->members, true);
                
                if (isset($members) && count($members) > 0) {
                    for ($i=0; $i<count($members); $i++) {
                        echo '
                        <div class="project_member_wrapper form-group-wrapper">
                            <label for="project_members_name[]"><b>project_members_name</b></label>
                            <input type="text" name="project_members_name[]" id="project_members_name" value="'.$members[$i]['name'].'" required>
                            
                            <label for="project_members_department[]"><b>project_members_department</b></label>
                            <select name="project_members_department[]" id="project_members_department" value="'.$members[$i]['department'].'"> 
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
                            <input type="text" name="project_members_role[]" id="project_members_role" value="'.$members[$i]['role'].'" required>
                            
                            <label for="project_members_category[]"><b>project_members_category</b></label>
                            <select name="project_members_category[]" id="project_members_category" value="'.$members[$i]['category'].'"> 
                                <option value="MMP1">MMP1</option>
                                <option value="MMP2">MMP2</option>
                                <option value="MMP2a">MMP2a</option>
                                <option value="MMP2b">MMP2b</option>
                                <option value="MMP3">MMP3</option>
                                <option value="AbschlussProject">Master Project</option>
                            </select>
                            
                            <button type="button" onclick="deleteField(this)">Delete Memeber</button> 
                        </div>
                        ';
                    }
                    
                }
            ?>
            
            <button type="button" id="add_new_member_btn">Add New Member</button> 
        </div>

        
        

        <div class="project_links_container span-2-col" id="project_links_container">
            <?php 
                $links = json_decode($project->links, true);
                
                if (isset($links) && count($links) > 0) {
                    for ($i=0; $i<count($links); $i++) {
                        echo '
                        <div class="project_link_wrapper form-group-wrapper">
                            <label for="project_link_title[]"><b>project_link_title</b></label>
                            <input type="text" name="project_link_title[]" id="project_link_title" value="'.$links[$i]['title'].'" required>
            
                            <label for="project_link_url[]"><b>project_link_url</b></label>
                            <input type="text" name="project_link_url[]" id="project_link_url" value="'.$links[$i]['link'].'" required>
            
                            <button type="button" onclick="deleteField(this)">Delete Link</button> 
                            
                        </div>
                        ';
                    }
                    
                }
            ?>
            
            <button type="button" id="add_new_link_btn">Add New Link</button> 
        </div>

        <div class="project_media_container span-2-col" id="project_media_container">
            <?php 
                $mediaBlocks = getMediaBlocks($project->id);
                if (isset($mediaBlocks)) {
                    
                    foreach ($mediaBlocks as $key => $mediaBlock) {
                        echo '<div class="project_media_wrapper form-group-wrapper">';
                        echo '
                        <label for="project_media_type[]"><b>project_media_type</b></label>
                        <select name="project_media_type[]" id="project_media_type" value="'.$mediaBlock->type.'" onchange="changeInputType(this)" required> 
                            <option value="Text">Text</option>
                            <option value="Media">Media(image, video, audio, document)</option>
                            <option value="Embeded">Embeded youtube | Vimeo</option>
                            <option value="Gallery">Gallery</option>
                        </select>

                        <label for="project_media_title[]"><b>project_media_title</b></label>
                        <input type="text" name="project_media_title[]" value="'.$mediaBlock->title.'" id="project_media_title" required>

                        <div class="project_media_block">';
                        switch ($mediaBlock->type){
                            case "text":
                                echo '
                                <label for="project_media_text[]"><b>project_media_text</b></label>
                                <textarea name="project_media_text[]" id="project_media_text" rows="4" cols="50" required>'.$mediaBlock->content.'</textarea>
                                ';
                              break;
                              case "Media":
                                if (isset($mediaBlock->file)) {
                                    echo '
                                    <label for="project_media_file[]"><b>project_media_file</b></label>
                                    <input type="file" name="project_media_file[]" id="project_media_file" value="'.$mediaBlock->file.'" accept="image/*,.jpg">
                                ';
                                }
                              break;
                            case "Embeded":
                                echo '
                                    <label for="project_media_url[]"><b>project_media_url</b></label>
                                    <input type="text" name="project_media_url[]" value="'.$mediaBlock->content.'" id="project_media_url" required>
                                ';
                              break;
                            case "Gallery":
                                echo '
                                    <label for="project_media_gallery[]"><b>project_media_gallery</b></label>
                                    <input type="file" name="project_media_gallery[]" id="project_media_gallery" accept="image/*,.jpg" multiple>
                                    ';
                                break;
                            default:
                              
                        } 

                            
                        echo '
                            <label for="project_media_description[]"><b>project_media_description</b></label>
                            <input type="text" name="project_media_description[]" value='.$mediaBlock->description.'" id="project_media_description" required>
                        </div>

                        <button type="button" onclick="deleteField(this)">Delete Media</button> 
                        ';
                        echo '</div>';
                    }
                    
                }
            ?>
            <button type="button" id="add_new_media_btn">Add New Media</button> 
        </div>

        <input class="" type="submit" value='Create' name='update_project'>
    </form>

    
</body>
    <script src="../js/manageProjectFields.js"></script>
    <script src="../js/checkMediaLength.js"></script>
</html>