<?php
session_start(); 
$_SESSION['loggedIn'] = false; 
$_SESSION = array();

if(isset($_POST['username']) && isset($_POST['pass']) && !empty($_POST['username']) && !empty($_POST['pass'])) {
    $_SESSION['loggedIn'] = true;
    header('location: bookmarks.php');
} 
else {
    header("location: index.php");
    exit;
}

?>