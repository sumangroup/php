<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>arrays implode function</h1>
    <?php
        $indexarray=[1,2,3];
        foreach($indexarray as $a){
            echo "$a ";
        }
        echo "<br><br><br>";
        $str1=implode("=",$indexarray);
        echo "$str1";

        echo "<br><br><br>";
        $associative_array=[
            "name"=>"Raju",
            "age"=>32,
            "salaray"=>15000,
        ];
        $str2=implode(":",$associative_array);
        echo "$str2";

        echo "<br><br>";
        $mindex=[
            [1,2,3],
            [1,5],
            [10,56]
        ];

        foreach($mindex as $a){
            $str=implode(" ",$a);
            echo "$str <br>";
        }

        $massociative=[
            ["name"=>"Raju mane","age"=>32,"salary"=>15000],
            array(
                "name"=>"Dhanshree Mane","age"=>28,"salary"=>5000,
            )
        ];
        echo "<br><br>";
        foreach($massociative as $a){
            $str=implode(",",$a);
            echo "$str <br>";
        }

        $students = [
            [101, "Alice", 85, 78, 90, 88],
            [102, "Bob", 76, 85, 80, 79],
            [103, "Charlie", 90, 92, 88, 95],
            [104, "David", 70, 68, 72, 75]
        ];
        echo "<br><br>";
        foreach($students as $student){
            $str3=implode(" ",$student);
            echo "$str3 <br>";
            echo "<br>";
        }
    ?>
</body>
</html>