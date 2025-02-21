<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>pass by reference</h1>
    <?php
        $a=10;
        $b=20;
        echo "before function call <br>";
        echo "a: $a"," b:$b","<br>";

        function fun2(&$a,&$b){
            $a=30;
            $b=40;
            echo "in the function <br>";
            echo "a: $a"," b:$b","<br>";
        }

        fun2($a,$b);
        echo "after function call <br>";
        echo "a: $a"," b:$b","<br>";
    ?>
</body>
</html>