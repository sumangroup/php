<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>String function</h1>
    <?php
        $s1="he anshika anshika ";
        echo "$s1<br>";
        $length=strlen($s1);
        echo "$length<br>";

        $toupper=strtoupper($s1);
        echo "$toupper<br>";

        $tolower=strtolower($s1);
        echo "$tolower<br>";

        $reverse=strrev($s1);
        echo "$reverse<br>";

        $wordcount=str_word_count($s1);
        echo "$wordcount<br>";

        $replace=str_replace("Anshika","Dipti",$s1);
        echo "$replace<br>";

        echo "$s1<br>";
        $in=strpos($replace,"Dipti");
        echo "$in<br>";

        $ucw=ucwords($s1);
        echo "$ucw<br>";

        echo str_repeat($s1,80);
        echo "<br>";
        $s2="Hello Riya";
        $s3="Hello Pranjal";
        $s4="Hello riya";
        $compare=strcmp($s2,$s4);
        echo "$compare<br>";

        $s5="If you born poor it's not your mistake";
        echo "$s5<br>";

        $sub=substr($s5,4);
        echo "$sub<br>";

        $sub=substr($s5,4,10);
        echo "$sub<br>";

        $split=str_split("hello raju");
        print_r($split);

        echo "<br>";
        $shuffle=str_shuffle($s1);
        echo "$shuffle<br>";

        $s3="  hello raju  ";
        echo "$s3",strlen($s3),"<br>";

        $trm=trim($s3);
        echo "$trm",strlen($trm),"<br>";

        $ltrm=ltrim($s3);
        echo "$ltrm",strlen($ltrm),"<br>";

        $rtrm=rtrim($s3);
        echo "$rtrm",strlen($rtrm),"<br>";
    ?>
</body>
</html>