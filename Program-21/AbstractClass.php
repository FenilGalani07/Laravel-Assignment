<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment System</title>
</head>
<body>
    <h1>Payment System</h1>


    <?php


   
    abstract class Payment {
       
        abstract public function makePayment($amount);
    }


   
    class CreditCardPayment extends Payment {
       
        public function makePayment($amount) {
           
            return "Payment of \$$amount made using Credit Card.";
        }
    }


   
    class PayPalPayment extends Payment {
       
        public function makePayment($amount) {
           
            return "Payment of \$$amount made using PayPal.";
        }
    }


   
    $creditCardPayment = new CreditCardPayment();
    echo "<p>" . $creditCardPayment->makePayment(100) . "</p>";


    $payPalPayment = new PayPalPayment();
    echo "<p>" . $payPalPayment->makePayment(50) . "</p>";


    ?>


</body>
</html>
