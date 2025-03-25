<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Cloning</h1>
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
            and age is $this->age <br>
            END;
        }
      }

      $std1=new Student("Raju Mane",32);
      $std1->display();

      $std2=clone $std1;
      $std2->name="Pranjal";
      $std2->age=19;
      $std2->display();

      $std3= clone $std2;
      $std3->name="Dipti";
      $std3->age=19;
      $std3->display();

    ?>
</body>
</html>