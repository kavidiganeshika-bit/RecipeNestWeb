<?php
include("includes/db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $sql = "INSERT INTO messages (name, email, message)
            VALUES ('$name', '$email', '$message')";

    if ($conn->query($sql)) {
        echo "Message sent successfully!";
    }
}
?>

<form method="POST">
    <input type="text" name="name" placeholder="Name"><br>
    <input type="email" name="email" placeholder="Email"><br>
    <textarea name="message"></textarea><br>
    <button type="submit">Send</button>
</form>