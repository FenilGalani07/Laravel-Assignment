# Shape Area Calculation Application

Welcome to the **Shape Area Calculation Application**! This is a simple PHP application that demonstrates the use of abstract classes and inheritance in object-oriented programming. The application allows you to calculate the area of different shapes, specifically rectangles and circles.

## Features

- Calculate the area of a rectangle given its length and width.
- Calculate the area of a circle given its radius.
- Demonstrates the use of abstract classes and method overriding in PHP.

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

The main functionality is encapsulated in the `Shape`, `Rectangle`, and `Circle` classes:

### Shape Class

- **Type:** Abstract Class
- **Methods:**
  - `calculateArea()`: An abstract method that must be implemented by any subclass.

### Rectangle Class

- **Inherits from:** `Shape`
- **Properties:**
  - `length`: Stores the length of the rectangle.
  - `width`: Stores the width of the rectangle.

- **Methods:**
  - `__construct($length, $width)`: Initializes the rectangle with a length and width.
  - `calculateArea()`: Returns the area of the rectangle.

### Circle Class

- **Inherits from:** `Shape`
- **Properties:**
  - `radius`: Stores the radius of the circle.

- **Methods:**
  - `__construct($radius)`: Initializes the circle with a radius.
  - `calculateArea()`: Returns the area of the circle.

## Example Usage

The application creates instances of both shapes:

1. **Rectangle** with a length of 10 units and a width of 5 units.
   - **Area:** 50 square units.

2. **Circle** with a radius of 7 units.
   - **Area:** Approximately 153.94 square units.

The areas of both shapes are displayed on the page.

## Contributing

Contributions are welcome! If you have suggestions for improvements or new features, feel free to open an issue or submit a pull request.


## Author

- **Fenil Galani** - [GitHub Profile](https://github.com/FenilGalani07)


## Acknowledgments

- Thanks to the PHP community for their resources and documentation.
- Inspiration from various online tutorials and examples.
