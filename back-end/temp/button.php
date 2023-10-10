<?php
session_start();

// Initialize the button count if it doesn't exist
if (!isset($_SESSION['button_count'])) {
    $_SESSION['button_count'] = 0;
}

// Check if the button was pressed
if (isset($_POST['press_button'])) {
    // Increment the counter
    $_SESSION['button_count']++;

    // Append the message
    if (!isset($_SESSION['button_messages'])) {
        $_SESSION['button_messages'] = "";
    }
    
    $_SESSION['button_messages'] .= "Button pressed " . $_SESSION['button_count'] . "<br>"; 

}
header('location: ./new.php')
?>
