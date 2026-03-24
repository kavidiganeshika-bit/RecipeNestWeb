<?php
$conn = new mysqli("localhost", "root", "", "recipe_db");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>