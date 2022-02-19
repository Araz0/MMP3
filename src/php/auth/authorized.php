<?php
session_start();
$pagetitle = "Multimedia Technology | OAuth Login | Authorized";
require '../config.php'; //This is the oauth-config! You will also need your standard-config file
require '../functions.php';
//The login logic in the client
require_once "oauthclient.php";
//the oauthclient should handle the login and set the variable resourceOwner

if(isset($resourceOwner))
{
  $resourceOwner = $resourceOwner->toArray();
  //Normally you have a database included so you need to check if this user is already in your database
  // if yes then get the user from your database

  // Set parameters for $_SESSION
  $_SESSION['fhsUser'] = $resourceOwner['preferred_username'];

  $username = $resourceOwner['preferred_username'];
  $email = $resourceOwner['email'];
  $first_name = $resourceOwner['given_name'];
  $last_name = $resourceOwner['family_name'];
  $studies = $resourceOwner['studies'];
  $role = $resourceOwner['status'];
  //echo getUser("fhs41238");
  if (getUser($username) == null) {
    createUser($username, $email, $first_name, $last_name, $studies, $role);
  }
  /*
  sub: xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx
  created_at: 1602662245
  token_id: xxxx
  email: flastname.mmt-b2020@fh-salzburg.ac.at
  given_name: first_name
  family_name: last_name
  preferred_username: fhsxxxxx
  status: STUD
  studies: MMT-B 2020
  both_responses: both
  user_info_response: user_info 
  */

  /*
  TODO: 
  check db for user, 
  if excists; 
    set session id param to user id
  else
    add user to db and set session id param to user id
  */

  // HTTPonly
  setcookie("fhsUser", $_SESSION['fhsUser'], time()+2*24*60*60, NULL, NULL, NULL, TRUE);

  //Login worked, lead the user to a page you want
  header("Location: /");
 
}
else{
  //include header
  ?><p>Sorry, there was a problem! Please contact your admin!</p><?php 
  //include footer.php
}
?>
