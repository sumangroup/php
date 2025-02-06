<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Anonymous functions</h1>
    <?php
    echo "with echo<br>";
        $a=function($a,$b){
            $c=$a+$b;
            echo "$c<br>";
        };

        $a(10,20);
        $a(100,30);
        $a(50,26);
        $a(101,20);
        echo "with return<br>";
        $b=function($a,$b){
            $c=$a-$b;
            return $c;
        };
        $r=$b(10,20);
        echo "$r<br>";
        $r=$b(60,40);
        echo "$r<br>";
        $r=$b(108,20);
        echo "$r<br>";
    ?>
</body>
</html>