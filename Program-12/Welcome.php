<?php
session_start(); 


if (!isset($_SESSION['username'])) {
    header("Location: login.php"); 
    exit();
}

$username = $_SESSION['username']; 

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
</head>
<body>
    <h1>Welcome, <?php echo htmlspecialchars($username); ?>!</h1> 
    <a href="logout.php">Logout</a> 
</html>