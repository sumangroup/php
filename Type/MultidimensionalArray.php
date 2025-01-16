<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Multidimensional Array </h1>

    <?php
        $food=[
            ["Pizza",22,18],
            ["Burger",15,19],
            ["French Fry",5,2],
            ["xyz",10,6],
        ]; 
        print_r($food);

        $arraylength=count($food[1]);
        echo "<br><br>";
        print_r($arraylength);
        echo "<br><br>";
        for($i=0;$i<4;$i++){
            for($j=0;$j<3;$j++){
                print_r($food[$i][$j]);
                echo " ";
            }
            echo "<br>";
        }

        echo '<br><br>';

        $array = [
            "foo" => "bar",
            42    => 24,
            "multi" => ["dimensional" =>["width"=>2]], 
            ["Pizza",22,18],
            ["Burger",15,19],
            ["French Fry",5,2],
        ];
        echo '<br><br>';
        print_r($array);
        print_r($array["multi"]["dimensional"]["width"]);

        $food[0][1]=30;
        echo "<br><br>";
        for($i=0;$i<4;$i++){
            for($j=0;$j<3;$j++){
                print_r($food[$i][$j]);
                echo " ";
            }
            echo "<br>";
        }

        $array["multi"]["dimensional"]["width"]=15;
        echo "<br>";
        print_r($array);
    ?>
</body>
</html>