<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Factorial Number</h1>
    <?php
        
        $res=1;
        for($j=1;$j<=1000;$j++){
            for($i=1;$i<=$j;$i++){
                $res=$res*$i;
            }
            echo "Factorial of $j is $res<br>";
            $res=1;
        }
        
    ?>
</body>
</html>