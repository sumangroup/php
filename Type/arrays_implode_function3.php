<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>implode</h1>
    <?php
        $index_array=[1,2,3];
        foreach($index_array as $value){
            echo "$value, ";
        }
        echo "<br>";
        echo "<br>";
        echo "<br>";
        $str1=implode("/",$index_array);
        echo "$str1";
        echo "<br>";
        echo "<br>";
        $associative_array=[
            "name"=>"Raju Mane",
            "age"=>32,
            "salary"=>15000
        ];
        foreach($associative_array as $key=>$value){
            echo "$key = $value <br>";
        }
        echo "<br>";
        echo "<br>";
        $str2=implode(" ",$associative_array);
        echo "$str2";
        echo "<br>";
        echo "<br>";

        $mindexs=[
            [1,2,3],
            [4,5,6],
            [7,8,9]
        ];

        foreach($mindexs as $a){
            foreach($a as $num){
                echo "$num ";
            }
            echo "<br>";
        }

        echo "<br>";
        echo "<br>";
        echo "with implode function <br>";
        foreach($mindexs as $a){
            $str=implode(" ",$a);
            echo "$str <br>";
        }

        $massociatives=[
            ["name"=>"Raju","age"=>32,"salaray"=>15000],
            array("name"=>"Dhanshree","age"=>28,"salary"=>20000),
        ];
        foreach($massociatives as $a){
            foreach($a as $key=>$value){
                echo "$value ";
            }
            echo "<br>";
        }
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "with implode function <br>";
        foreach($massociatives as $a){
            $str=implode(" ",$a);
            echo "$str <br>";
        }
    ?>
</body>
</html>