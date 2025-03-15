<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Create Class</h1>
    <?php
        function display(){
            echo "<br><br>";
        }

        class Student{
            private $name;
            private $rollno;

            function getData($n,$r){
                $this->name=$n;
                $this->rollno=$r;
            }
             function setData(){
                echo<<<END
                Name:   $this->name
                Rollno:  $this->rollno,<br>
                END;
            }
        }

        $std1=new Student();
        var_dump($std1);
        display();
        $std1->getData("Raju Mane",101);
        $std1->setData();
       
        
    ?>
</body>
</html>