# Book Details Application

Welcome to the **Book Details Application**! This is a simple PHP application that demonstrates how to create and display details of books using object-oriented programming principles. The application allows you to create book objects and retrieve their details, including the title, author, and price.

## Features

- Create book objects with title, author, and price.
- Display book details in a user-friendly format.
- Demonstrates the use of classes and methods in PHP.

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

The main functionality is encapsulated in the `Book` class, which includes:

- **Properties:**
  - `title`: Stores the title of the book.
  - `author`: Stores the author of the book.
  - `price`: Stores the price of the book.

- **Methods:**
  - `__construct($title, $author, $price)`: Initializes the book with a title, author, and price.
  - `getDetails()`: Returns an array containing the book's title, author, and formatted price.

## Example Usage

The application creates two book objects:

1. **The Great Gatsby** by F. Scott Fitzgerald priced at $10.99.
2. **1984** by George Orwell priced at $8.99.

The details of each book are displayed on the page.

## Contributing

Contributions are welcome! If you have suggestions for improvements or new features, feel free to open an issue or submit a pull request.


## Author

- **Fenil Galani** - [GitHub Profile](https://github.com/FenilGalani07)


## Acknowledgments

- Thanks to the PHP community for their resources and documentation.
- Inspiration from various online tutorials and examples.

