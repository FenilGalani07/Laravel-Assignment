# Payment System Application

Welcome to the **Payment System Application**! This is a simple PHP application that demonstrates the use of abstract classes and inheritance in object-oriented programming to handle different payment methods. The application allows you to make payments using either a credit card or PayPal.

## Features

- Abstract class to define a common interface for payment methods.
- Concrete classes for different payment methods (Credit Card and PayPal).
- Demonstrates polymorphism by allowing different payment methods to be used interchangeably.

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

The main functionality is encapsulated in the `Payment`, `CreditCardPayment`, and `PayPalPayment` classes:

### Payment Class

- **Type:** Abstract Class
- **Methods:**
  - `makePayment($amount)`: An abstract method that must be implemented by any subclass to handle payment processing.

### CreditCardPayment Class

- **Inherits from:** `Payment`
- **Methods:**
  - `makePayment($amount)`: Implements the payment processing for credit card payments.

### PayPalPayment Class

- **Inherits from:** `Payment`
- **Methods:**
  - `makePayment($amount)`: Implements the payment processing for PayPal payments.

## Example Usage

The application demonstrates the following payment methods:

1. **Credit Card Payment:**
   - Payment of $100 made using Credit Card.

2. **PayPal Payment:**
   - Payment of $50 made using PayPal.

The results of these payments are displayed on the page.

## Contributing

Contributions are welcome! If you have suggestions for improvements or new features, feel free to open an issue or submit a pull request.


## Author

- **Fenil Galani** - [GitHub Profile](https://github.com/FenilGalani07)


## Acknowledgments

- Thanks to the PHP community for their resources and documentation.
- Inspiration from various online tutorials and examples.

