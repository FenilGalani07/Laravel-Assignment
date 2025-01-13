<?php
session_start(); // Start the session

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    header("Location: login.php"); // Redirect to login if not logged in
    exit();
}

$username = $_SESSION['username']; // Retrieve username from session


$timeoutDuration = 300; 
if (isset($_SESSION['LAST_ACTIVITY'])) {
    
    $timeSinceLastActivity = time() - $_SESSION['LAST_ACTIVITY'];

  
    if ($timeSinceLastActivity > $timeoutDuration) {
        
        session_unset(); 
        session_destroy(); 
        echo "Session expired due to inactivity. Please log in again.";
        exit(); 
    }
}

$_SESSION['LAST_ACTIVITY'] = time();

echo "Session is active. Welcome!";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
</head>
<body>
    <h1>Welcome, <?php echo htmlspecialchars($username); ?>!</h1> <!-- Display welcome message -->
    <a href="logout.php">Logout</a> <!-- Logout link -->
</body>
</html>