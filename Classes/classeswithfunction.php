<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> class with has the function</h1>

    <?php
        class Student{
            private $name;
            private $age;

            function setpro($n,$a){
                $this->name=$n;
                $this->age=$a;
            }
            function display(){
                echo "$this->name<br>";
                echo "$this->age<br>";
            }
        }

        $std1=new Student();
        $std1->setpro("Raju Mane",32);
        $std1->display();
    ?>
</body>
</html>