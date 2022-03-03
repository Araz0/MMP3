<?php
$sufixRegex = "/^([a-zA-Z0-9]+([_-]?[a-zA-Z0-9])*){3,64}$/"; 
$errors = array();
$storage_folder = "storage";


function makeStrUrlReady($string){
    $change_letters_from = ['ä','ö','ü',' '];
    $change_letters_to = ['ea','eo','eu','_'];
    $string = str_replace($change_letters_from, $change_letters_to, $string);
    return preg_replace("/[^a-zA-Z0-9_]/", "", $string);
}
function fileUpload($_inputArray, $_uploadFolder, $_allowedExtentions){
    $errors = [];
    //$input_array = array(basename($_FILES[$_inputNameX]['name'][$i]), $_FILES[$_inputNameX]['tmp_name'][$i], $_FILES[$_inputNameX]['size'][$i], $_FILES[$_inputNameX]['type'][$i], $_FILES[$_inputNameX]['error'][$i]);
    if (isset($_inputArray)) {

        $filename = $_inputArray[0];
        $fileTmpName  = $_inputArray[1];
        $fileSize = $_inputArray[2];
        $fileType = $_inputArray[3];
        $fileError = $_inputArray[3];
        $fileExtension =strtolower(substr($filename, -3));
        $localFileName = md5($filename.$fileTmpName).".$fileExtension";
        
        if (!in_array($fileExtension, $_allowedExtentions)) {
            array_push($errors, "file format must be one of the following: ".implode(" ",$_allowedExtentions));
        }

        if ($fileSize > 10000000) {
            array_push($errors,"File exceeds maximum size (10MB)");
        }
        $uploadFilePath = $_SERVER["DOCUMENT_ROOT"]."$_uploadFolder/" . $localFileName;

        if (empty($errors)) {
            if (move_uploaded_file($fileTmpName, $uploadFilePath)) {
                //echo $filename." 🚀🚀🚀🚀🚀 \n";
                $localFilePath = "/$_uploadFolder/$localFileName";
                
                return $localFilePath;
            } else {
                echo $filename . "❌❌❌❌❌ \n";
            }
        } else {
            return null;
        }

    }else{
        return null;
    }
}
function deleteFile($file){
    $file = $_SERVER["DOCUMENT_ROOT"].$file;
    if (file_exists($file)) {
        unlink($file);
    }
}
function initConfigs($first_release_date, $first_release_title, $second_release_date, $second_release_title){
    global $dbh;
    $first_release_date = date('d/M/Y H:i', strtotime($first_release_date));
    $second_release_date = date('d/M/Y H:i', strtotime($second_release_date));

    $query = "INSERT INTO configs (first_release_date, first_release_title, second_release_date, second_release_title) VALUES (:first_release_date, :first_release_title, :second_release_date, :second_release_title)";
    $sth = $dbh->prepare($query);
    $sth->bindParam('first_release_date', $first_release_date, PDO::PARAM_STR);
    $sth->bindParam('first_release_title', $first_release_title, PDO::PARAM_STR);
    $sth->bindParam('second_release_date', $second_release_date, PDO::PARAM_STR);
    $sth->bindParam('second_release_title', $second_release_title, PDO::PARAM_STR);

    $sth->execute();
}
function getConfigs(){
    global $dbh;
    $query = "SELECT * FROM configs WHERE id=?";
    $sth = $dbh->prepare($query);
    $sth->execute(array(1));
    return $sth->fetch();
}
function updateConfigs($first_release_date, $first_release_title, $second_release_date, $second_release_title){
    global $dbh;
    $query = "UPDATE configs SET first_release_date=:first_release_date, first_release_title=:first_release_title, second_release_date=:second_release_date, second_release_title=:second_release_title WHERE id=1";
    $sth = $dbh->prepare($query);
    $sth->bindParam('first_release_date', $first_release_date, PDO::PARAM_STR);
    $sth->bindParam('first_release_title', $first_release_title, PDO::PARAM_STR);
    $sth->bindParam('second_release_date', $second_release_date, PDO::PARAM_STR);
    $sth->bindParam('second_release_title', $second_release_title, PDO::PARAM_STR);
    $sth->execute();
}
function getUser($username){
    global $dbh;
    $username = strtolower($username);
    $query = "SELECT * FROM users WHERE username=?";
    $sth = $dbh->prepare($query);
    $sth->execute(array($username));
    return $sth->fetch();
}
function getAllUsers(){
    global $dbh;
    $query = "SELECT * FROM users";
    $sth = $dbh->prepare($query);
    $sth->execute();
    return $sth->fetchAll();
}
function getSearchedUsers($query_string){
    global $dbh;
    $query_string = '%'.$query_string.'%';
    $query = "SELECT * FROM users WHERE username ILIKE ? OR email ILIKE ? OR first_name ILIKE ? OR last_name ILIKE ? OR studies ILIKE ? OR role ILIKE ?;";
    $sth = $dbh->prepare($query);
    $sth->execute(array($query_string,$query_string,$query_string,$query_string,$query_string,$query_string));
    return $sth->fetchAll();
}
function updateUserRole($user_id, $new_role){
    global $dbh;

    $query = "UPDATE users SET role=:new_role WHERE id=:user_id";
    $sth = $dbh->prepare($query);

    $sth->bindParam('user_id', $user_id, PDO::PARAM_INT);
    $sth->bindParam('new_role', $new_role, PDO::PARAM_STR);
    
    $sth->execute();
}
function createUser($username, $email, $first_name, $last_name, $studies, $role) {
    global $dbh;
    
    $query = "INSERT INTO users (username, email, first_name, last_name, studies, role) VALUES (:username, :email, :first_name, :last_name, :studies, :role)";
    $sth = $dbh->prepare($query);
    $sth->bindParam('username', $username, PDO::PARAM_STR);
    $sth->bindParam('email', $email, PDO::PARAM_STR);
    $sth->bindParam('first_name', $first_name, PDO::PARAM_STR);
    $sth->bindParam('last_name', $last_name, PDO::PARAM_STR);
    $sth->bindParam('studies', $studies, PDO::PARAM_STR);
    $sth->bindParam('role', $role, PDO::PARAM_STR);

    $sth->execute();
}

