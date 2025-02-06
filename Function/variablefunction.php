<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>variable function</h1>
    <?php
        function add($a,$b){
            $c=$a+$b;
            echo "$c<br>";
        }

        $a="add";
        $a(10,20);
        $a(56,80);
        $a(10,30);
        $a(10,80);
        echo "$a<br>";
        echo "variable function with return<br>";
        function sub($a,$b){
            $c=$a+$b;
            return $c;
        }

        $b="sub";
        $c=$b(20,10);
        echo "$c<br>";
    ?>
</body>
</html>