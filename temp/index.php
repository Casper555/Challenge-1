<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vragenlijst</title>
</head>
<body>
<?php
include "navbar.php";

?>
<form action="./post.php" method="post">
<?php
require "vragen.php";
foreach($vraag as $x => $val) {
  echo "<label for='$val'>Vraag $val: $x</label><br>";
  echo "<input type='text' id='$val' name='$val'><br>";
}
?>
  <input type="submit" />
</form>

</body>
</html>