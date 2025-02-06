<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> add echo</h1>
    <?php
        echo "add with echo <br>";
        // function declare
        function add($a,$b){
          
            $c=$a+$b;
            echo "$c<br>";
        }
        add(10,20); // function call
        add(45,56);
        add(-20,30);
        add(10.23,56.23);
    ?>
</body>
</html>