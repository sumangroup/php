<?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $cricket=$_POST["cricket"];
        $football=$_POST["football"];
        $basketball=$_POST["basketball"];

        if(isset($cricket)){
            echo "<p>cricket: ".$cricket."</p><br>";
        }
        
        if(isset($football)){
            echo "<p>football: ".$football."</p><br>";
        }

        if(isset($basketball)){
            echo "<p>basketball: ".$basketball."</p><br>";
        }
        

       
    }
?>