<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Comparison_Operators1</h1>
    <?php
        $a=10;
        $b=20;
        $c=10;
        $d="10";
        $e=3;

        $res=$a==$c;
        echo '$a==$c:  ',"$res","<br>";

        $res=$a==$b;
        echo '$a==$b:  ',"$res","<br>";

        $res=$a===$c;
        echo '$a===$c:  ',"$res","<br>";

        $res=$a===$d;
        echo '$a===$d:  ',"$res","<br>";

        $res=$a!==$b;
        echo '$a!==$b:  ',"$res","<br>";

        $res=$a!==$d;
        echo '$a!==$d:  ',"$res","<br>";

        $res=$a!==$c;
        echo '$a!==$c:  ',"$res","<br>";

        echo "Spaceship <br>";

        $res=$a<=>$c;
        echo '$a<=>$c:  ',"$res","<br>";

        $res=$a<=>$b;
        echo '$a<=>$b:  ',"$res","<br>";

        $res=$a<=>$e;
        echo '$a<=>$e:  ',"$res","<br>";

    ?>
</body>
</html>