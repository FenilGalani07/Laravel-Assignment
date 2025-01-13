```markdown
# Sum of Odd Numbers

This repository contains a simple PHP script that calculates the sum of odd numbers between 50 and 100. The program demonstrates basic PHP syntax, control structures, and arithmetic operations.

## Features

- Calculates the sum of all odd numbers between 51 and 99.
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

The script initializes a starting point of 51 and an ending point of 99. It uses a `while` loop to iterate through the numbers, adding only the odd numbers to a cumulative sum. Finally, it outputs the total sum.

### Code Snippet

```php
$start = 51; 
$end = 99;
$sum = 0;   

while ($start <= $end) {
    $sum += $start; 
    $start += 2;    
}
echo "The sum of odd numbers between 50 and 100 is: $sum";
```

## Contributing

Contributions are welcome! If you have suggestions for improvements or new features, feel free to open an issue or submit a pull request.


## Author

- **Fenil Galani** - [GitHub Profile](https://github.com/FenilGalani07)


## Acknowledgments

- Thanks to the PHP community for their continuous support and resources.
- Inspiration from various online coding tutorials.


