<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Arrys Function</h1>
    <?php
        $index_array=[1,2,3,];
        echo "index array <br>";
        foreach($index_array as $x){
            echo "$x <br>";
        }

        $associative_array=[
            "name"=>"Raju",
            "age"=>32,
            "salaray"=>15000,
        ];
        echo "associative array <br>";
        foreach($associative_array as $x=>$y){
            echo "$x : $y <br>";
        }

        $mindexs=[
            [1,2,3],
            [4,5,6],
            [7,8,9],
        ];
        echo "m index <br>";
        foreach($mindexs as $mindex){
            foreach($mindex as $num){
                echo "$num, ";
            }
            echo "<br>";
        }
        echo "<br>";
        $massociatives=[
            ["name"=>"Raju","age"=>32,"salaray"=>15000],
            array("name"=>"Dhanshree","age"=>28,"salary"=>20000),
        ];
        echo "m massociatives <br>";
        foreach($massociatives as $name){
            foreach($name as $x=>$y){
                echo "$x:$y, ";
            }
            echo "<br>";
        }
    ?>
</body>
</html>