<?php
print '<!DOCTYPE html>';
print '<html lang="en">';
print '<head>';
print '  <title>Temperature Form</title>';
print '</head>';
print '<body>';
print '  <h1>Temperature Conversion Form</h1>';
print '';
print '  <form method="POST" action="convert.php">';
print '      <label for="temp">Temperature:</label><br>';
print '      <input type="number" id="temp" name="temp"><br>';
print '      <p>Convert to:</p>';
print '      <input type="radio" name="convertto" value="F">Fahrenheit<br>';
print '      <input type="radio" id="celcius" name="convertto" value="C">Celcius';
print '      <br><br>';
print '      <input type="submit" id="submit" name="submit" value="Convert">';
print '  </form>';
print '';
print '</body>';
print '</html>';
?>