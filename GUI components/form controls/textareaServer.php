<?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){

        $address=$_POST["address"];

        if(isset($address)){
            echo "<p>address".$address."</p>";
        }
    }
?>
