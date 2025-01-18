<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>explode function</h1>
    <?php
        $str="K6330, L6711, O7552, O760, O771, O772";
        echo "$str <br>";
        echo "full";
        $associative=explode(",",$str);
        print_r($associative);
        echo "<br>";
        echo "+3 <br>";
        $associative=explode(",",$str,3);
        print_r($associative);
        echo "<br>";
        echo "+2 <br>";
        $associative=explode(",",$str,2);
        print_r($associative);
        echo "<br>";
        echo "-2<br>";
        $associative=explode(",",$str,-2);
        print_r($associative);
        echo "<br>";
        echo "0 <br>";
        $associative=explode(",",$str,0);
        print_r($associative);
        echo "<br>";
        echo "1 <br>";
        $associative=explode(",",$str,1);
        print_r($associative);
    ?>
</body>
</html>