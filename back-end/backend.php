<?php

// connection al gemaakt in db_connector.php
// include "db_connector.php"
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "db_database";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT  FROM ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    // echo geen backend maar front end
    echo "id: " . $row["id"]. " - : " . $row[""]. " " . $row[""]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>