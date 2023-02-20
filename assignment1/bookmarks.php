<?php
session_start(); 
if (!isset($_SESSION['loggedIn']) || $_SESSION['loggedIn'] == false) { 
    die(header("Location: index.php")); 
}

print '<!DOCTYPE html>';
print '<html lang="en">';
print '<head>';
print '     <meta name="viewport" content="width=device-width, initial-scale=1.0">';
print '     <link rel="shortcut icon" href="#">';
print '     <link rel="stylesheet" href="css/style.css">';
print '     <title>Bookmarks</title>';
print '</head>';
print '<body>';
print '<header>';
print '		<h1>Congratulations, you made it to the bookmarks page!</h1>';
print '</header>';
print '<nav>';
print '     <a href="index.php">Home</a>';
print '     <a href="form-login.php">Login</a>';
print '     <a href="https://reddit.com/">Reddit</a>';
print '     <a href="https://youtube.com/">YouTube</a>';
print '     <a href="https://instagram.com/">Instagram</a>';
print '     <a href="https://twitter.com/">Twitter</a>';
print '     <a href="http://canvas.uwsp.edu/">Canvas</a>';
print '     <a href="https://outlook.office.com/mail/inbox">Outlook</a>';
print '</nav>';
print '<footer>';
print '<h5>"© Copyright UWSP 2023"</h5>';
print '</body>';
print '</html>';
?>