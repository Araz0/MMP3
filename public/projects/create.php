
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<?php 
// Show all information, defaults to INFO_ALL


    $pagetitle = "Create Project";
    require '../config.php'; //This is the oauth-config! You will also need your standard-config file
    require '../functions.php';
    require "../components/head.php";
    if (isset($_POST['create_project'])) {
        $project_title = $_POST['project_title'];
        $project_sufix = $_POST['project_sufix'];
        $project_subtitle = $_POST['project_subtitle'];
        $project_excerpt = $_POST['project_excerpt'];
        $project_description = $_POST['project_description'];

        $_inputName = "project_thumbnail";
        $input_array = array(basename($_FILES[$_inputName]['name']), $_FILES[$_inputName]['tmp_name'], $_FILES[$_inputName]['size'], $_FILES[$_inputName]['type'], $_FILES[$_inputName]['error']);
        $project_thumbnail = fileUpload( $input_array, $storage_folder, array('jpeg','jpg','png'));

        $_inputName = "project_hero";
        $input_array = array(basename($_FILES[$_inputName]['name']), $_FILES[$_inputName]['tmp_name'], $_FILES[$_inputName]['size'], $_FILES[$_inputName]['type'], $_FILES[$_inputName]['error']);
        $project_hero = fileUpload( $input_array, $storage_folder, array('jpeg','jpg','png'));

        $project_members = [];
        $project_members = ProcessProjectMembers("project_members_thumbnail", $storage_folder, array('jpeg','jpg','png'));

        $project_excerpt = $_POST['project_excerpt'];
        $project_category = $_POST['project_category'];
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


        $project_location = array(
            'type' => $_POST['project_location_type'],
            'address' => $_POST['project_location_address']
        );
        
        $user_id = getUser($_SESSION['fhsUser'])->id;
        
        createProject($project_sufix, $project_title, $project_subtitle, $project_excerpt, $project_description, $project_thumbnail, $project_hero, $project_members, $project_excerpt, $project_category, $project_tags, $project_links, $project_location, $user_id);
    }
    
?>

<body>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="project_id" value="-" id="project_id" required>

        <label for="project_title"><b>project_title</b></label>
        <input type="text" name="project_title" value="my title" id="project_title" required>
        
    
        <label for="project_sufix"><b>project_sufix</b></label>
        <input type="text" name="project_sufix" value="mysufix" id="project_sufix" required>
        

        <label for="project_subtitle"><b>project_subtitle</b></label>
        <input type="text" name="project_subtitle" value="subtitle here" id="project_subtitle" required>
        

        <label for="project_excerpt"><b>project_excerpt</b></label>
        <input type="text" name="project_excerpt" value="excerpt here of description" id="project_excerpt" required>
        

        <label for="project_description"><b>project_description</b></label>
        <textarea name="project_description" id="project_description" rows="4" cols="50" required>project_description project_description project_description</textarea>
        

        <label for="project_thumbnail"><b>project_thumbnail</b></label>
        <input type="file" name="project_thumbnail" id="project_thumbnail" accept="image/*,.jpg">
        

        <label for="project_hero"><b>project_hero</b></label>
        <input type="file" name="project_hero" id="project_hero" accept="image/*,.jpg,video/mp4">
        
        
        <div class="project_members_container span-2-col" id="project_members_container">
            <div class="project_member_wrapper form-group-wrapper">
                <label for="project_members_name[]"><b>project_members_name</b></label>
                <input type="text" name="project_members_name[]" id="project_members_name" value="member name 1" required>
                
                <label for="project_members_department[]"><b>project_members_department</b></label>
                <select name="project_members_department[]" id="project_members_department"> 
                    <option value="MMA">MMA</option>
                    <option value="MMT">MMT</option>
                    <option value="BWL">BWL</option>
                </select>

                <label for="project_members_role[]"><b>project_members_role</b></label>
                <input type="text" name="project_members_role[]" id="project_members_role" value="member role 1" required>
                
                <label for="project_members_thumbnail[]"><b>project_members_thumbnail</b></label>
                <input type="file" name="project_members_thumbnail[]" id="project_members_thumbnail" accept="image/*,.jpg" >
                
                <button type="button" onclick="deleteField(this)">Delete Memeber</button> 
            </div>
            <button type="button" id="add_new_member_btn">Add New Member</button> 
        </div>

        <label for="project_degree"><b>project_degree</b></label>
        <select name="project_degree" id="project_degree">
            <option value="Bachelor">Bachelor</option>
            <option value="Master">Master</option>
        </select>
        

        <label for="project_category"><b>project_category</b></label>
        <select name="project_category" id="project_category"> 
            <option value="MMP1">MMP1</option>
            <option value="MMP2">MMP2</option>
            <option value="MMP2a">MMP2a</option>
            <option value="MMP2b">MMP2b</option>
            <option value="MMP3">MMP3</option>
            <option value="AbschlussProject">AbschlussProject</option>
        </select>
        

        <label for="project_tags"><b>project_tags</b></label>
        <input type="text" name="project_tags" value="tag1, tag2, tag3" id="project_tags" required>
        

        <div class="project_links_container span-2-col" id="project_links_container">
            <div class="project_link_wrapper form-group-wrapper">
                <label for="project_link_title[]"><b>project_link_title</b></label>
                <input type="text" name="project_link_title[]" id="project_link_title" value="link 1" required>

                <label for="project_link_url[]"><b>project_link_url</b></label>
                <input type="text" name="project_link_url[]" id="project_link_url" value="https://www.example.com" required>

                <button type="button" onclick="deleteField(this)">Delete Link</button> 
                <br>
            </div>
            <button type="button" id="add_new_link_btn">Add New Link</button> 
        </div>

        <div class="project_media_container span-2-col" id="project_media_container">
            <div class="project_media_wrapper form-group-wrapper">
                <label for="project_media_type[]"><b>project_media_type</b></label>
                <select name="project_media_type[]" id="project_media_type" onchange="changeInputType(this)" required> 
                    <option value="Text">Text</option>
                    <option value="Media">Media</option>
                    <option value="Document">Document</option>
                    <option value="Gallery">Gallery</option>
                </select>
    
                <label for="project_media_title[]"><b>project_media_title</b></label>
                <input type="text" name="project_media_title[]" value="media title" id="project_media_title" required>
    
                <div class="project_media_block">
                    <label for="project_media_text[]"><b>project_media_text</b></label>
                    <textarea name="project_media_text[]" id="project_media_text" rows="4" cols="50" required>project_media_text project_media_text project_media_text</textarea>
                </div>
                <button type="button" onclick="deleteField(this)">Delete Media</button> 
            </div>
            <button type="button" id="add_new_media_btn">Add New Media</button> 
        </div>

        <label for="project_location_type"><b>project_location_type</b></label>
        <select name="project_location_type" id="project_location_type">
            <option value="FH Room">FH Room</option>
            <option value="Street Address">Street Address</option>
        </select>
        

        <label for="project_location_address"><b>project_location_address</b></label>
        <input type="text" name="project_location_address" value="355" id="project_location_address" required>
        

        <input class="" type="submit" value='Create' name='create_project'>
    </form>

    
</body>
    <script src="../js/manageProjectFields.js"></script>
    <script src="../js/checkMediaLength.js"></script>
</html>