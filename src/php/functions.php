<?php
$sufixRegex = "/^([a-zA-Z0-9]+([_-]?[a-zA-Z0-9])*){3,64}$/"; 
$errors = array();

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
    $username = strtolower($username);
    $email = filter_var(strtolower($email), FILTER_VALIDATE_EMAIL);
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
