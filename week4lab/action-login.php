<?php
$user = $_POST['username'];
$pass = $_POST['pass'];

if(!isset($user) || !isset($pass) || empty($user) || empty($pass)) {
    header("location: form-login.php");
    exit;
}

if (strcmp($user, "reguser") == 0 && !empty($pass)) {
    header("location: reguser.php");
    exit;
} 

if (strcmp($user, "superuser") == 0 && !empty($pass)) {
    header("location: su.php");
    exit;
}

?>