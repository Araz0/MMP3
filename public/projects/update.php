
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<?php 

    $pagetitle = "Create Project";
    require '../functions.php';
    require "../components/head.php";

    $user_id = getUser($_SESSION['fhsUser'])->id;
    $project = getProjectbySufixAndUser($_GET['pid'], $user_id);
    if (!isset($project->id)) {
        header('Location: /404.php');
    }
    if ($user_id != $project->user_id) {
        header('Location: /405.php');
    }
    //$mediaBlocks = getMediaBlocks($project->id);

    if (isset($_POST['delete_project'])) {
        deleteProject($project->id, $user_id);
        header('Location: /projects/myprojects.php');
    }
    if (isset($_POST['update_project'])) {
        $project_title = $_POST['project_title'];
        $project_sufix = $_POST['project_sufix'];
        $project_subtitle = $_POST['project_subtitle'];
        $project_excerpt = $_POST['project_excerpt'];
        $project_description = $_POST['project_description'];
        $project_excerpt = $_POST['project_excerpt'];
        $project_degree = $_POST['project_degree'];
        $project_category = $_POST['project_category'];

        $_inputName = "project_thumbnail";
        $input_array = array(basename($_FILES[$_inputName]['name']), $_FILES[$_inputName]['tmp_name'], $_FILES[$_inputName]['size'], $_FILES[$_inputName]['type'], $_FILES[$_inputName]['error'], $user_id);
        $project_thumbnail = fileUpload( $input_array, $storage_folder, array('jpeg','jpg','png'));

        if ($project_thumbnail == null) {
            $project_thumbnail = $project->thumbnail;
        }else{
            deleteFile($project->thumbnail);
        }

        // $_inputName = "project_teaser";
        // $input_array = array(basename($_FILES[$_inputName]['name']), $_FILES[$_inputName]['tmp_name'], $_FILES[$_inputName]['size'], $_FILES[$_inputName]['type'], $_FILES[$_inputName]['error'], $user_id);
        // $project_teaser = fileUpload( $input_array, $storage_folder, array('jpeg','jpg','png','gif','mp4'));
        
        // if ($project_teaser == null) {
        //     $project_teaser = $project->teaser;
        // }else{
        //     deleteFile($project->teaser);
        // }

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
        
        updateProject($project_sufix, $project_title, $project_subtitle, $project_excerpt, $project_description, $project_thumbnail, $project_members_result, $project_degree, $project_category, $project_tags, $project_links, $project->id);
        
        // if (isset($_POST['project_media_type'])) {
        //     $project_id = $project->id;
            
        //     $project_media_blocks = [];

        //     $_inputTypeName = "project_media_type";
        //     if (isset($_POST[$_inputTypeName]) && count($_POST[$_inputTypeName]) > 0) {
        //         for ($i=0; $i<count($_POST[$_inputTypeName]); $i++) {
        //             $media_block_content = '';
                    
        //             if ($_inputTypeName[$i] == 'Media' || $_inputTypeName[$i] == 'Gallery') {
        //                 # code...
        //             }else{
        //                 $media_block_content = $_POST['project_media_content'][$i];
                        
        //             }

        //             $media_data = array(
        //                 'id' => $_POST['project_media_id'][$i],
        //                 'status' => $_POST['project_media_status'][$i],
        //                 'title' => $_POST['project_media_title'][$i],
        //                 'type' => $_POST['project_media_type'][$i],
        //                 'content' => $media_block_content,
        //                 'description' => $_POST['project_media_description'][$i],
        //                 'pid' => $project_id
        //             );

        //             $project_media_blocks[] = $media_data;
        //         }
                
        //     }

        //     $media_blocks = (array)$project_media_blocks;
            
        //     if ($media_blocks) {
        //         for ($i=0; $i<count($media_blocks); $i++) { 
        //             //$media_blocks[$i]
        //             if ($media_blocks[$i]['id'] == '-') {
        //                 createMediaBlock($media_blocks[$i]['title'], $media_blocks[$i]['type'], $media_blocks[$i]['content'], $media_blocks[$i]['description'], $media_blocks[$i]['pid']);
        //             }else{
        //                 if ($media_blocks[$i]['status'] == 'remove') {
        //                     deleteMediaBlock($media_blocks[$i]['id']);
        //                 }else{
        //                     updateMediaBlock($media_blocks[$i]['title'], $media_blocks[$i]['type'], $media_blocks[$i]['content'], $media_blocks[$i]['description'], $media_blocks[$i]['id']);
        //                 }
        //             }
        //         }
        //     }
        // }
        //header('Location: /projects/update.php?pid='.$project_sufix);
        header('Location: /projects/myprojects.php');
    }
    
