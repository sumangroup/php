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
    for($j=2;$j<=1000;$j++){
   
    $count=0;
    for($i=1;$i<=$j;$i++){
        if($j%$i==0){
            $count++;
        }
    }    
    if($count!=2){
        echo "The $j is not prime number<br>";
    }
    
}
    ?>
</body>
</html>