<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Simple Class</h1>
    <?php
        class Student{
            protected $name;
           
            function getName($name){
                $this->name=$name;
            }

            function setName(){
                echo "$this->name";
            }
        }

        $raju=new Student();
        $raju->getName("Raju Mane");
        $raju->setName();

    ?>
</body>
</html>