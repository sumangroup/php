<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Arrys</h1>
<?php
    $array1=array(
        "name"=>"Raju Mane",
        "age"=>100,
        "salary"=>15000
    );

    $array2=[
        "name"=>"Raju Mane",
        "age"=>100,
        "salary"=>15000
    ];
    var_dump($array1);
    echo "<br>";
    var_dump($array2);

    echo "<br>";
    echo "<br>";
    $array3=array(
        1=>"a",
        "1"=>"b",
        0.1=>"c",
        True=>"d",
        FALSE=>"e",
        
    );
    var_dump($array3);

    echo "<br>";
    echo "<br>";

    $array4=[
        "name"=>"Raju Mane",
        "age"=>32,
        100=>100,
        -100=>-100
    ];
    var_dump($array4);

    echo "<br>";
    echo "<br>";
    $array5=[
        "Raju Mane",
        32,
        100,
        -100
    ];
    var_dump($array5);

    echo "<br>";
    echo "<br>";
    $array6=[
        "Raju Mane",
        32,
        401=>100,
        -100,
        "56"
    ];
    var_dump($array6);

    echo "<br>";
    echo "<br>";
    $array7=[
        "Raju Mane",
        32,
        "raju"=>100,
        -100,
        "56"
    ];
    var_dump($array7);

    echo "<br>";
    echo "<br>";
    $array8 = array(
        1    => 'a',
        '1'  => 'b', // the value "a" will be overwritten by "b"
        1.5  => 'c', // the value "b" will be overwritten by "c"
        -1 => 'd',
        '01'  => 'e', // as this is not an integer string it will NOT override the key for 1
        '1.5' => 'f', // as this is not an integer string it will NOT override the key for 1
        true => 'g', // the value "c" will be overwritten by "g"
        false => 'h',
        '' => 'i',
        null => 'j', // the value "i" will be overwritten by "j"
        'k', // value "k" is assigned the key 2. This is because the largest integer key before that was 1
        2 => 'l', // the value "k" will be overwritten by "l"
    );

var_dump($array8);
?>
</body>
</html>

