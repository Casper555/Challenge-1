<!DOCTYPE html>
<html>
<head>
    <title>Button Press Counter</title>
</head>
<body>
    <form method="post" action="button.php">
        <input type="submit" name="press_button" value="Add question">
    </form>
    <form method="post" action="destroy.php">
        <input type="submit" name="press_button" value="Clear form">
    </form>
    
    <div id="messages">
        <?php
        session_start();
        if (isset($_SESSION['button_messages'])) {
            echo $_SESSION['button_messages'];
        }
        ?>
    </div>
</body>
</html>
