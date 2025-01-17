<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Arrays Explode function</h1>
    <?php
        $text1= "101 Alice 85 78 90 88";
        $result1=explode(" ",$text1);
        print_r($result1);

        echo "<br>";
        $text2="Raju Ramchandra Mane";
        $result2=explode(" ",$text2,-2);
        print_r($result2);

        

    ?>
</body>
</html>