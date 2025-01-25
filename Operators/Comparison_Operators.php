<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Comparison Operators</h1>
    <?php
        $a=10;
        $b=20;
        $c=10;
        $d=15;

        echo '$a: ',"$a ",'$b: ',"$b ",'$c: ',"$c ",'$d: ',"$d ","<br>";
        
       $res=$a<$b;
       echo '$a<$b: ',"$res","<br>";

       $res=$a<$a;
       echo '$a<$a: ',"$res","<br>";

       $res=$a<=$b;
       echo '$a<=$b: ',"$res","<br>";

       $res=$a<=$a;
       echo '$a<=$a: ',"$res","<br>";

       $res=$c>$d;
       echo '$c>$d: ',"$res","<br>";

       $res=$c>$c;
       echo '$c>$c: ',"$res","<br>";

       $res=$c>=$d;
       echo '$c>=$d: ',"$res","<br>";

       $res=$c>=$c;
       echo '$c>=$c: ',"$res","<br>";

       $res=$a==$a;
        echo '$a==$a: ',"$res","<br>";

        $res=$a==$b;
        echo '$a==$b: ',"$res","<br>";

        $res=$a!=$a;
        echo '$a!=$a: ',"$res","<br>";

        $res=$a!=$b;
        echo '$a!=$b: ',"$res","<br>";

    ?>
</body>
</html>