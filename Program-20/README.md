# Dynamic Method for Math Operations

Welcome to the **Dynamic Method for Math Operations** application! This is a simple PHP application that demonstrates the use of dynamic methods to perform basic mathematical operations. The application allows you to perform addition and calculate the square of a number using a single method.

## Features

- Perform addition of two numbers.
- Calculate the square of a single number.
- Handle invalid input gracefully with informative messages.

## Technologies Used

- PHP
- HTML

## Getting Started

To run this project locally, follow these steps:

1. **Clone the repository:**
   ```bash
   git clone https://github.com/FenilGalani07/Laravel-Assignment.git
   ```

2. **Navigate to the project directory:**
   ```bash
   cd Laravel-Assignment
   ```

3. **Set up a local server:**
   You can use a local server like XAMPP, MAMP, or any PHP server. Place the project folder in the server's root directory (e.g., `htdocs` for XAMPP).

4. **Access the application:**
   Open your web browser and go to `http://localhost/Laravel-Assignment/index.php` (or the appropriate file name if different).

## Code Overview

The main functionality is encapsulated in the `MathOperations` class:

### MathOperations Class

- **Methods:**
  - `calculate()`: A dynamic method that performs different operations based on the number of arguments passed:
    - If two arguments are provided, it returns their sum.
    - If one argument is provided, it returns the square of that number.
    - If no arguments or more than two arguments are provided, it returns an error message.

## Example Usage

The application demonstrates the following calculations:

1. **Addition of 3 and 4:**
   - Result: 7

2. **Square of 5:**
   - Result: 25

3. **Invalid calculation (no arguments):**
   - Result: "Invalid number of arguments."

4. **Invalid calculation (too many arguments):**
   - Result: "Invalid number of arguments."

The results of these calculations are displayed on the page.

## Contributing

Contributions are welcome! If you have suggestions for improvements or new features, feel free to open an issue or submit a pull request.


## Author

- **Fenil Galani** - [GitHub Profile](https://github.com/FenilGalani07)


## Acknowledgments

- Thanks to the PHP community for their resources and documentation.
- Inspiration from various online tutorials and examples.

