# PHP Occurrence Counter

This repository contains a simple PHP script that counts the occurrences of the word "PHP" in a given string. The program demonstrates the use of string manipulation functions in PHP.

## Features

- Counts how many times the word "PHP" appears in a specified string.
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

The script defines a function `countPHPOccurrences` that takes a string as input and uses the `substr_count` function to count how many times the substring "PHP" appears in it.

### Code Snippet

```php
function countPHPOccurrences($string) {
    $count = substr_count($string, "PHP");
    return $count;
}

$inputString = "PHP is a server-side scripting language. PHP is widely used.";
$phpCount = countPHPOccurrences($inputString);
echo "The word 'PHP' appears $phpCount times in the string.";
```

### Output

For the input string `"PHP is a server-side scripting language. PHP is widely used."`, the output will be:

```
The word 'PHP' appears 2 times in the string.
```

## Contributing

Contributions are welcome! If you have suggestions for improvements or new features, feel free to open an issue or submit a pull request.


## Author

- **Fenil Galani** - [GitHub Profile](https://github.com/FenilGalani07)


## Acknowledgments

- Thanks to the PHP community for their continuous support and resources.
- Inspiration from various online coding tutorials.