?>

<body>
<?php require "../components/nav.php"; ?>
    <section class="projects__create__container">
        <form action="" method="post" enctype="multipart/form-data">
            <input type="hidden" name="project_id" value="-" id="project_id" required>

            <label for="project_title"><b>Project title</b></label>
            <input type="text" name="project_title" value="<?php echo $project->title; ?>" id="project_title" required>
            
            <!-- <label for="project_sufix"><b>URL sufix</b></label> -->
            <input type="hidden" name="project_sufix" value="<?php echo $project->sufix; ?>" id="project_sufix" required>

            <!-- <label for="project_subtitle"><b>project_subtitle</b></label> -->
            <input type="hidden" name="project_subtitle" value="<?php echo $project->subtitle; ?>" id="project_subtitle" required>
            

            <label for="project_excerpt"><b>Short description</b></label>
            <input type="text" name="project_excerpt" value="<?php echo $project->excerpt; ?>" id="project_excerpt" required>
            

            <label for="project_description"><b>Full description</b></label>
            <textarea name="project_description" id="project_description" rows="4" cols="50" required><?php echo $project->description; ?></textarea>
            

            <?php /*
                <label for="project_teaser"><b>project_teaser</b></label>
                <input type="file" name="project_teaser" id="project_teaser" accept="image/*,.jpg,video/mp4">
                <?php 
                    $fileExtension = strtolower(substr($project->teaser, -3));
                    if ($fileExtension == 'mp4') {?>
                        <div class="artplayer span-2-col" id="artplayer-<?php echo $project->sufix; ?>"></div>
                        
                        <script>
                            var art = new Artplayer({
                                container: '#artplayer-<?php echo $project->sufix; ?>',
                                url: '<?php echo $project->teaser; ?>',
                            });
                        </script>
                    <?php }else{ ?>
                        <img src="<?php echo $project->teaser; ?>" alt="<?php echo $project->title . ' teaser'; ?>" class="span-2-col">
                    <?php }
                ?>
            */?>
            <label for="project_degree"><b>Project degree</b></label>
            <select name="project_degree" id="project_degree" value="<?php echo $project->degree; ?>" required>
                <option value="Bachelor" <?php echo $project->degree == 'Bachelorprojekt' ? ' selected ' : '';?>>Bachelorprojekt</option>
                <option value="Master" <?php echo $project->degree == 'Masterprojekt' ? ' selected ' : '';?>>Masterprojekt</option>
                <option value="Master" <?php echo $project->degree == 'Sonstiges' ? ' selected ' : '';?>>Sonstiges</option>
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
            
            <label for="project_tags"><b>Project tags</b></label>
            <input type="text" name="project_tags" value="<?php echo $project->tags; ?>" id="project_tags" required>
            
            <label for="project_members"><b>Project members</b></label>
            <input type="text" name="project_members" value="name 1, name 2, name 3" id="project_members" required>

            <div class="project_members_container span-2-col" id="project_members_container">
            <?php /*            
                <?php 
                    $members = json_decode($project->members, true);
                    
                    if (isset($members) && count($members) > 0) {
                        for ($i=0; $i<count($members); $i++) {
                            ?>
                            <div class="project_member_wrapper form-group-wrapper">
                                <label for="project_members_name[]"><b>project_members_name</b></label>
                                <input type="text" name="project_members_name[]" id="project_members_name" value="<?php echo $members[$i]['name'];?>" required>
                                
                                <label for="project_members_department[]"><b>project_members_department</b></label>
                                <select name="project_members_department[]" id="project_members_department"> 
                                    <?php $member_dep = $members[$i]['department'];?>
                                    <option value="MMT" <?php echo $member_dep == 'MMP1' ? ' selected ' : '';?>>MMT</option>
                                    <option value="MMA" <?php echo $member_dep == 'MMA' ? ' selected ' : '';?>>MMA</option>
                                    <option value="HCI" <?php echo $member_dep == 'HCI' ? ' selected ' : '';?>>HCI</option>
                                    <option value="KMU" <?php echo $member_dep == 'KMU' ? ' selected ' : '';?>>KMU</option>
                                    <option value="HTB" <?php echo $member_dep == 'HTB' ? ' selected ' : '';?>>HTB</option>
                                    <option value="SMB" <?php echo $member_dep == 'SMB' ? ' selected ' : '';?>>SMB</option>
                                    <option value="SMC" <?php echo $member_dep == 'SMC' ? ' selected ' : '';?>>SMC</option>
                                    <option value="ITS" <?php echo $member_dep == 'ITS' ? ' selected ' : '';?>>ITS</option>
                                    <option value="AIS" <?php echo $member_dep == 'AIS' ? ' selected ' : '';?>>AIS</option>
                                    <option value="HTW" <?php echo $member_dep == 'HTW' ? ' selected ' : '';?>>HTW</option>
                                    <option value="BWI" <?php echo $member_dep == 'BWI' ? ' selected ' : '';?>>BWI</option>
                                    <option value="IMT" <?php echo $member_dep == 'IMT' ? ' selected ' : '';?>>IMT</option>
                                    <option value="SOZA" <?php echo $member_dep == 'SOZA' ? ' selected ' : '';?>>SOZA</option>
                                    <option value="PDM" <?php echo $member_dep == 'PDM' ? ' selected ' : '';?>>PDM</option>
                                    <option value="BMA" <?php echo $member_dep == 'BMA' ? ' selected ' : '';?>>BMA</option>
                                    <option value="HEB" <?php echo $member_dep == 'HEB' ? ' selected ' : '';?>>HEB</option>
                                    <option value="GUK" <?php echo $member_dep == 'GUK' ? ' selected ' : '';?>>GUK</option>
                                    <option value="OTH" <?php echo $member_dep == 'OTH' ? ' selected ' : '';?>>OTH</option>
                                    <option value="ETH" <?php echo $member_dep == 'ETH' ? ' selected ' : '';?>>ETH</option>
                                    <option value="PTH" <?php echo $member_dep == 'PTH' ? ' selected ' : '';?>>PTH</option>
                                    <option value="RET" <?php echo $member_dep == 'RET' ? ' selected ' : '';?>>RET</option>
                                </select>
                
                                <label for="project_members_role[]"><b>project_members_role</b></label>
                                <input type="text" name="project_members_role[]" id="project_members_role" value="<?php echo $members[$i]['role'];?>" required>
                                
                                <label for="project_members_category[]"><b>project_members_category</b></label>
                                <select name="project_members_category[]" id="project_members_category"> 
                                    <?php $member_cat = $members[$i]['category'];?>
                                    <option value="MMP1" <?php echo $member_cat == 'MMP1' ? ' selected ' : '';?>>MMP1</option>
                                    <option value="MMP2" <?php echo $member_cat == 'MMP2' ? ' selected ' : '';?>>MMP2</option>
                                    <option value="MMP2a" <?php echo $member_cat == 'MMP2a' ? ' selected ' : '';?>>MMP2a</option>
                                    <option value="MMP2b" <?php echo $member_cat == 'MMP2b' ? ' selected ' : '';?>>MMP2b</option>
                                    <option value="MMP3" <?php echo $member_cat == 'MMP3' ? ' selected ' : '';?>>MMP3</option>
                                    <option value="AbschlussProject" <?php echo $member_cat == 'AbschlussProject' ? ' selected ' : '';?>>Master Project</option>
                                </select>
                                
                                <button type="button" onclick="deleteField(this)">Delete Memeber</button> 
                            </div>
                            <?php
                        }
                        
                    }
                ?>
                
                <button type="button" id="add_new_member_btn">Add New Member</button> 
            */?>
            </div>

            <div class="project_links_container span-2-col" id="project_links_container">
                <?php 
                    $links = json_decode($project->links, true);
                    
                    if (isset($links) && count($links) > 0) {
                        for ($i=0; $i<count($links); $i++) {
                            echo '
                            <div class="project_link_wrapper form-group-wrapper">
                                <label for="project_link_title[]"><b>link text</b></label>
                                <input type="text" name="project_link_title[]" id="project_link_title" value="'.$links[$i]['title'].'" required>
                
                                <label for="project_link_url[]"><b>link url</b></label>
                                <input type="text" name="project_link_url[]" id="project_link_url" value="'.$links[$i]['link'].'" required>
                
                                <button type="button" onclick="deleteField(this)">Delete Link</button> 
                                
                            </div>
                            ';
                        }
                        
                    }
                ?>
                
                <button class="old-btn" type="button" id="add_new_link_btn">Add New Link</button> 
            </div>

            <label for="project_thumbnail"><b>Thumbnail (1MB max)</b></label>
            <input type="file" name="project_thumbnail" id="project_thumbnail" max-size="1000" accept="image/*,.jpg">
            <img src="<?php echo $project->thumbnail; ?>" alt="<?php echo $project->title . ' thumbnail'; ?>" class="span-2-col">
        <?php /*
            <div class="project_media_container span-2-col" id="project_media_container">
                <?php 
                    if (isset($mediaBlocks)) {
                        foreach ($mediaBlocks as $key => $mediaBlock) {
                            ?>
                            <div>
                                <input type="hidden" name="project_media_status[]" value="good" id="project_media_status">
                                <input type="hidden" name="project_media_id[]" value="<?php echo $mediaBlock->id; ?>" id="project_media_id">

                                <div class="project_media_wrapper form-group-wrapper">
                                    <label for="project_media_type[]"><b>project_media_type</b></label>
                                    <select name="project_media_type[]" id="project_media_type" value="<?php echo $mediaBlock->type; ?>" onchange="changeInputType(this)" required> 
                                        <option value="Text" <?php echo $mediaBlock->type == 'Text' ? ' selected ' : '';?>>Text</option>
                                        <option value="Media" <?php echo $mediaBlock->type == 'Media' ? ' selected ' : '';?>>Media(image, video, audio, document)</option>
                                        <option value="Embeded" <?php echo $mediaBlock->type == 'Embeded' ? ' selected ' : '';?>>Embeded youtube | Vimeo</option>
                                        <option value="Gallery" <?php echo $mediaBlock->type == 'Gallery' ? ' selected ' : '';?>>Gallery</option>
                                    </select>

                                    <label for="project_media_title[]"><b>project_media_title</b></label>
                                    <input type="text" name="project_media_title[]" value="<?php echo $mediaBlock->title; ?>" id="project_media_title" required>

                                    <div class="project_media_block">
                                        <label for="project_media_content[]"><b>project_media_content</b></label>
                                    <?php switch ($mediaBlock->type){
                                        case "Text":
                                            echo '
                                            <textarea name="project_media_content[]" id="project_media_content" rows="4" cols="50" required>'.$mediaBlock->content.'</textarea>
                                            ';
                                        break;
                                        case "Media":
                                            if (isset($mediaBlock->file)) {
                                                echo '
                                                <input type="file" name="project_media_content[]" id="project_media_content" value="'.$mediaBlock->content.'" accept="image/*,.jpg">
                                            ';
                                            }
                                        break;
                                        case "Embeded":
                                            echo '
                                                <input type="text" name="project_media_content[]" value="'.$mediaBlock->content.'" id="project_media_content" required>
                                            ';
                                        break;
                                        case "Gallery":
                                            echo '
                                                <input type="file" name="project_media_content[]" id="project_media_content" accept="image/*,.jpg" multiple>
                                                ';
                                            break;
                                        default:
                                        
                                    } 
                                    ?>
                                        <label for="project_media_description[]"><b>project_media_description</b></label>
                                        <input type="text" name="project_media_description[]" value="<?php echo $mediaBlock->description;?>" id="project_media_description" required>
                                    </div>
                                
                                    <button type="button" onclick="deleteMediaBlock(this)">Delete Media</button>
                                </div>

                            </div>
                    <?php   }
                        
                    }
                ?>
                <button type="button" id="add_new_media_btn">Add New Media</button> 
            </div>
        */?>
            <input class="old-btn save-btn" type="submit" value='Update' name='update_project'>
            <input class="old-btn delete-btn" type="submit" value='Delete' name='delete_project'>
        </form>
    </section>
    <?php require "../components/footer.php"; ?>
</body>
    <script src="../js/manageProjectFields.js"></script>
    <script src="../js/checkMediaLength.js"></script>
</html>