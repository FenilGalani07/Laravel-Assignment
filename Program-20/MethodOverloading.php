<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamic Method for Calculations</title>
</head>
<body>
    <h1>Dynamic Method for Math Operations</h1>


    <?php


    class MathOperations {


       
        public function calculate() {
           
            $numArgs = func_num_args();
            $args = func_get_args();


           
            if ($numArgs == 2) {
                return $args[0] + $args[1];
            }
           
            elseif ($numArgs == 1) {
                return $args[0] * $args[0];
            }
            else {
                return "Invalid number of arguments.";
            }
        }
    }


   
    $math = new MathOperations();


    echo "<p><strong>Addition of 3 and 4:</strong> " . $math->calculate(3, 4) . "</p>";


   
    echo "<p><strong>Square of 5:</strong> " . $math->calculate(5) . "</p>";


   
    echo "<p><strong>Invalid calculation (no arguments):</strong> " . $math->calculate() . "</p>";
    echo "<p><strong>Invalid calculation (too many arguments):</strong> " . $math->calculate(3, 4, 5) . "</p>";


    ?>


</body>
</html>
