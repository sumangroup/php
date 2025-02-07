<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>var_dump, print_r and echo</h1>
    <?php
    /*
    Displays detailed information about a variable, including its type and value.
    */
        echo "var_dump()<br>";
        $var=array(
            "name"=>"Raju Ramchandra Mane",
            "age"=>32,
            "salary"=>35000,
            "phone"=>9833395327,
        );
        var_dump($var);
        echo "<br><br>";

        echo "print_r()<br>";
        $var=array(
            "name"=>"Raju Ramchandra Mane",
            "age"=>32,
            "salary"=>35000,
            "phone"=>9833395327,
        );
        print_r($var);
        echo "<br><br>";

        echo "echo()<br>";
        $var="hello php class";
        echo($var);
        echo "<br><br>";
    ?>

</body>
</html>