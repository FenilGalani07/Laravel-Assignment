<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
function countOccurrences($array) {
   
    $counts = [];


    foreach ($array as $value) {
       
        if (isset($counts[$value])) {
            $counts[$value]++;
        } else {
           
            $counts[$value] = 1;
        }
    }
    return $counts;
}
$inputArray = ['apple', 'banana', 'apple', 'orange', 'banana', 'apple'];
$occurrences = countOccurrences($inputArray);
foreach ($occurrences as $value => $count) {
    echo "The value '$value' appears $count times.\n";
}
?>
</body>
</html>
