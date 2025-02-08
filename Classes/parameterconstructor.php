<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> parameter constructor</h1>
    <?php
        class Student{
            private $name;
            private $age;

            function __construct($n,$a){
                    $this->name=$n;
                    $this->age=$a;
            }

            function display(){
                echo "$this->name<br>";
                echo "$this->age<br>";
            }
        }
        echo "student<br>";
        $std1=new Student("Raju Mane",32);
        $std1->display();

        echo "student<br>";
        $std2=new Student("Sandesh",18);
        $std2->display();
    ?>
</body>
</html>