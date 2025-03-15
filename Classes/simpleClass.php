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
            public $name;
            public $id;

            public function __construct($name,$id){
                $this->name=$name;
                $this->id=$id;
            }

            function displayStudent(){
                echo<<<END
                The name is $this->name <br>
                and id is $this->id 
                END;
            }
        }

        $raju=new Student("Raju Mane",101);
        $raju->displayStudent();
      

    ?>
</body>
</html>