# String Length Calculator

This repository contains a simple PHP script that calculates the length of a given string. The program demonstrates the use of functions and loops in PHP to determine the number of characters in a string.

## Features

- Calculates the length of a specified string.
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

The script defines a function `calculateStringLength` that calculates the length of a string by iterating through each character until it reaches the end of the string. It uses a loop to count the characters.

### Code Snippet

```php
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
```

### Output

For the input string `"Hello, World!"`, the output will be:

```
The length of the string 'Hello, World!' is: 13
```

## Contributing

Contributions are welcome! If you have suggestions for improvements or new features, feel free to open an issue or submit a pull request.


## Author

- **Fenil Galani** - [GitHub Profile](https://github.com/FenilGalani07)


## Acknowledgments

- Thanks to the PHP community for their continuous support and resources.
- Inspiration from various online coding tutorials.

