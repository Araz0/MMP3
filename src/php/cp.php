
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
    $all_users = [];
    if (isset($_POST['set_configs'])) {
        
    }
    if (isset($_POST['update_user'])) {
        updateUserRole($_POST['user_id'], $_POST['user_role']);
    }
    if (isset($_POST['submit_user_search'])){
        $all_users = getSearchedUsers($_POST['user_search']);
    }else {
        $all_users = getAllUsers();
    }
    
?>

<body>
    <form action="" method="post" enctype="multipart/form-data">
        <label for="first_title"><b>First Release Title</b></label>
        <input type="text" name="first_title" value="" id="first_title" required>

        <label for="first_date_time">date and time:</label>
        <input type="datetime-local" id="first_date_time" name="first_date_time"> 

        <label for="second_title"><b>Second Release Title</b></label>
        <input type="text" name="first_title" value="" id="first_title" required>

        <label for="second_date_time">date and time:</label>
        <input type="datetime-local" id="second_date_time" name="second_date_time">

        <input type="submit" value='Update' name='set_configs'>
    </form>

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
    
</body>

</html>