<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>arrays explode function</h1>
    <?php
        $text="85 78 90 88";
        echo "$text <br>";
        $array1=explode(" ",$text);
        print_r($array1);
        echo "<br>";
        $array2=explode(" ",$text,3);
        print_r($array2);
        echo "<br>";
        $array3=explode(" ",$text,-1);
        print_r($array3);
        echo "<br>";
        $array4=explode(" ",$text,2);
        print_r($array4);
    ?>
</body>
</html>