function createProject($sufix, $title, $subtitle, $excerpt, $description, $thumbnail, $teaser, $members, $degree, $tags, $links, $user_id) {
    global $dbh;

    $members = json_encode($members);
    $links = json_encode($links);
    
    $query = "INSERT INTO projects (sufix, title, subtitle, excerpt, description, thumbnail, teaser, members, degree, tags, links, user_id) VALUES (:sufix, :title, :subtitle, :excerpt, :description, :thumbnail, :teaser, :members, :degree, :tags, :links, :user_id)";
    $sth = $dbh->prepare($query);

    $sth->bindParam('sufix', $sufix, PDO::PARAM_STR);
    $sth->bindParam('title', $title, PDO::PARAM_STR);
    $sth->bindParam('subtitle', $subtitle, PDO::PARAM_STR);
    $sth->bindParam('excerpt', $excerpt, PDO::PARAM_STR);
    $sth->bindParam('description', $description, PDO::PARAM_STR);
    $sth->bindParam('thumbnail', $thumbnail, PDO::PARAM_STR);
    $sth->bindParam('teaser', $teaser, PDO::PARAM_STR);
    $sth->bindParam('members', $members, PDO::PARAM_STR);
    $sth->bindParam('degree', $degree, PDO::PARAM_STR);
    $sth->bindParam('tags', $tags, PDO::PARAM_STR);
    $sth->bindParam('links', $links, PDO::PARAM_STR);
    $sth->bindParam('user_id', $user_id, PDO::PARAM_INT);
    $sth->execute();

}


