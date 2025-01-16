<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Associative Array </h1>

    <?php
        $foodPrice = array("Pizza"=>"150", "Burger"=>"120", "French Fry"=>"99");
        print_r($foodPrice);

        echo "<br><br>";
        $a=array(
            "name"=>"Raju mane",
            "age"=>32,
            "salaray"=>15000
        );
        print_r($a);

        echo "<br><br>";
        $foodPrice1=[];
        $foodPrice1["Pizza"]=150;
        $foodPrice1["Burger"]=120;
        $foodPrice1["French Fry"]=99;
        
        print_r($foodPrice1);

        echo "<br><br>";
        print_r($foodPrice1["French Fry"]);

        $arraylength=count($foodPrice1);
        echo "<br><br>";
        print_r($arraylength);
       
        $foodPrice["Pizza"]=200;
        echo "<br><br>";
        print_r($foodPrice);
    ?>
</body>
</html>