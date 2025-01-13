# PHP Session Management

This repository contains a PHP script that manages user sessions, including login checks and session timeout functionality. The application demonstrates how to handle user sessions securely and effectively.

## Features

- User authentication check to ensure the user is logged in.
- Session timeout functionality that logs out users after a specified period of inactivity.
- Displays a welcome message to the logged-in user.

## Technologies Used

- PHP
- HTML

## Getting Started

To run this PHP session management script locally, follow these steps:

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

The script starts a session and checks if the user is logged in by verifying the existence of a session variable. If the user is not logged in, they are redirected to the login page.

### Session Timeout

The script implements a timeout feature that logs out users after 300 seconds (5 minutes) of inactivity. If the user has been inactive for longer than this duration, the session is destroyed, and a message is displayed.

### Code Snippet

```php
session_start(); 


if (!isset($_SESSION['username'])) {
    header("Location: login.php"); 
    exit();
}

$username = $_SESSION['username']; 

$timeoutDuration = 300; 
if (isset($_SESSION['LAST_ACTIVITY'])) {
    $timeSinceLastActivity = time() - $_SESSION['LAST_ACTIVITY'];

    if ($timeSinceLastActivity > $timeoutDuration) {
        session_unset(); 
        session_destroy(); 
        echo "Session expired due to inactivity. Please log in again.";
        exit(); 
    }
}

$_SESSION['LAST_ACTIVITY'] = time();

echo "Session is active. Welcome!";
```

### Output

- If the user is logged in and the session is active, they will see a welcome message.
- If the session has expired due to inactivity, a message will prompt them to log in again.

## Contributing

Contributions are welcome! If you have suggestions for improvements or new features, feel free to open an issue or submit a pull request.


## Author

- **Fenil Galani** - [GitHub Profile](https://github.com/FenilGalani07)


## Acknowledgments

- Thanks to the PHP community for their continuous support and resources.
- Inspiration from various online coding tutorials.
