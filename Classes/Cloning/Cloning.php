<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Cloning Example</h1>
    <?php
        class Student{
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
        }

        $std1=new Student("Raju Mane",32);
        $std1->display();

        $std2= clone $std1;

        $std2->name="Anshika";
        $std2->display();
    ?>
</body>
</html>