<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Method Overriding Example</h1>
    <?php

    class Person{
        protected $name;
        protected $age;

        public function __construct($name,$age){
            $this->name=$name;
            $this->age=$age;
        }

        public function display(){
            echo<<<END
            The superclass <br>
            The name is $this->name <br>
            and age is $this->age <br><br>
            END;
        }
    }

    class Student extends Person{
        private $rollno;

        public function __construct($name,$age,$rollno){
            parent::__construct($name,$age);
            $this->rollno=$rollno;
        }
        public function display(){
            echo parent::display();
            echo<<<END
            The subclas <br>
            The name is $this->name <br>
            and age is $this->age <br>
            and rollno is $this->rollno <br>
            
            END;
        }
    }

    $raju=new Student("Raju Mane",32,101);
    $raju->display();

    ?>
</body>
</html>