# PHP Theme Selector

This repository contains a simple PHP application that allows users to select and store their preferred theme (light or dark mode) using cookies. The application demonstrates how to manage user preferences and apply them on subsequent visits.

## Features

- Users can select between light and dark themes.
- The selected theme is stored in a cookie for 30 days.
- The application retrieves and applies the user's preferred theme upon revisiting.

## Technologies Used

- PHP
- HTML
- CSS

## Getting Started

To run this PHP theme selector locally, follow these steps:

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
   http://localhost/theme_selector.php
   ```

   Replace `theme_selector.php` with the actual name of the PHP file you created.

## Code Explanation

The script starts a session and checks if a cookie named `theme` exists. If it does, it retrieves the value; otherwise, it defaults to `light`. When the user selects a theme, the script sets a cookie and refreshes the page to apply the new theme.

### Code Snippet

```php
session_start();

if (isset($_COOKIE['theme'])) {
    $theme = $_COOKIE['theme'];
} else {
    $theme = 'light'; 
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $theme = $_POST['theme'];
    setcookie('theme', $theme, time() + (86400 * 30), "/"); 
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}
```

### Output

- Users can select their preferred theme by clicking the "Light Mode" or "Dark Mode" buttons.
- The current theme is displayed on the page, and the selected theme is applied on subsequent visits.

## Contributing

Contributions are welcome! If you have suggestions for improvements or new features, feel free to open an issue or submit a pull request.

## Author

- **Fenil Galani** - [GitHub Profile](https://github.com/FenilGalani07)

## Acknowledgments

- Thanks to the PHP community for their continuous support and resources.
- Inspiration from various online coding tutorials.

