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
        
        public $name;
        public $rollno;
        public $marks1;
        public $marks2;
        public $marks3;
        
        
        function __construct($name,$rollno,$marks1,$marks2,$marks3){
            $this->name=$name;
            $this->rollno=$rollno;
            $this->marks1=$marks1;
            $this->marks2=$marks2;
            $this->marks3=$marks3;
            echo "your are in constructor mode<br>";
        }

        function display(){
           
            echo "Name: $this->name<br>";
            echo "rollno: $this->rollno<br>";
            $this->caltot();
        }

        function caltot(){
            $tot=$this->marks1+$this->marks2+$this->marks3;
            echo "total: $tot<br>";
        }

        function __destruct(){
            
        }
     }
     
     $std1=new Student("Raju Mane",101,56,85,63);
     print_r($std1);
     $std1->display();

     print_r($std1);
     $std1->display();

    ?>
</body>
</html>