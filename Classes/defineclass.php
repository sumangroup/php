<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Class with object example</h1>
    <?php
        function display(){
            echo "<br><br>";
        }
        class Student{
            public $name;
            public $rollno;

            private $phone;
            

        }
        $std1=new Student();
        print_r($std1);
        display();

        $std1->name="Raju Mane";
        $std1->rollno=101;
        echo "$std1->name,";
        echo "$std1->rollno,";
        display();

        $std2=new Student();
        print_r($std2);
        display();
        $std2->name="Pranjal";
        $std2->rollno=70;
        echo "$std2->name,";
        echo "$std2->rollno,";
        display();

        $std3=new Student();
        print_r($std3);
        display();
        $std3->name="Riya";
        $std3->rollno=71;
        echo "$std3->name,";
        echo "$std3->rollno,";
        display();
       
        $std4=new Student();
        print_r($std4);
        display();
        $std4->name="Anshika";
        $std4->rollno=66;
        echo "$std4->name,";
        echo "$std4->rollno,";
        display();
       
        $std5=new Student();
        print_r($std5);
        display();
        $std5->name="Dipti";
        $std5->rollno=11;
        echo "$std5->name,";
        echo "$std5->rollno,";
        display();
       
       
    ?>
</body>
</html>