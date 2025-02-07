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
        echo "count — Counts all elements in an array<br>";
        $array=array(
            "name"=>"Raju Mane",
            "age"=>100,
            "salary"=>15000
        );
        print_r($array);
        $c=count($array);
        echo "$c<br><br>";

        echo "array_chunk — Split an array into chunks<br>";
        $inputarray=array('a','b','c','d','e','f','g');
        $outputarray=array_chunk($inputarray,2);
        print_r($outputarray);
        echo "<br>";
        $outputarray=array_chunk($inputarray,2,true);
        print_r($outputarray);
        echo "<br><br>";


        echo "array_count_values — Counts the occurrences of each distinct value in an array<br>";
        $inputarray=array(1, "hello", 1, "world", "hello");
        $outputarray=array_count_values($inputarray);
        print_r($outputarray);
        echo "<br><br>";

        echo "array_intersect — Computes the intersection of arrays<br>";
        $array1 = array("c" => "green", "red", "blue");
        $array2 = array("b" => "green", "yellow", "red");
        $result = array_intersect($array1, $array2);
        print_r($result);

        echo "array_flip — Exchanges all keys with their associated values in an array<br>";
        $inputarray=array(
            "name"=>"Raju Mane",
            "age"=>32,
            "salary"=>25000
        );
        $outputarray=array_flip($inputarray);
        print_r($outputarray);
        echo "<br><br>";

        echo "extract<br>";
        $inputarray=array(
            "name"=>"Raju Mane",
            "age"=>32,
            "salary"=>25000
        );
        extract($inputarray);
        echo "$name<br>";
        echo "$age<br>";
        echo "$salary<br>";
        echo "<br><br>";

        echo "The compact() function creates an associative array from variables<br>";
        $name="Raju Mane";
        $age=32;
        $salary=25000;

        $inputarray=compact("name","age","salary");
        print_r($inputarray);
    ?>
</body>
</html>