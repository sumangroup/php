<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Introspection PHP</h1>
    <?php
        class Person{
            public $name;
            public $age;

            public function __construct($name,$age){
                $this->name=$name;
                $this->age=$age;
            }

            public function display(){
                echo<<<END
                The name is $this->name <br>
                and age is $this->age <br><br>
                END;
            }

            public function printText(){
                echo "hello";
            }
        }
        class Student extends Person{
            private $rollno;

            public function __construct($name,$age,$rollno){
                parent::__construct($name,$age);
                $this->rollno=$rollno;
            }
            public function display(){
                echo<<<END
                The name is $this->name <br>
                and age is $this->age <br>
                and rollno is $this->rollno <br><br>
                END;
            }
        }

        $s1=new Person("Raju Mane",32);
        $s2=new Student("Dipti",18,101);

        $classname=get_class($s1);
        echo "classname: $classname <br><br>";

        print_r(get_class_methods($s1));
        echo "<br><br>";

        print_r(get_class_vars('Person'));
        echo "<br><br>";

        if(method_exists($s1,'printText1')){
            echo 'printText method exist<br><br>';
        }
        else{
            echo 'printText method does\'nt exist<br><br>';
        }

        if(property_exists($s1,'name')){
            echo 'name property exist<br>';
        }
        else{
            echo 'name property does\'nt exist<br>';
        }

        if(is_a($s2,'Student')){
            echo "s2 is Student <br>";
        }

        if(is_a($s2,'Person')){
            echo "s2 is Person <br>";
        }

        if(is_subclass_of($s2,'Person')){
            echo "s2 is subclass of Person <br>";
        }
        else{
            echo "s2 is not subclass of Person <br>";
        }

        if(class_exists('Student')){
            echo "Student class exist <br>";
        }
        else{
            echo "Student class  does not exist <br>";
        }

        $parentclass=get_parent_class($s2);
        echo "Parent class of s2 is $parentclass <br><br>";

        print_r(get_declared_classes());
    ?>

</body>
</html>