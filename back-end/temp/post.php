<?php 
require "vragen.php";

$combinedArray = array();

foreach ($vraag as $question => $key) {
    $combinedArray[$question] = $_POST[$key];
}


foreach($combinedArray as $x => $val) {
    echo "$x: $val <br>";
    }


?>