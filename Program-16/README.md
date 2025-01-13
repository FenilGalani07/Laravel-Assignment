# Bank Account Operations

Welcome to the **Bank Account Operations** project! This is a simple PHP application that simulates basic banking operations such as depositing and withdrawing money from a bank account. The application demonstrates object-oriented programming principles in PHP.

## Features

- Create a bank account with an account number and an initial balance.
- Deposit money into the account.
- Withdraw money from the account.
- Display the current balance after each operation.

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

The main functionality is encapsulated in the `BankAccount` class, which includes:

- **Properties:**
  - `accountNumber`: Stores the account number.
  - `balance`: Stores the current balance of the account.

- **Methods:**
  - `__construct($accountNumber, $initialBalance)`: Initializes the account with a number and an optional initial balance.
  - `getAccountNumber()`: Returns the account number.
  - `getBalance()`: Returns the current balance.
  - `deposit($amount)`: Adds the specified amount to the balance.
  - `withdraw($amount)`: Deducts the specified amount from the balance if sufficient funds are available.

## Example Usage

The following operations are performed in the application:

1. Create a new bank account with an initial balance of $500.
2. Deposit $200 into the account.
3. Withdraw $100 from the account.
4. Attempt to withdraw $700, which should fail due to insufficient funds.

## Contributing

Contributions are welcome! If you have suggestions for improvements or new features, feel free to open an issue or submit a pull request.


## Author

- **Fenil Galani** - [GitHub Profile](https://github.com/FenilGalani07)


## Acknowledgments

- Thanks to the PHP community for their resources and documentation.
- Inspiration from various online tutorials and examples.

