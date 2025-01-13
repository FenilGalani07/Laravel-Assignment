# Employee Hierarchy Application

Welcome to the **Employee Hierarchy Application**! This is a simple PHP application that demonstrates the concept of inheritance in object-oriented programming by modeling an employee hierarchy. The application allows you to create employee objects and manager objects, displaying their details in a structured format.

## Features

- Create employee objects with name and salary.
- Create manager objects that inherit from employee objects and include department information.
- Display details of both employees and managers in a user-friendly format.

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

The main functionality is encapsulated in the `Employee` and `Manager` classes:

### Employee Class

- **Properties:**
  - `name`: Stores the name of the employee.
  - `salary`: Stores the salary of the employee.

- **Methods:**
  - `__construct($name, $salary)`: Initializes the employee with a name and salary.
  - `getDetails()`: Returns a formatted string containing the employee's name and salary.

### Manager Class

- **Inherits from:** `Employee`
- **Additional Properties:**
  - `department`: Stores the department of the manager.

- **Methods:**
  - `__construct($name, $salary, $department)`: Initializes the manager with a name, salary, and department.
  - `getManagerDetails()`: Returns a formatted string containing the manager's details, including their department.

## Example Usage

The application creates a manager object:

- **Manager:** John Doe
- **Salary:** $75,000
- **Department:** IT Department

The details of the manager are displayed on the page.

## Contributing

Contributions are welcome! If you have suggestions for improvements or new features, feel free to open an issue or submit a pull request.


## Author

- **Fenil Galani** - [GitHub Profile](https://github.com/FenilGalani07)


## Acknowledgments

- Thanks to the PHP community for their resources and documentation.
- Inspiration from various online tutorials and examples.

