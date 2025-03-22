<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hierarchical Inheritance</h1>
    <?php
        class Student{
            protected $name;
            protected $rollno;

            public function __construct($name,$rollno){
                $this->name=$name;
                $this->rollno=$rollno;
            }

            public function getStudent()  {
                echo<<<END
                This is super class<br>
                The name is  $this->name <br>
                and rollno is $this->rollno <br><br>
                END;
            }
        }
        

        $raju=new Student("Raju Mane",101);
        $raju->getStudent();

        class EngineeringStudent extends Student{
            private $branch;

            public function __construct($name,$rollno,$branch){
                $this->name=$name;
                $this->rollno=$rollno;
                $this->branch=$branch;
            }

            public function getEngineeringStudent(){
                echo<<<END
                This is sub class<br>
                The Engineering Student <br>
                The name is  $this->name <br>
                and rollno is $this->rollno <br>
                and branch is $this->branch <br> <br>
                END;
            }
        }

        $raju=new EngineeringStudent("Raju Mane",101,"CO");
        $raju->getEngineeringStudent();

        class MedicalStudent extends Student{
            private $specialization;

            public function __construct($name,$rollno,$specialization){
                $this->name=$name;
                $this->rollno=$rollno;
                $this->specialization=$specialization;
            }

            public function getMedicalStudent(){
                echo<<<END
                This is sub class<br>
                The Medical Student <br>
                The name is  $this->name <br>
                and rollno is $this->rollno <br>
                and specialization is $this->specialization <br> <br>
                END;
            }

        }

        $riya=new MedicalStudent("Riya Negi",102,'MBBS');
        $riya->getMedicalStudent();
    ?>
</body>
</html>