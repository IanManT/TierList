<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'] ?? $_POST['regUsername'];
    $password = $_POST['password'] ?? $_POST['regPassword'];
    $email = $_POST['regEmail'] ?? '';

    // Here you would typically hash the password and save the user to a database
    // For example:
    // $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    // Save $username, $hashedPassword, and $email to the database

    // Redirect to login page after successful registration
    header("Location: pageLogin.php");
    exit();
}
?>
