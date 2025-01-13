# Word Reverser

This repository contains a simple PHP script that reverses the words in a given sentence. The program demonstrates the use of functions, string manipulation, and array handling in PHP.

## Features

- Reverses the order of words in a specified sentence.
- Outputs both the original and reversed sentences in a user-friendly format.

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

The script defines a function `reverseWords` that takes a sentence as input, splits it into words, reverses the order of the words, and then joins them back into a single string.

### Code Snippet

```php
function reverseWords($sentence) {
    $words = explode(' ', $sentence);
    $reversedWords = array_reverse($words);
    $reversedSentence = implode(' ', $reversedWords);
    return $reversedSentence; 
}

$inputSentence = "PHP is fun";
$reversedSentence = reverseWords($inputSentence);
echo "Original Sentence: '$inputSentence'\n";
echo "Reversed Sentence: '$reversedSentence'\n";
```

### Output

For the input sentence `"PHP is fun"`, the output will be:

```
Original Sentence: 'PHP is fun'
Reversed Sentence: 'fun is PHP'
```

## Contributing

Contributions are welcome! If you have suggestions for improvements or new features, feel free to open an issue or submit a pull request.


## Author

- **Fenil Galani** - [GitHub Profile](https://github.com/FenilGalani07)


## Acknowledgments

- Thanks to the PHP community for their continuous support and resources.
- Inspiration from various online coding tutorials.

