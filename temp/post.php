<?php 
require "vragen.php";

$vraag = array("hoe laat is het?" => "1", "hoe heet je" => "2", "Welk cohort zit je" => "3");


$combinedArray = array();

foreach ($vraag as $question => $key) {
    $combinedArray[$question] = $_POST[$key];
}


foreach($combinedArray as $x => $val) {
    echo "$x: $val <br>";
    }


?>