<?php
print '<!DOCTYPE html>';
print '<html lang="en">';
print '';
print '<head>';
print '     <meta name="viewport" content="width=device-width, initial-scale=1.0">';
print '     <script src="js/pass.js" defer></script>';
print '     <link rel="shortcut icon" href="#">';
print '     <title>Password Form</title>';
print '</head>';
print '';
print '<body>';
print '     <form id="form_pass" action="#" method="POST">';
print '         <div id="form_pass_feedback">';
print '             <label for="pass1">Password:</label>';
print '              <input type="password" id="pass1" name="password">';
print '              <br>';
print '              <label for="pass2">Retype Password:</label>';
print '              <input type="password" id="pass2" name="password">';
print '              <br><br>';
print '              <input type="submit" id="submit-btn" value="Submit">';
print '              <br>';
print '         </div>';
print '     </form>';
print '</body>';
print '';
print '</html>';
print '';
?>