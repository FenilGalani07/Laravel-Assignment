<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Hierarchy</title>
</head>
<body>
    <h1>Employee Hierarchy</h1>


    <?php


   
    class Employee {
       
        protected $name;
        protected $salary;


        public function __construct($name, $salary) {
            $this->name = $name;
            $this->salary = $salary;
        }


       
        public function getDetails() {
            return "Name: " . $this->name . "<br>" .
                   "Salary: $" . number_format($this->salary, 2);
        }
    }


    class Manager extends Employee {
       
        private $department;


       
        public function __construct($name, $salary, $department) {
           
            parent::__construct($name, $salary);
            $this->department = $department;
        }


       
        public function getManagerDetails() {
           
            $employeeDetails = $this->getDetails();
            return $employeeDetails . "<br>" .
                   "Department: " . $this->department;
        }
    }


   


    $manager = new Manager("John Doe", 75000, "IT Department");


    echo "<p><strong>Manager Details:</strong></p>";
    echo "<p>" . $manager->getManagerDetails() . "</p>";


    ?>


</body>
</html>
