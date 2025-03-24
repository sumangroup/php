<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Property Overloading</h1>
    <?php
        class Student{
            private $data=[];

            public function __set($key,$value){
                $this->data[$key]=$value;
            }

            public function __get($key){
                echo "$key:";
                print_r($this->data[$key]);
                echo "<br><br>";
            }
        }

        $obj1=new Student();
        $obj1->name="Raju mane";
        $obj1->age=32;
        $obj1->mobile=9833395327;
        $obj1->sal=25000.500;
        $obj1->col="blue";
      

        $obj1->name;
        $obj1->age;
        $obj1->mobile;
        $obj1->sal;
        $obj1->col;
  


    ?>
</body>
</html>