<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>PHP maths function</h1>
    <?php
    echo "abs — Absolute value<br>";
    $num=abs(-10);
    echo "$num<br>";
    $num=abs(10);
    echo "$num<br>";
    $num=abs(10.23);
    echo "$num<br><br>";

    echo "ceil — Round fractions up<br>";
    $num=ceil("5");
    echo "$num<br>";
    $num=ceil("5.4");
    echo "$num<br>";
    $num=ceil("-5.4");
    echo "$num<br><br>";

    echo "floor — Round fractions down<br>";
    $num=floor("5");
    echo "$num<br>";
    $num=floor("5.4");
    echo "$num<br>";
    $num=floor("-5.4");
    echo "$num<br><br>";

    echo "max — Find highest value<br>";
    $num=max(-1,5,6,-8,-10);
    echo "$num<br>";
    $num=max(array(10,20,-30,40,-90));
    echo "$num<br><br>";
   
    echo "min — Find lowest value<br>";
    $num=min(-1,5,6,-8,-10);
    echo "$num<br>";
    $num=min(array(10,20,-30,40,-90));
    echo "$num<br><br>";

    echo "pow — Exponential expression<br>";
    $num=pow(2,8);
    echo "$num<br>";
    $num=pow(-2,7);
    echo "$num<br><br>";

    echo "sqrt — Square root<br>";
    $num=sqrt(2);
    echo "$num<br>";
    $num=sqrt(3);
    echo "$num<br><br>";

    echo "bindec — Binary to decimal<br>";
    $num=bindec("111");
    echo "$num<br>";
    $num=bindec("1010");
    echo "$num<br>";
    $num=bindec("1110");
    echo "$num<br><br>";

    echo "decbin — Decimal to binary<br>";
    $num=decbin(12);
    echo "$num<br><br>";
   
    echo "decoct — Decimal to octal<br>";
    $num=decoct(12);
    echo "$num<br><br>";

    echo "dechex — Decimal to hexadecimal<br>";
    $num=dechex(12);
    echo "$num<br><br>";

    ?>
</body>
</html>