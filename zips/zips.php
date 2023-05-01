<?php

if (isset($_GET['term']) && !empty($_GET['term'])) {
  $term = $_GET['term'];
}

$zip = array(
  "54481" => array("value" => "54481","label" => "Stevens Point"),
  "54467" => array("value" => "54467","label" => "Plover"),
  "90210" => array("value" => "90210","label" => "Beverly Hills"),
);

$result = array();
foreach ($zip as $key => $val) {
  if (preg_match("/$term/",$key)) {
    $result[] = $val;
  }
}

print json_encode($result);

