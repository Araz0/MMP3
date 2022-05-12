
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<?php 
// Show all information, defaults to INFO_ALL


    $pagetitle = "Control Panel";
    require 'config.php';
    require 'functions.php';
    require "components/head.php";

    $user_id = getUser($_SESSION['fhsUser'])->id;
    
    $all_captchas = getAllCaptchas();
    $all_users = [];
    if (isset($_POST['set_configs'])) {
        updateConfigs($_POST['first_date_time'], $_POST['first_title'], $_POST['second_date_time'], $_POST['second_title']);
    }
    if (isset($_POST['update_user'])) {
        updateUserRole($_POST['user_id'], $_POST['user_role']);
    }
    if (isset($_POST['submit_user_search'])){
        $all_users = getSearchedUsers($_POST['user_search']);
    }else {
        $all_users = getAllUsers();
    }

    if (isset($_POST['submit_new_captcha'])){
        $_inputName = "new_captcha_file";
        $input_array = array(basename($_FILES[$_inputName]['name']), $_FILES[$_inputName]['tmp_name'], $_FILES[$_inputName]['size'], $_FILES[$_inputName]['type'], $_FILES[$_inputName]['error'], $user_id);
        $captcha_file_path = fileUpload( $input_array, $storage_folder, array('jpeg','jpg','png'));

        createCaptcha($_POST['new_captcha_title'], $captcha_file_path, $_POST['new_captcha_solution']);
        header("Refresh:0");
    }
    if (isset($_POST['remove_captcha'])){
        deleteFile($_POST['captcha_path']);
        delete_captcha($_POST['captcha_path']);
        header("Refresh:0");
    }
    $configs = getConfigs();
?>

<body>
    <section>
        <form action="" method="post" enctype="multipart/form-data">
            <label for="first_title"><b>First Release Title</b></label>
            <input type="text" name="first_title" id="first_title" value="<?php echo $configs->first_release_title; ?>">

            <label for="first_date_time">date and time:</label>
            <input type="datetime-local" id="first_date_time" name="first_date_time" value="<?php echo $configs->first_release_date; ?>"> 

            <label for="second_title"><b>Second Release Title</b></label>
            <input type="text" name="second_title" id="second_title" value="<?php echo $configs->second_release_title; ?>">

            <label for="second_date_time">date and time:</label>
            <input type="datetime-local" id="second_date_time" name="second_date_time" value="<?php echo $configs->second_release_date; ?>">

            <input type="submit" value='Update' name='set_configs'>
        </form>
    </section>
    <section>
        <form action="" method="post" enctype="multipart/form-data">
            <label for="user_search"><b>Search: </b></label>
            <input type="text" name="user_search" id="user_search" required>

            <input type="submit" value='Search' name='submit_user_search'>
        </form>
    </section>

    <section>
        <?php 
            foreach($all_users as $i => $user) {?>
                <form action="" method="post" enctype="multipart/form-data">
                    <p><?php echo $user->username.' - '.$user->first_name.' '.$user->last_name.' - '.$user->email; ?></p>
                    <input type="hidden" name="user_id" value="<?php echo $user->id; ?>" id="user_id" required>

                    <label for="user_role"><b>user_role</b></label>
                    <select name="user_role" id="user_role"> 
                        <?php $user_role = $user->role;?>
                        <option value="STUD" <?php echo $user_role == 'STUD' ? ' selected ' : '';?>>STUDENT</option>
                        <option value="STAFF" <?php echo $user_role == 'STAFF' ? ' selected ' : '';?>>STAFF</option>
                        <option value="ADMIN" <?php echo $user_role == 'ADMIN' ? ' selected ' : '';?>>ADMIN</option>

                    </select>

                    <input type="submit" value='Update Role' name='update_user'>
                </form>
                
            <?php }
        ?>
    </section>
    <section>
        <?php 
            foreach($all_captchas as $i => $captcha) {?>
                <form action="" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="captcha_path" id="captcha_path" value="<?php echo $captcha->path;?>">
                    <p><?php echo $captcha->title; ?></p>
                    <p><?php echo $captcha->solution; ?></p>
                    <img src="<?php echo $captcha->path; ?>" alt="<?php echo $captcha->title; ?>">
                    <input type="submit" value='Remove' name='remove_captcha'>
                </form>
                
            <?php }
        ?>
        <form action="" method="post" enctype="multipart/form-data">
            <label for="new_captcha_title"><b>new_captcha_title: </b></label>
            <input type="text" name="new_captcha_title" id="new_captcha_title" required>

            <label for="new_captcha_file"><b>new_captcha_file: </b></label>
            <input type="file" id="new_captcha_file" name="new_captcha_file" accept="image/png, image/jpeg" required>

            <label for="new_captcha_solution"><b>new_captcha_solution: </b></label>
            <input type="text" name="new_captcha_solution" id="new_captcha_solution" required>

            <input type="submit" value='Upload' name='submit_new_captcha'>
        </form>
    </section>
</body>

</html>