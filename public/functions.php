<?php
$sufixRegex = "/^([a-zA-Z0-9]+([_-]?[a-zA-Z0-9])*){3,64}$/"; 
$errors = array();
$storage_folder = "storage";

function mutlipleFilesUpload($_inputName, $_uploadFolder, $_allowedExtentions){

    if (isset($_FILES[$_inputName])) {

        if (count($_FILES[$_inputName]['name']) > 0) {
            for ($i=0; $i<count($_FILES[$_inputName]['name']); $i++) {
                if ($_FILES[$_inputName]['tmp_name'][$i] != "") {
                    
                    $_inputNameX = "project_members_thumbnail";
                    $input_array = array(basename($_FILES[$_inputNameX]['name'][$i]), $_FILES[$_inputNameX]['tmp_name'][$i], $_FILES[$_inputNameX]['size'][$i], $_FILES[$_inputNameX]['type'][$i], $_FILES[$_inputNameX]['error'][$i]);
                    $localFilePath = fileUpload( $input_array, $_uploadFolder, array('jpeg','jpg','png'));

                    $member_data = array(
                        'name' => $_POST['project_members_name'][$i],
                        'role' => $_POST['project_members_role'][$i],
                        'thumbnail' => $localFilePath
                    );
                    $project_members[] = $member_data;
                }
            }
            return $project_members;
        }
        
    }
}
function fileUpload($_inputArray, $_uploadFolder, $_allowedExtentions){
    if (isset($_inputArray)) {

        $filename = $_inputArray[0];
        $fileTmpName  = $_inputArray[1];
        $fileSize = $_inputArray[2];
        $fileType = $_inputArray[3];
        $fileError = $_inputArray[3];
        $fileExtension =substr($filename, -3);
        $localFileName = md5($filename.$fileTmpName).".$fileExtension";
        
        /*if (!in_array($fileExtension, $_allowedExtentions)) {
            //array_push($errors, "file format must be one of the following: ".implode(" ",$_allowedExtentions));
        }

        if ($fileSize > 4000000) {
            //array_push($errors,"File exceeds maximum size (4MB)");
        }*/
        $uploadFilePath = $_SERVER["DOCUMENT_ROOT"]."$_uploadFolder/" . $localFileName;

        if (empty($errors)) {
            if (move_uploaded_file($fileTmpName, $uploadFilePath)) {
                echo $filename." 🚀🚀🚀🚀🚀 \n";
                $localFilePath = "/$_uploadFolder/$localFileName";
                echo "<img src='$localFilePath' alt='$filename'>";
                return $localFilePath;
            } else {
                echo $filename . "❌❌❌❌❌ \n";
                echo $fileError;
            }
            /*ifecho '<pre>debugging info:';
            print_r($_FILES);
            print '</pre>';*/
        } else {
            foreach ($errors as $error) {
                echo $error . "These are the errors" . "\n";
            }
        }
        
        
        

    }
}

function getUser($username){
    global $dbh;
    $username = strtolower($username);
    $query = "SELECT * FROM users WHERE username=?";
    $sth = $dbh->prepare($query);
    $sth->execute(array($username));
    return $sth->fetch();
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

function createProject($sufix, $title, $subtitle, $excerpt, $description, $thumbnail, $hero, $members, $degree, $category, $tags, $links, $location, $user_id) {
    global $dbh;

    $members = json_encode($members, JSON_FORCE_OBJECT);
    $links = json_encode($links, JSON_FORCE_OBJECT);
    $location = json_encode($location, JSON_FORCE_OBJECT);

    $query = "INSERT INTO projects (sufix, title, subtitle, excerpt, description, thumbnail, hero, members, degree, category, tags, links, location, user_id) VALUES (:sufix, :title, :subtitle, :excerpt, :description, :thumbnail, :hero, :members, :degree, :category, :tags, :links, :location, :user_id)";
    $sth = $dbh->prepare($query);

    $sth->bindParam('sufix', $sufix, PDO::PARAM_STR);
    $sth->bindParam('title', $title, PDO::PARAM_STR);
    $sth->bindParam('subtitle', $subtitle, PDO::PARAM_STR);
    $sth->bindParam('excerpt', $excerpt, PDO::PARAM_STR);
    $sth->bindParam('description', $description, PDO::PARAM_STR);
    $sth->bindParam('thumbnail', $thumbnail, PDO::PARAM_STR);
    $sth->bindParam('hero', $hero, PDO::PARAM_STR);
    $sth->bindParam('members', $members, PDO::PARAM_STR);
    $sth->bindParam('degree', $degree, PDO::PARAM_STR);
    $sth->bindParam('category', $category, PDO::PARAM_STR);
    $sth->bindParam('tags', $tags, PDO::PARAM_STR);
    $sth->bindParam('links', $links, PDO::PARAM_STR);
    $sth->bindParam('location', $location, PDO::PARAM_STR);
    $sth->bindParam('user_id', $user_id, PDO::PARAM_INT);
    $sth->execute();

}

function getProject($project_id){
    global $dhb;
    $query = "SELECT * FROM projects WHERE id=?";
    $sth = $dbh->prepare($query);
    $sth->execute(array($project_id));
    return $sth->fetch();
}
