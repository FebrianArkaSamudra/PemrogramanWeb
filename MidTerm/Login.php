<?php
session_start();
if (isset($_SESSION['username'])) {
    header('Location: Homepage.php');
    exit;
}

$errorMessages = [];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = htmlspecialchars(trim($_POST['username']));
    $password = htmlspecialchars(trim($_POST['password']));

    if (empty($username) || empty($password)) {
        $errorMessages[] = "Both fields must be filled.";
    }

    if (strlen($password) < 5) {
        $errorMessages[] = "Password must be at least 5 characters.";
    }

    if (!preg_match('/(?=.*[a-zA-Z])(?=.*\d)/', $password)) {
        $errorMessages[] = "Password must consist of letters and numbers.";
    }

    if (empty($errorMessages)) {
        if ($username === "arka" && $password === "arka123") {
            $_SESSION['username'] = $username;
            header('Location: Homepage.php');
            exit;
        } else {
            $errorMessages[] = "Invalid username or password.";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Login.css">
    <title>Login Page</title>
</head>
<body>
    <div class="login-container">
        <h1>Login</h1>
        <?php if (!empty($errorMessages)) : ?>
            <div id="error-message" style="color: red;">
                <?php foreach ($errorMessages as $message) : ?>
                    <p><?= $message ?></p>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
        <form method="POST">
            <div>
                <input type="text" id="username" name="username" placeholder="Username" required>
            </div>
            <div>
                <input type="password" id="password" name="password" placeholder="Password" required>
            </div>
            <input type="submit" value="Login">
        </form>
    </div>
</body>
</html>
