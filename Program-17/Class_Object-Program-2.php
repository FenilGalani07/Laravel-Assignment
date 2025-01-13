<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Details</title>
</head>
<body>
    <h1>Book Details</h1>


    <?php


    class Book {
       
        private $title;
        private $author;
        private $price;


        public function __construct($title, $author, $price) {
            $this->title = $title;
            $this->author = $author;
            $this->price = $price;
        }


       
        public function getDetails() {
            return [
                "Title: " . $this->title,
                "Author: " . $this->author,
                "Price: $" . number_format($this->price, 2)
            ];
        }
    }


   
    $book1 = new Book("The Great Gatsby", "F. Scott Fitzgerald", 10.99);
    $bookDetails1 = $book1->getDetails();
   
   
    foreach ($bookDetails1 as $detail) {
        echo "<p>" . $detail . "</p>";
    }


    $book2 = new Book("1984", "George Orwell", 8.99);
    $bookDetails2 = $book2->getDetails();
    foreach ($bookDetails2 as $detail) {
        echo "<p>" . $detail . "</p>";
    }


    ?>


</body>
</html>
