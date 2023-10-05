<?php
session_start();
require_once('config.php');

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $form_id = $_POST['form_id'];
    $response_data = json_encode($_POST['response_data']);

    // Insert response data into the database
    $user_id = $_SESSION['user_id'];
    $sql = "INSERT INTO responses (form_id, user_id, response_data) VALUES ('$form_id', '$user_id', '$response_data')";

    if (mysqli_query($conn, $sql)) {
        echo "Response submitted successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Submit Form</title>
</head>
<body>
    <h2>Submit Form</h2>
    <form method="post" action="">
        <!-- This form should include the form questions and input fields -->
        <!-- Example: <label for="question1">Question 1:</label>
                     <input type="text" name="response_data[question1]" required><br> -->
        <input type="hidden" name="form_id" value="<?php echo $_GET['form_id']; ?>">

        <input type="submit" value="Submit">
    </form>
</body>
</html>
