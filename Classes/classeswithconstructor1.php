<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>class with constructor</h1>
    <?php
   

    class Student{
        private $rollno;
        private $name;

        function __construct($rollno,$name){
            $this->rollno=$rollno;
            $this->name=$name;
        }

        function printData(){
            echo<<<END
            Rollno: $this->rollno<br>
            Name: $this->name
            <br><br>
            END;
        }
    }

    $std1=new Student(101,"Raju Mane");
    $std1->printData();
    

    $std2=new Student(102,"Anshika Barai");
    $std2->printData();
    

    $std3=new Student(103,"Dipti Shah");
    $std3->printData();
    

    $std4=new Student(104,"Riya Negi");
    $std4->printData();
    ?>
</body>
</html>