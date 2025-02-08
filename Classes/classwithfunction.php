<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>class with function</h1>
    <?php
        class Student{
            public $name;
            public $rollno;
            public $marks1;
            public $marks2;
            public $marks3;


            function getvalue($name,$rollno){
                $this->name=$name;
                $this->rollno=$rollno;
            }

            function display(){
                echo "$this->name,";
                echo "$this->rollno,";
                echo "<br><br>";
            }

            function getmarks($marks1,$marks2,$marks3){
                $this->marks1=$marks1;
                $this->marks2=$marks2;
                $this->marks3=$marks3;
            }

            function totmarks(){
                $total=$this->marks1+$this->marks2+$this->marks3;
                echo "$total,<br><br>";
            }
        }
        $std1=new Student();
        $std1->getvalue("Raju Mane",101);
        $std1->display();
        $std1->getmarks(70,60,56);
        $std1->totmarks();

        $std2=new Student();
        $std2->getvalue("Anshika",66);
        $std2->display();
        $std2->getmarks(95,96,97);
        $std2->totmarks();

        $std3=new Student();
        $std3->getvalue("Dipti",11);
        $std3->display();
        $std3->getmarks(99,99,98);
        $std3->totmarks();

        $std4=new Student();
        $std4->getvalue("Riya",71);
        $std4->display();
        $std4->getmarks(100,100,101);
        $std4->totmarks();

        $std5=new Student();
        $std5->getvalue("Pranjal",70);
        $std5->display();
        $std5->getmarks(88,85,90);
        $std5->totmarks();
    ?>
</body>
</html>