<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Numeric strings </h1>
    <?php
   $a=10;
   $b="10";
   $c=10;
   $d=20;
   $e="10";
   $f="20";

   $res=$a!==$c;
   echo "$res<br>";

   $res=$b!==$e;
   echo "$res<br>";

   $res=$a!==$d;
   echo "$res<br>";
   
   $res=$a!==$b;
   echo "$res<br>";

   $res=$e!==$f;
   echo "$res<br>";

    ?>
</body>
</html>