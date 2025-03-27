<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Serialization with Objects</h1>
    <?php
         class Person{
            public $name;
            public $age;

            public function __construct($name,$age){
                $this->name=$name;
                $this->age=$age;
            }

            public function display(){
                echo<<<END
                The name is $this->name <br>
                and age is $this->age <br><br>
                END;
            }

            public function printText(){
                echo "hello";
            }
        }
        $s1=new Person("Raju Mane",32);

        $serializedObj = serialize($s1);
        print_r($serializedObj);
        echo "<br>";
        $unserializedObj = unserialize($serializedObj);
        print_r($unserializedObj);
    ?>
</body>
</html>