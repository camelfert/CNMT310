<?php
session_start(); 
$_SESSION['loggedIn'] = false; 
$_SESSION = array();

print '<!DOCTYPE html>';
print '<html lang="en">';
print '<head>';
print '     <meta name="viewport" content="width=device-width, initial-scale=1.0">';
print '     <link rel="shortcut icon" href="#">';
print '     <title>Login Form</title>';
print '</head>';
print '<body>';
print '     <form id="form_login" action="action-login.php" method="POST">';
print '         <div id="form_login_feedback">';
print '             <label for="username">Username:</label>';
print '              <input type="text" id="username" name="username">';
print '              <br>';
print '              <label for="pass">Password:</label>';
print '              <input type="password" id="pass" name="pass">';
print '              <br><br>';
print '              <input type="submit" id="submit-btn" value="Login">';
print '              <br>';
print '         </div>';
print '     </form>';
print '</body>';
print '</html>';
?>