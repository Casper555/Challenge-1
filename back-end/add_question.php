<?php
session_start();
require_once('config.php');

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ensure 'form_id' is an integer
    $form_id = intval($_POST['form_id']);
    $question_text = $_POST['question_text'];

    // Insert question data into the database
    $sql = "INSERT INTO questions (form_id, question_text) VALUES ('$form_id', '$question_text')";

    if (mysqli_query($conn, $sql)) {
        echo "Question added successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>
