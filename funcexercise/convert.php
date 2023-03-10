<?php

$required = array('temp', 'convertto');
foreach($required as $element) {
  if (!isset($_POST[$element]) || ($_POST[$element] == "")) {
      die(header("Location: index.php"));
  }
}

if(!is_numeric($_POST['temp']) || ($_POST['temp'] < -100) || ($_POST['temp'] > 500)) {
    die(header("Location: index.php"));
}

if(($_POST['convertto'] != "C") && ($_POST['convertto'] != "F")) {
    die(header("Location: index.php"));
}

function tempConvert($temp, $convertto) {

    if($convertto == "C") {
        $result = ($temp - 32) * (5/9);
    }
    else if($convertto == "F") {
        $result = ($temp * 9/5) + 32;
    }

    return $result;
}

$convertedtemp = tempConvert($_POST['temp'], $_POST['convertto']);

print '<!DOCTYPE html>';
print '<html lang="en">';
print '<head>';
print '     <title>Temperature Conversion Result Page</title>';
print '</head>';
print '<body>';
print '     <p>The converted temperature is: ' . $convertedtemp . '<p><br>';
print '</body>';
print '</html>';

?>