function updateProject($sufix, $title, $subtitle, $excerpt, $description, $thumbnail, $teaser, $members, $degree, $tags, $links, $Project_id) {
    global $dbh;

    $members = json_encode($members);
    $links = json_encode($links);
    
    $query = "UPDATE projects SET sufix=:sufix, title=:title, subtitle=:subtitle, excerpt=:excerpt, description=:description, thumbnail=:thumbnail, teaser=:teaser, members=:members, degree=:degree, tags=:tags, links=:links WHERE id=:Project_id";
    $sth = $dbh->prepare($query);

    $sth->bindParam('sufix', $sufix, PDO::PARAM_STR);
    $sth->bindParam('title', $title, PDO::PARAM_STR);
    $sth->bindParam('subtitle', $subtitle, PDO::PARAM_STR);
    $sth->bindParam('excerpt', $excerpt, PDO::PARAM_STR);
    $sth->bindParam('description', $description, PDO::PARAM_STR);
    $sth->bindParam('thumbnail', $thumbnail, PDO::PARAM_STR);
    $sth->bindParam('teaser', $teaser, PDO::PARAM_STR);
    $sth->bindParam('members', $members, PDO::PARAM_STR);
    $sth->bindParam('degree', $degree, PDO::PARAM_STR);
    $sth->bindParam('tags', $tags, PDO::PARAM_STR);
    $sth->bindParam('links', $links, PDO::PARAM_STR);
    $sth->bindParam('Project_id', $Project_id, PDO::PARAM_INT);
    $sth->execute();
}
function deleteProject($pid, $user_id){
    global $dbh;
    $query = "DELETE FROM projects WHERE id=:pid AND user_id=:user_id";
    $sth = $dbh->prepare($query);
    $sth->bindParam('pid', $pid, PDO::PARAM_INT);
    $sth->bindParam('user_id', $user_id, PDO::PARAM_INT);
    $sth->execute();
}

function createMediaBlock($title, $type, $content, $description, $project_id){
    global $dbh;
    $query = "INSERT INTO media_blocks (title, type, content, description, project_id) VALUES (:title, :type, :content, :description, :project_id)";
    $sth = $dbh->prepare($query);

    $sth->bindParam('title', $title, PDO::PARAM_STR);
    $sth->bindParam('type', $type, PDO::PARAM_STR);
    $sth->bindParam('content', $content, PDO::PARAM_STR);
    $sth->bindParam('description', $description, PDO::PARAM_STR);
    $sth->bindParam('project_id', $project_id, PDO::PARAM_INT);
    $sth->execute();
}

function updateMediaBlock($title, $type, $content, $description, $block_id){
    global $dbh;
    $query = "UPDATE media_blocks SET title=:title, type=:type, content=:content, description=:description WHERE id=:block_id";
    $sth = $dbh->prepare($query);

    $sth->bindParam('title', $title, PDO::PARAM_STR);
    $sth->bindParam('type', $type, PDO::PARAM_STR);
    $sth->bindParam('content', $content, PDO::PARAM_STR);
    $sth->bindParam('description', $description, PDO::PARAM_STR);
    $sth->bindParam('block_id', $block_id, PDO::PARAM_INT);
    $sth->execute();
}
function deleteMediaBlock($block_id){
    global $dbh;
    $query = "DELETE FROM media_blocks WHERE id=:block_id";
    $sth = $dbh->prepare($query);
    $sth->bindParam('block_id', $block_id, PDO::PARAM_INT);
    $sth->execute();
}

function getMediaBlocks($pid) {
    global $dbh;
    $query = "SELECT * FROM media_blocks WHERE project_id=?";
    $sth = $dbh->prepare($query);
    $sth->execute(array($pid));
    return $sth->fetchAll();
}

function getProjectbyId($project_id){
    global $dbh;
    $query = "SELECT * FROM projects WHERE id=?";
    $sth = $dbh->prepare($query);
    $sth->execute(array($project_id));
    return $sth->fetch();
}

function getProjectbySufixAndUser($sufix, $user_id){
    global $dbh;
    $query = "SELECT * FROM projects WHERE sufix=? AND user_id=?";
    $sth = $dbh->prepare($query);
    $sth->execute(array($sufix, $user_id));
    return $sth->fetch();
}