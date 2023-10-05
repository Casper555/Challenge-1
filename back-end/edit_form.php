<?php
session_start();
require_once('config.php');

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $form_id = $_POST['form_id'];
    $form_title = $_POST['form_title'];

    // Update form title in the database
    $sql = "UPDATE forms SET title='$form_title' WHERE id='$form_id'";

    if (mysqli_query($conn, $sql)) {
        echo "Form updated successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

// Retrieve the form data for editing
$form_id = $_GET['form_id'];
$sql = "SELECT id, title FROM forms WHERE id='$form_id' LIMIT 1";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$form_title = $row['title'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Form</title>
</head>
<body>
    <h2>Edit Form</h2>
    <form method="post" action="">
        <label for="form_title">Form Title:</label>
        <input type="text" name="form_title" value="<?php echo $form_title; ?>" required><br>
        <input type="hidden" name="form_id" value="<?php echo $form_id; ?>">
        <input type="submit" value="Save Changes">
    </form>
</body>
</html>
