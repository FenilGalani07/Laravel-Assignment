<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bank Account Operations</title>
</head>
<body>
    <h1>Bank Account Operations</h1>


    <?php


    class BankAccount {
                private $accountNumber;
        private $balance;


        public function __construct($accountNumber, $initialBalance = 0) {
            $this->accountNumber = $accountNumber;
            $this->balance = $initialBalance;
        }


        public function getAccountNumber() {
            return $this->accountNumber;
        }


        public function getBalance() {
            return $this->balance;
        }


        public function deposit($amount) {
            if ($amount > 0) {
                $this->balance += $amount;
                return "Deposited: \$" . $amount;
            } else {
                return "Deposit amount must be greater than zero.";
            }
        }


        public function withdraw($amount) {
            if ($amount > 0 && $amount <= $this->balance) {
                $this->balance -= $amount;
                return "Withdrew: \$" . $amount;
            } else {
                return "Insufficient balance or invalid withdrawal amount.";
            }
        }
    }




    $account = new BankAccount("123456789", 500); 
    echo "<p><strong>Account Number:</strong> " . $account->getAccountNumber() . "</p>";
    echo "<p><strong>Initial Balance:</strong> \$" . $account->getBalance() . "</p>";


    $depositMessage = $account->deposit(200); 
    echo "<p>" . $depositMessage . "</p>";
    echo "<p><strong>New Balance:</strong> \$" . $account->getBalance() . "</p>";


    $withdrawMessage = $account->withdraw(100); 
    echo "<p>" . $withdrawMessage . "</p>";
    echo "<p><strong>New Balance:</strong> \$" . $account->getBalance() . "</p>";


    
    $withdrawMessage = $account->withdraw(700);
    echo "<p>" . $withdrawMessage . "</p>";


    ?>


</body>
</html>
