<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    $errors = [];

    if (empty($username) || empty($password)) {
        $errors[] = "Must be filled";
    }
    if (strlen($password) < 5) {
        $errors[] = "Password must be at least 5 characters.";
    }
    if (!preg_match("/[0-9]/", $password) || !preg_match("/[a-zA-Z]/", $password)) {
        $errors[] = "Password must consist of letters and numbers.";
    }

    if (empty($errors)) {
        if ($username === "arka" && $password === "arka123") {
            $_SESSION['username'] = $username;
            $_SESSION['status'] = 'login'; 
            header("Location: Homepage.php");
            exit();
        } else {
            $errors[] = "Invalid username or password.";
        }
    }

    if (!empty($errors)) {
        $_SESSION['errors'] = $errors;
        header("Location: Login.html");
        exit();
    }
}
?>
