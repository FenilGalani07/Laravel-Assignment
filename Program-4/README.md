# Prime Number Checker

This repository contains a simple PHP script that checks whether a given number is a prime number. The program demonstrates the use of functions, conditional statements, and loops in PHP.

## Features

- Checks if a specified number is prime.
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

The script defines a function `isPrime` that checks if a number is prime. It uses a loop to test divisibility from 2 up to the square root of the number. If the number is divisible by any of these, it is not prime.

### Code Snippet

```php
function isPrime($num) {
    if ($num < 2) {
        return false;
    } 
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;
}

$number = 29;
if (isPrime($number)) {
    echo "$number is a prime number.";
} else {
    echo "$number is not a prime number.";
}
```

### Output

For the number `29`, the output will be:

```
29 is a prime number.
```

## Contributing

Contributions are welcome! If you have suggestions for improvements or new features, feel free to open an issue or submit a pull request.


## Author

- **Fenil Galani** - [GitHub Profile](https://github.com/FenilGalani07)


## Acknowledgments

- Thanks to the PHP community for their continuous support and resources.
- Inspiration from various online coding tutorials.

