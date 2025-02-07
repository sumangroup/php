<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>sort function</h1>
    <?php
    function display(){
        echo "<br>";
        echo str_repeat("*",80);
        echo "<br>";
    }

        echo "sort — Sort an array in ascending order<br>";
        $inputarray=array(1,5,10,-8,-3,56);
        print_r($inputarray);
        echo "<br>after sort<br>";
        sort($inputarray);
        print_r($inputarray);
        display();

        echo "rsort — Sort an array in descending order<br>";
        $inputarray=array(1,5,10,-8,-3,56);
        print_r($inputarray);
        echo "<br>after sort<br>";
        rsort($inputarray);
        print_r($inputarray);
        display();

        echo "asort — Sort an array in ascending order and maintain index association<br>";
        $inputarray=array(1,5,10,-8,-3,56);
        print_r($inputarray);
        echo "<br>after sort<br>";
        asort($inputarray);
        print_r($inputarray);
        display();

        echo "arsort — Sort an array in descending order and maintain index association<br>";
        $inputarray=array(1,5,10,-8,-3,56);
        print_r($inputarray);
        echo "<br>after sort<br>";
        arsort($inputarray);
        print_r($inputarray);
        display();

        echo "ksort — Sort an array by key in ascending order<br>";
        $inputarray=array(1,5,10,-8,-3,56);
        print_r($inputarray);
        echo "<br>after sort<br>";
        ksort($inputarray);
        print_r($inputarray);
        echo "<br><br>";

        $inputarray=array(
            "name"=>"Raju Mane",
            "age"=>32,
            "salary"=>35000,
        );
        print_r($inputarray);
        echo "<br>after sort<br>";
        ksort($inputarray);
        print_r($inputarray);
        display();

        echo "krsort — Sort an array by key in descending order<br>";
        $inputarray=array(1,5,10,-8,-3,56);
        print_r($inputarray);
        echo "<br>after sort<br>";
        krsort($inputarray);
        print_r($inputarray);
        echo "<br><br>";

        $inputarray=array(
            "name"=>"Raju Mane",
            "age"=>32,
            "salary"=>35000,
        );
        print_r($inputarray);
        echo "<br>after sort<br>";
        krsort($inputarray);
        print_r($inputarray);
        display();

    ?>
</body>
</html>