<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>this program create the class and its object</h1>
    <?php
        function display(){
            echo "<br><br>";
        }
        // 1. declare the class student
       class Student{
            public $name; // only the public properties are accessed
            public $age;
       }
       // 2. declare the object
       $student=new Student();

       // 3. using the object we are assign the value to the property
       $student->name="Raju Mane";
       $student->age=32;

       // 4. priting the property value
       echo "$student->name<br>";
       echo "$student->age<br>";
       print_r($student);
    ?>
</body>
</html>