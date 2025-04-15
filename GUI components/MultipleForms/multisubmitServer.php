<?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $num1=(int) $_POST["number1"];
        $num2=(int) $_POST["number2"];

        if(isset($_POST["btnAdd"])){
            echo "<p>Addition is ".$num1+$num2."</p>";
        }
        else if(isset($_POST["btnSub"])){
            echo "<p>Subtraction is ".$num1-$num2."</p>";
        }
        else if(isset($_POST["btnMul"])){
            echo "<p>Multiple is ".$num1*$num2."</p>";
        }
        else if(isset($_POST["btndiv"])){
            echo "<p>Division is ".$num1/$num2."</p>";
        }
    }

?>