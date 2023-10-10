<?php
// Include the configuration file to establish the database connection
include('config.php');

// Function to insert answers into the database
function insertAnswers($connection, $formId, $questionIds, $answers) {
    foreach ($questionIds as $key => $questionId) {
        $answer = $answers[$key];

        // Insert the answer into the database
        $sql = "INSERT INTO tb_responses (form_id, question_id, answer) VALUES (?, ?, ?)";
        $stmt = mysqli_prepare($connection, $sql);
        mysqli_stmt_bind_param($stmt, "iis", $formId, $questionId, $answer);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
    }
}

// Assuming you have a database connection established
$connection = mysqli_connect("hostname", "username", "password", "database_name");

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if this is a POST request with form data
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $formData = json_decode(file_get_contents("php://input"), true);

    // Validate and sanitize the data as needed
    $formId = $formData["form_id"];
    $questionIds = $formData["question_id"];
    $answers = $formData["answers"];

    // Insert answers into the database
    insertAnswers($connection, $formId, $questionIds, $answers);

    // Send a response (you can customize this message)
    $response = array("message" => "Answers submitted successfully!");
    header("Content-Type: application/json");
    echo json_encode($response);
} else {
    // Handle non-POST requests as needed
}

// Close the database connection
mysqli_close($connection);
?>
