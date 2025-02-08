<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>php constructor</h1>
    <?php
        class Myclass{

            function __construct(){
                echo "wlcome to php constructor";
            }
        }   

        $obj1=new Myclass();
    ?>
</body>
</html>