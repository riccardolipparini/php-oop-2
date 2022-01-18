<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stipendi</title>
</head>
<body>
    <?php
    
    class Person {
       private $name;
       private $surname;
       private $birthDate;
       
        public function __construct($name, $surname){
           $this -> setName($name);
           $this -> setSurname($surname);
       }

        public function setName($name){
            $this -> name = $name;
       }

        public function setSurname($surname){
            $this -> surname = $surname;
       }
        public function setBirthDate($birthDate){
            $this -> birtDate = $birthDate;
   }

        public function getName(){
            return $this -> name;
   }
        public function getBirthDate(){
            return $this -> birtDate;
        }

        public function getSurname(){
            return $this -> surname;
        }

        public function printFullPerson(){
            return $this -> name . " " . $this -> surname . ": " . $this -> birthDate;
       }

        public function __toString(){
            return $this -> printFullPerson();
       }
    }

  
     class Employee extends Person{
         private $salary;
         private $hiringDate;

         public function __construct($name, $surname, $salary){
            parent::__construct($name, $surname);
            $this -> setSalary($salary);
           
         }

         public function setSalary($salary){
             $this -> salary = $salary;
         }
         public function setHiringDate($hiringDate){
            $this -> hiringDate = $hiringDate;
        }

        public function getSalary(){
            return $this -> salary;
        }
        public function getHiringDate(){
           return $this -> hiringDate;
       }


         public function printFullEmployee(){
             return parent::printFullPerson() . $this -> salary . " (" . $this -> hiringDate . ")";
        }

       public function __toString(){
             return $this -> printFullEmployee();
         }

       
     }

     $per = new Person("Giovanni", "Rossi");
     $per -> setBirthDate("18/07/81");
     
     echo $per -> getBirthDate();
    ?>
</body>
</html>