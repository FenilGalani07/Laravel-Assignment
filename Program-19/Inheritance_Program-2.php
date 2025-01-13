<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shape Area Calculation</title>
</head>
<body>
    <h1>Shape Area Calculation</h1>


    <?php


   
    abstract class Shape {
       
        abstract public function calculateArea();
    }


   
    class Rectangle extends Shape {
       
        private $length;
        private $width;


     
        public function __construct($length, $width) {
            $this->length = $length;
            $this->width = $width;
        }


       
        public function calculateArea() {
            return $this->length * $this->width;
        }
    }


 
    class Circle extends Shape {
       
        private $radius;


        public function __construct($radius) {
            $this->radius = $radius;
        }


        public function calculateArea() {
            return pi() * pow($this->radius, 2);
        }
    }


    $rectangle = new Rectangle(10, 5);
    echo "<p><strong>Rectangle Area:</strong> " . $rectangle->calculateArea() . " square units</p>";
    $circle = new Circle(7);
    echo "<p><strong>Circle Area:</strong> " . $circle->calculateArea() . " square units</p>";
    ?>
</body>
</html>
