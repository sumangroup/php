<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Arithmetic Operators</h1>
    <?php
    $a=43;
    $b=7;

    $c=$a+$b;
    echo "add: ","$c","<br>";

    $c=$a-$b;
    echo "sub: ","$c","<br>";

    $c=$a*$b;
    echo "mul: ","$c","<br>";

    $c=$a/$b;
    echo "div: ","$c","<br>";

    $c=$a%$b;
    echo "Modulo: ","$c","<br>";

    $c=2**8;
    echo "Exponentiation: ","$c","<br>";

    $c=+$a;
    echo "Identity: ","$c","<br>";

    $c=-$a;
    echo "Negation: ","$c","<br>";

    $c=2*5/7;
    echo "$c","<br>";

    $c=2/5*7;
    echo "$c","<br>";
    ?>
</body>
</html>