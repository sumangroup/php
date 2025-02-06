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
        function add(){
            $a=10;
            $b=10;
            $c=$a+$b;
            echo "$c<br>";
        }
        add();
        echo "hello dipti<br>";
        echo "hello pranjal<br>";
        echo "hello anshika<br>";
        echo "hello riya<br>";
        add();
        add();
        add();
    ?>
</body>
</html>