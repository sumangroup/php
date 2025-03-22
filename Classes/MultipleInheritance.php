<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Multiple Inheritance</h1>
    <?php
        class Student{
            protected $name;
            protected $rollno;

            public function __construct($name, $rollno) {
                $this->name = $name;
                $this->rollno = $rollno;
            }

            public function getStudent()  {
                echo<<<END
                This is super class<br>
                The name is  $this->name <br>
                and rollno is $this->rollno <br><br>
                END;
            }
        } 

        trait AcademicPerformance {
            protected $gpa;
        
            public function setGPA($gpa) {
                $this->gpa = $gpa;
            }
        
        }


        class AllRounderStudent extends Student{
            use AcademicPerformance;

            public function getFullDetails(){
                echo<<<END
                The name is $this->name <br>
                and rollno is $this->rollno <br>
                and gpa is $this->gpa <br><br>
                END;
            }
        }

        $raju=new AllRounderStudent("Raju Mane",101);
        $raju->setGPA(6.3);
        $raju->getFullDetails();

    ?>
</body>
</html>