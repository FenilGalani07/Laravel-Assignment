<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
function calculateStringLength($string) {
    $length = 0;
    for ($i = 0; isset($string[$i]); $i++) {
        $length++; 
    }
    return $length; 
}
$inputString = "Hello, World!";
$length = calculateStringLength($inputString);
echo "The length of the string '$inputString' is: $length";
?>
</body>
</html>
