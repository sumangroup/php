<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Reverse No</h1>
    <?php
       $num=123;
       $res=0;
       $num1=$num;
       while($num!=0){
         $r=$num%10;
         $res=$res*10+$r;
         $num=intdiv($num,10);
       }
       if($res==$num1){
        echo "The $num1 is Palindrome<br>";
       }
       else{
        echo "The $num1 is not Palindrome<br>";
       }
      
    ?>
</body>
</html>