<?php
// Include the configuration file to establish the database connection
include('config.php');

// Function to fetch questions from the database
function getQuestions($connection) {
    // SQL query to fetch all data from tb_question
    $sql = "SELECT * FROM tb_question";

    // Execute the query
    $result = mysqli_query($connection, $sql);

    $questions = array(); // Initialize an array to store questions

    if ($result) {
        // Loop through the result set
        while ($row = mysqli_fetch_assoc($result)) {
            // Access the 'question' column from the current row
            $question = $row['question'];

            // Add the question to the array
            $questions[] = $question;
        }

        // Free the result set
        mysqli_free_result($result);
    } else {
        // Handle any errors that occurred during the query
        echo "Error: " . mysqli_error($connection);
    }

    return $questions;
}

// Call the function to get questions
$questions = getQuestions($connection);

// Close the database connection
mysqli_close($connection);

// Encode the questions array as JSON and send it as a response
header('Content-Type: application/json');
echo json_encode($questions);
?>
