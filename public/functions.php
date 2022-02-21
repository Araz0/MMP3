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
