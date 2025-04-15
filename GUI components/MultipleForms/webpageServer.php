<?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){

        if(empty($_POST["name"])){
            echo "Name can't be blank <br>";
        }
        else if(!is_numeric($_POST["mobileNo"])){
            echo "Enter the valid mobile no<br>";
        }
        $pattern='/\b[\w.-]+@[\w.-]+\.[A-Za-z]{2,6}\b/';

        if(!preg_match($pattern,$_POST['emailid'])){
            echo "Enter the valid email id<br>";
        }
        else{
            echo "name: ".$_POST["name"]."<br>";
            echo "mobileNo: ".$_POST["mobileNo"]."<br>";
            echo "emailid: ".$_POST["emailid"]."<br>";
        }
    }
?>