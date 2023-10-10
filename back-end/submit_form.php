<?php
require_once('config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $form_id = $_POST['form_id'];
    $response_data = json_encode($_POST['response_data']);

    // Insert response data into the database
    $sql = "INSERT INTO responses (form_id, response_data) VALUES ('$form_id', '$response_data')";

    if (mysqli_query($conn, $sql)) {
        echo "Response submitted successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>
