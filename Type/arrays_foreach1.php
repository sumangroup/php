<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Arrays foreach</h1>
    <?php
        $indexArray=[1,2,3,4,5,6,];
        echo "index array <br>";
        foreach($indexArray as $i){
            echo "$i <br>";
        }
       $associativeArray=[
            "name"=>"Raju mane",
            "age"=>32,
            "salary"=>15000
       ];
       echo "associative Array<br>";
       foreach($associativeArray as $x=>$y){
            echo "$x : $y <br>";
       }

       $mindexs=[
        [1,2,3],
        [4,5,6],
        [7,8,9],
       ];
       echo "mindexs<br>";
       foreach($mindexs as $mindex){
        foreach($mindex as $num){
            echo "$num, ";
        }
       }
       echo "<br>";
       echo "<br>";
       echo "<br>";echo "<br>";
       $mindex2=[
        [1,2],
        [1,5,6],
        [1],
       ];


       foreach($mindex2 as $a){
        foreach($a as $n){
            echo "$n,";
        }
        echo "<br>";
       }

       $mindex3=array(
        array(1,2,3),
        array(4,),
        array(7,8,3),
       );
       echo "<br>";
       echo "<br>";
       echo "<br>";
       foreach($mindex3 as $a){
        foreach($a as $num){
            echo "$num, ";
        }
        echo "<br>";
       }

       $massociative=[
        ["name"=>"Raju Mane","age"=>32,"salary"=>15000],
        ["name"=>"Dhanshree Mane","age"=>27,"salary"=>50000],
       ];

       echo "<br>";
       echo "<br>";
       foreach($massociative as $a){
        foreach($a as $x=>$y){
            echo "$x:$y,";
        }
        echo "<br>";
       }
    ?>
    
</body>
</html>