<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Method Overloading</h1>
    <?php

        class Calculator{

            public function __call($fname,$args1){
                if($fname=='add'){
                    $a=$args1[0]+$args1[1];
                    echo "add:$a <br>";
                }
                if($fname=='sub'){
                    $a=$args1[0]-$args1[1];
                    echo "sub:$a <br>";
                }
                if($fname=='mul'){
                    $a=$args1[0]*$args1[1];
                    echo "mul:$a <br>";
                }
            }
        }

        $cal=new Calculator();
        $cal->add(10,20);
        $cal->sub(10,20);
        $cal->mul(10,20);
    ?>
</body>
</html>