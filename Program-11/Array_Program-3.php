<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Scores</title>
</head>
<body>
<?php
function findCommon($array1, $array2) {


    $commonElements = [];


   
    foreach ($array1 as $value) {
       
        if (in_array($value, $array2)) {
           
            $commonElements[] = $value;
        }
    }


    return array_unique($commonElements);
}

$array1 = [1, 2, 3, 4, 5];
$array2 = [4, 5, 6, 7, 8];
$common = findCommon($array1, $array2);
echo "Common elements: " . implode(", ", $common);
?>


</body>
</html>
