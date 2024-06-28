<?php
session_start();

// Replace these with your actual credentials
$correct_username = "user";
$correct_password = "pass";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === $correct_username && $password === $correct_password) {
        $_SESSION['loggedin'] = true;
        header('Location: studyguides.php');
        exit;
    } else {
        echo "Invalid credentials";
    }
}
?>
