<?php
session_start();
require_once "mysqli.php";

function checkInput() {
    foreach($_POST as $key => $value) {
        $_POST[$key] = htmlentities(strip_tags($value));
    }
}

if (isset($_POST['login'])) {
    checkInput();
    $Username = $_POST['Username'];
    $Pass = $_POST['Pass'];
    $select = mysqli_query($conn, "SELECT * FROM tb_gebruiker WHERE Username = '$Username' AND Pass = '$Pass'");
    $row = mysqli_fetch_array($select);
    if (is_array($row)) {
        $_SESSION["Username"] = $row['Username'];
        $_SESSION["Pass"] = $row['Pass'];
        $_SESSION["online"] = true;
        $_SESSION["admin"] = $row["adminPerm"];
        header("Location: ./new/index.php");
    } else {
        $errorMessage = "Invalid Username or Password!";
    }
}
?>