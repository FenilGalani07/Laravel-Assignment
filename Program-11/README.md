# Common Elements Finder

This repository contains a PHP script that identifies and displays the common elements between two arrays. The program demonstrates the use of arrays and functions in PHP to efficiently find shared values.

## Features

- Finds common elements between two specified arrays.
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

The script defines a function `findCommon` that takes two arrays as input and checks for common elements. It uses a loop to iterate through the first array and the `in_array` function to check if each element exists in the second array. The results are stored in an array, which is then filtered for unique values.

### Code Snippet

```php
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
```

### Output

For the input arrays `[1, 2, 3, 4, 5]` and `[4, 5, 6, 7, 8]`, the output will be:

```
Common elements: 4, 5
```

## Contributing

Contributions are welcome! If you have suggestions for improvements or new features, feel free to open an issue or submit a pull request.


## Author

- **Fenil Galani** - [GitHub Profile](https://github.com/FenilGalani07)


## Acknowledgments

- Thanks to the PHP community for their continuous support and resources.
- Inspiration from various online coding tutorials.

