<?php

if(isset($_POST['username']) && isset($_POST['pass']) && !empty($_POST['username']) && !empty($_POST['pass'])) {
    $user = $_POST['username'];
    $pass = $_POST['pass'];
} 
else {
    header("location: form-login.php");
    exit;
}

if ($user == 'reguser') {
    header("location: reguser.php");
    exit;
} 

if ($user == 'superuser') {
    header("location: su.php");
    exit;
}

?>