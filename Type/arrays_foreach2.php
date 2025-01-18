<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Arrays foreach</h1>
    <?php
        $indexArray=[1,2,3];
        print_r($indexArray);
        echo "<br>";
        foreach($indexArray as $x){
            echo "$x <br>";
        }

        echo "<br>";
        echo "<br>";
        echo "<br>";
        $associativeArray=[
            "name"=>"Raju Mane",
            "age"=>32,
            "salaray"=>15000,
        ];
        foreach($associativeArray as $key=>$value){
            echo "$key : $value <br>";
        }

        echo "<br>";
        echo "<br>";
        echo "<br>";
        $mindexs=[
            [1,2,3,6,9,9],
            [4,5],
            [7,8,9],
        ];

        foreach($mindexs as $a){
            foreach($a as $value){
                echo "$value ";
            }
            echo "<br>";
        }

        $massociativeArray=[
            ["name"=>"Raju Mane","age"=>32,"salary"=>15000],
            array(
                "name"=>"Dhanshree Mane","age"=>28,"salary"=>25000,
            ),
        ];

        foreach($massociativeArray as $a){
            foreach($a as $key=>$value){
                echo "$key = $value, ";
            }
            echo "<br>";
        }

    ?>
</body>
</html>