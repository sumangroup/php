<?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){

        $mobileno=$_POST["mobileno"];

        if(isset($mobileno)){
            echo "<p>mobileno: ".$mobileno."</p>";
        }
        else{
            echo "<p>Variable is not define</p>";
        }
    }
?>