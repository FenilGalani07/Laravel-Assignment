<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $start = 51; 
        $end = 99;
        $sum = 0;   


        while ($start <= $end) {
            $sum += $start; 
            $start += 2;    
        }
        echo "The sum of odd numbers between 50 and 100 is: $sum";
    ?>
</body>
</html>
