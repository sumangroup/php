<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Single Inheritance</h1>
    <?php
        class Person{
            protected $name;
            protected $age;

            public function __construct($name,$age){
                $this->name=$name;
                $this->age=$age;
            }

            public function displayPerson(){
                echo<<<END
                The name is $this->name <br>
                and age is $this->age <br><br> 
                END;
            }
        }

        class Student extends Person{
            private $id;

            public function __construct($name,$age,$id){
                $this->name=$name;
                $this->age=$age;
                $this->id=$id;
            }

            public function displayStudent(){
                echo<<<END
                The name is $this->name <br>
                and age is $this->age <br>
                and id is $this->id <br><br>
                END;
            }
        }

        $raju=new Student("Raju Mane",32,101);
        $raju->displayStudent();
    ?>
</body>
</html>