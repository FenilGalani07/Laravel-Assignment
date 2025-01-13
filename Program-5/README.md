# Fibonacci Number Generator

This repository contains a PHP script that generates the first `n` Fibonacci numbers. The program demonstrates the use of functions, arrays, and loops in PHP.

## Features

- Generates the first `n` Fibonacci numbers.
- Outputs the result in a user-friendly format.

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

The script defines a function `generateFibonacci` that generates the first `n` Fibonacci numbers. It handles different cases for `n` and uses a loop to calculate the Fibonacci sequence.

### Code Snippet

```php
function generateFibonacci($n) { 
    $fibonacci = [];
    if ($n <= 0) {
        return $fibonacci;
    } elseif ($n == 1) {
        return [0]; 
    } elseif ($n == 2) {
        return [0, 1]; 
    }
    $fibonacci[0] = 0;
    $fibonacci[1] = 1;

    for ($i = 2; $i < $n; $i++) {
        $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
    }
    return $fibonacci; 
}

$n = 10;
$fibNumbers = generateFibonacci($n);
echo "The first $n Fibonacci numbers are: " . implode(", ", $fibNumbers);
```

### Output

For `n = 10`, the output will be:

```
The first 10 Fibonacci numbers are: 0, 1, 1, 2, 3, 5, 8, 13, 21, 34
```

## Contributing

Contributions are welcome! If you have suggestions for improvements or new features, feel free to open an issue or submit a pull request.


## Author

- **Fenil Galani** - [GitHub Profile](https://github.com/FenilGalani07)


## Acknowledgments

- Thanks to the PHP community for their continuous support and resources.
- Inspiration from various online coding tutorials.
