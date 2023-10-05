<?php
session_start();
require_once('config.php');

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $form_title = $_POST['form_title'];

    // Insert form data into the database
    $user_id = $_SESSION['user_id'];
    $sql = "INSERT INTO forms (title, user_id) VALUES ('$form_title', '$user_id')";

    if (mysqli_query($conn, $sql)) {
        echo "Form created successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Create Form</title>
</head>
<body>
    <h2>Create Form</h2>
    <form method="post" action="">
        <label for="form_title">Form Title:</label>
        <input type="text" name="form_title" required><br>

        <input type="submit" value="Create Form">
    </form>
</body>
</html>
