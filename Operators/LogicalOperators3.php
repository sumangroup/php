<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Logical Operators</h1>
    <?php
        $a=10;
        $b=20;
        $c=30;
        $e=40;
        $f=0;
        // expected output should be false(0) but it's showing the true(1)
        echo "and operator<br>";
        $res1= $a<$b and $b>$e;
        echo "$res1<br>";

        echo "or operator<br>";
        // expected output should be true(1) but it's showing the false(0)
        $res2=$a>$b or $b<$e;
        echo "$res2<br>";

        echo "xor operator<br>";
        // expected output should be false(0) but it's showing the true(1)
        $res3=$a<$b xor $b<$e;
        echo "$res3<br>";

        // expected output should be true(1) but it's showing the false(0)
        $res4=$a>$b xor $b<$e;
        echo "$res4<br>";

    ?>
</body>
</html>