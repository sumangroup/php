<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Arrays Implode Function</h1>
    
    <?php
         $index_array=[1,2,3,];
         echo "index array <br>";
         foreach($index_array as $x){
         echo "$x <br>";
         }

         echo "arrays implode function <br>";
         $str1=implode("-",$index_array);

         echo "$str1 <br>";

        $associative_array=[
            "name"=>"Raju",
            "age"=>32,
            "salaray"=>15000,
        ];

        $str2=implode("-",$associative_array);
        echo "$str2 <br>";

        $mindexs=[
            [1,2,3],
            [4,5,6],
            [7,8,9],
        ];

        foreach($mindexs as $mindex){
            $str3=implode(":",$mindex);
            echo "$str3 <br>";
            echo "<br>";
        }

        $massociatives=[
            ["name"=>"Raju","age"=>32,"salaray"=>15000],
            array("name"=>"Dhanshree","age"=>28,"salary"=>20000),
        ];

        foreach($massociatives as $name){
            $str3=implode(":",$name);
            echo "$str3 <br>";
            echo "<br>";
        }

        $arrays=["Raju","Ramchandra","Mane"];
        $str4=implode(" ",$arrays);
        echo "$str4 <br>";
        echo "<br>";

        $students = [
            [101, "Alice", 85, 78, 90, 88],
            [102, "Bob", 76, 85, 80, 79],
            [103, "Charlie", 90, 92, 88, 95],
            [104, "David", 70, 68, 72, 75]
        ];
        
        foreach($students as $student){
            $str3=implode(" ",$student);
            echo "$str3 <br>";
            echo "<br>";
        }
    ?>
    
    
</body>

</html>