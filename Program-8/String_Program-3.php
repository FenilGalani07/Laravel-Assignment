<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
function countPHPOccurrences($string) {
   
    $count = substr_count($string, "PHP");
    return $count;
}




$inputString = "PHP is a server-side scripting language. PHP is widely used.";
$phpCount = countPHPOccurrences($inputString);
echo "The word 'PHP' appears $phpCount times in the string.";
?>


</body>
</html>
