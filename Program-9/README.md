# Value Occurrence Counter

This repository contains a PHP script that counts the occurrences of each value in a given array. The program demonstrates the use of arrays and loops in PHP to efficiently tally the number of times each item appears.

## Features

- Counts how many times each value appears in a specified array.
- Outputs the results in a user-friendly format.

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

The script defines a function `countOccurrences` that takes an array as input and counts how many times each value appears. It uses a loop to iterate through the array and a conditional statement to update the count for each value.

### Code Snippet

```php
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
```

### Output

For the input array `['apple', 'banana', 'apple', 'orange', 'banana', 'apple']`, the output will be:

```
The value 'apple' appears 3 times.
The value 'banana' appears 2 times.
The value 'orange' appears 1 times.
```

## Contributing

Contributions are welcome! If you have suggestions for improvements or new features, feel free to open an issue or submit a pull request.

## Author

- **Fenil Galani** - [GitHub Profile](https://github.com/FenilGalani07)


## Acknowledgments

- Thanks to the PHP community for their continuous support and resources.
- Inspiration from various online coding tutorials.
