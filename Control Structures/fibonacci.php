<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>fibonacci</h1>
    <?php
    $a=0;
    $b=1;
    echo "$a, $b, ";
    for($i=3;$i<=2000;$i++){
        $c=$a+$b;
        echo "$c, ";
        $a=$b;
        $b=$c;
    }
    ?>
</body>
</html>