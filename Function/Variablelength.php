<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Variable-length</h1>
    <?php
        function sum1($num1,$num2,$num3,$num4,$num5){
            $total=$num1+$num2+$num3+$num4+$num5;
            echo "total: $total";
        }
        sum1(10,20,30,40,50);
        echo "<br><br><br>";

        function sum2(...$numbers){
            $total=0;
          foreach($numbers as $num){
            $total=$total+$num;
          }
          echo "total: $total";
        }

        sum2(10,20,30,40,50,60,70,80,90,1000,250,30,60,45);

    ?>
</body>
</html>