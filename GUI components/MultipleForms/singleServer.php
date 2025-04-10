<?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        if(!empty($_POST["email-submit"])){
            $email=$_POST["email"];
            echo "<p>email:  ".$email."</p>";
        }
        else if(!empty($_POST["mobile-submit"])){
            $mobile=$_POST["mobile"];
            echo "<p>mobile:  ".$mobile."</p>";
        }
    }

?>