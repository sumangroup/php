<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Arrow function</h1>
    <?php
    echo "arraow or lambda function<br>";
    $a=fn($a,$b)=>$a+$b;
    $r=$a(10,20);
    echo "$r<br>";

    $b=fn($a,$b)=>$a-$b;
    $r=$b(100,20);
    echo "$r<br>";

    $b=fn($a,$b)=>$a*$b;
    $r=$b(100,20);
    echo "$r<br>";

    $b=fn($a,$b)=>$a/$b;
    $r=$b(100,20);
    echo "$r<br>";
    ?>
</body>
</html>