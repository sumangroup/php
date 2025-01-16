<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo 'index arrays <br><br>';
     $food = array("Pizza", "Burger", "French Fry");
     print_r($food);

    echo '<br><br>';
    $food1=array();
    print_r($food1);
    echo '<br><br>';
    $food1[0]='Pizza';
    print_r($food1);
    echo '<br><br>';
    $food1[1]='Burger';
    $food1[2]='French Fry';
    print_r($food1);

    echo '<br><br>';
    $food[3]='xyz';
    echo 'food';
    echo '<br><br>';
    print_r($food);
    echo '<br><br>';
    print_r($food[1]);

    echo '<br><br>';
    print_r($food);

    $arraylength=count($food);
    echo '<br><br>';
    print_r($arraylength);
    
    for($i=0;$i<$arraylength;$i++){
        echo "<li>",$food[$i],"</li>";
        echo '<br><br>';
    }
    echo '<br><br>';
    $array1=[1,15,20];
    print_r($array1);
    echo '<br><br>';
    $array1[1]=56.23;
    print_r($array1);
    ?>
</body>
</html>