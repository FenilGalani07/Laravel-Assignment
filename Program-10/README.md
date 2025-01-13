# Student Scores Calculator

This repository contains a PHP script that calculates and displays the average scores of students based on their individual scores. The program demonstrates the use of arrays, functions, and basic HTML for output formatting.

## Features

- Stores student names and their corresponding scores.
- Calculates the average score for each student.
- Displays the results in a user-friendly format.

## Technologies Used

- PHP
- HTML

## Getting Started

To run this PHP script locally, follow these steps:

### Prerequisites

- A web server with PHP support (e.g., XAMPP, WAMP, MAMP, or a live server).
- A web browser.

### Installation

1. **Clone the repository:**

   ```bash
   git clone https://github.com/FenilGalani07/Laravel-Assignment.git
   ```

2. **Navigate to the project directory:**

   ```bash
   cd Laravel-Assignment
   ```

3. **Place the PHP file in your web server's root directory:**

   - For XAMPP, this is usually `C:\xampp\htdocs\`.
   - For WAMP, it is usually `C:\wamp\www\`.
   - For MAMP, it is usually `/Applications/MAMP/htdocs/`.

4. **Access the application:**

   Open your web browser and go to:

   ```
   http://localhost/path_to_your_file.php
   ```

   Replace `path_to_your_file.php` with the actual path to the PHP file you created.

## Code Explanation

The script defines a function `calculateAverage` that takes an array of scores as input, calculates the total score using `array_sum`, and then divides it by the count of scores to find the average. It then iterates through the list of students, calculates their average scores, and displays the results.

### Code Snippet

```php
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
```

### Output

For the input data, the output will display each student's name, their scores, and their average score formatted as follows:

```
Student: Alice
Scores: 85, 92, 78
Average Score: 85.00

Student: Bob
Scores: 88, 76, 95
Average Score: 86.33

Student: Charlie
Scores: 90, 89, 94
Average Score: 91.00
```

## Contributing

Contributions are welcome! If you have suggestions for improvements or new features, feel free to open an issue or submit a pull request.


## Author

- **Fenil Galani** - [GitHub Profile](https://github.com/FenilGalani07)


## Acknowledgments

- Thanks to the PHP community for their continuous support and resources.
- Inspiration from various online coding tutorials.
