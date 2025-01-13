<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
session_start(); 


$valid_username = "Fenil";
$valid_password = "123456789";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check credentials
    if ($username === $valid_username && $password === $valid_password) {
        $_SESSION['username'] = $username; 
        header("Location: Welcome.php"); 
        exit();
    } else {
        echo "Invalid username or password.";
    }
}
?>

</body>
</html>