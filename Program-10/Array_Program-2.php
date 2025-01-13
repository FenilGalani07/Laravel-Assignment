<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Scores</title>
</head>
<body>


<?php


$students = [
    [
        'name' => 'Alice',
        'scores' => [85, 92, 78]
    ],
    [
        'name' => 'Bob',
        'scores' => [88, 76, 95]
    ],
    [
        'name' => 'Charlie',
        'scores' => [90, 89, 94]
    ]
];


function calculateAverage($scores) {
    $total = array_sum($scores); 
    $count = count($scores); 
    return $total / $count; 
}
foreach ($students as $student) {
    $name = $student['name'];
    $scores = $student['scores'];
    $average = calculateAverage($scores);


    echo "<p><strong>Student:</strong> $name</p>";
    echo "<p><strong>Scores:</strong> " . implode(", ", $scores) . "</p>";
    echo "<p><strong>Average Score:</strong> " . number_format($average, 2) . "</p>";
    echo "<hr>"; 
}
?>


</body>
</html>
