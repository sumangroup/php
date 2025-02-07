<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Array Function</h1>
    <?php
    function display(){
        echo "<br><br>";
    }
         echo "count — Counts all elements in an array<br>";
         $array=[1,2,3,5,6];
         print_r($array);
         $c=count($array);
         echo "<br>$c<br>";

         echo "array_chunk — Split an array into chunks<br>";
         $inputarray=array('a','b','c','d','e','f','g');
         $outputarray=array_chunk($inputarray,2);
         print_r($inputarray);
         echo "<br>";
         print_r($outputarray);
         $outputarray=array_chunk($inputarray,2,true);
         echo "<br>";
         print_r($outputarray);
         echo "<br><br>";

         echo "array_count_values — Counts the occurrences of each distinct value in an array<br>";
         $inputarray=array(1, "hello", 1, "world", "hello","Raju",1);
         $outputarray=array_count_values($inputarray);
         print_r($inputarray);
         echo "<br>";
         print_r($outputarray);
         echo "<br><br>";

         echo "array_intersect — Computes the intersection of arrays<br>";
         /*$array1 = array("c" => "green", "red", "blue");
         $array2 = array("b" => "green", "yellow", "red");*/
         $array1 = array(1,2,5,7,8);
         $array2 = array(2,5,6,8);
         $outputarray=array_intersect($array2,$array1);
         print_r($outputarray);
         echo "<br><br>";

         echo "array_flip — Exchanges all keys with their associated values in an array<br>";
         $inputarray=array(
            15,26,23
        );
        print_r($inputarray);
        $outputarray=array_flip($inputarray);
        display();
        print_r($outputarray);
        display();

        echo "extract<br>";
        $inputarray=array(
            "name"=>"Raju Mane",
            "age"=>32,
            "salary"=>35000,
        );
        print_r($inputarray);
        extract($inputarray);
        echo "<br>";
        echo "$name<br>";
        echo "$age<br>";
        echo "$salary<br>";
        display();

        echo "The compact() function creates an associative array from variables<br>";
        $name="Raju Mane";
        $age=32;
        $salary=35000;
        $outputarray=compact("name","age","salary");
        print_r($outputarray);
    ?>
</body>
</html>