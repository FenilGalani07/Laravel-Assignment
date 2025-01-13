# PHP Login System

This repository contains a simple PHP login system that allows users to log in and log out. The application demonstrates session management, form handling, and basic authentication.

## Features

- User authentication with a hardcoded username and password.
- Session management to keep users logged in.
- Logout functionality to end the session.
- User-friendly interface for login and welcome messages.

## Technologies Used

- PHP
- HTML
- CSS (optional for styling)

## Getting Started

To run this PHP login system locally, follow these steps:

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

3. **Place the PHP files in your web server's root directory:**

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

### 1. Login Form (`login.php`)

This file contains a simple HTML form for users to enter their username and password.

```html
<form action="login-action.php" method="post">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>
    <button type="submit">Login</button>
</form>
```

### 2. Login Action (`login-action.php`)

This file processes the login form submission. It checks the entered credentials against hardcoded values.

```php
$valid_username = "Fenil";
$valid_password = "123456789";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === $valid_username && $password === $valid_password) {
        $_SESSION['username'] = $username; 
        header("Location: Welcome.php"); 
        exit();
    } else {
        echo "Invalid username or password.";
    }
}
```

### 3. Welcome Page (`Welcome.php`)

This page greets the user after a successful login.

```php
<h1>Welcome, <?php echo htmlspecialchars($username); ?>!</h1> 
<a href="logout.php">Logout</a>
```

### 4. Logout Action (`logout.php`)

This file handles user logout by destroying the session.

```php
session_start(); 
session_destroy(); 
header("Location: login.php"); 
exit();
```

## Output

- Upon successful login, users will be redirected to a welcome page displaying their username.
- If the login fails, an error message will be shown.
- Users can log out, which will end their session and redirect them to the login page.

## Contributing

Contributions are welcome! If you have suggestions for improvements or new features, feel free to open an issue or submit a pull request.

## Author

- **Fenil Galani** - [GitHub Profile](https://github.com/FenilGalani07)


## Acknowledgments

- Thanks to the PHP community for their continuous support and resources.
- Inspiration from various online coding tutorials.

