<?php
// Start the session
session_start();

// Check if the theme is set in the cookie
if (isset($_COOKIE['theme'])) {
    $theme = $_COOKIE['theme'];
} else {
    // Default theme
    $theme = 'light';
}

// Handle theme change
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $theme = $_POST['theme'];
    // Set a cookie for the theme preference
    setcookie('theme', $theme, time() + (86400 * 30), "/"); // 86400 = 1 day
    // Refresh the page to apply the new theme
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Theme Selector</title>
    <style>
        body {
            background-color: <?php echo $theme === 'dark' ? '#333' : '#fff'; ?>;
            color: <?php echo $theme === 'dark' ? '#fff' : '#000'; ?>;
            font-family: Arial, sans-serif;
            text-align: center;
            padding: 50px;
        }
        button {
            padding: 10px 20px;
            margin: 5px;
            border: none;
            cursor: pointer;
        }
        .light {
            background-color: #f0f0f0;
            color: #000;
        }
        .dark {
            background-color: #555;
            color: #fff;
        }
    </style>
</head>
<body>
    <h1>Select Your Preferred Theme</h1>
    <form method="post">
        <button type="submit" name="theme" value="light" class="light">Light Mode</button>
        <button type="submit" name="theme" value="dark" class="dark">Dark Mode</button>
    </form>
    <p>Your current theme is: <strong><?php echo ucfirst($theme); ?></strong></p>
</body>
</html>