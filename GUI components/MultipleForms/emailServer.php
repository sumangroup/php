<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $email=$_POST["email"];

    if(isset($email)){
        echo "<p>email:  ".$email."</p>";
    }
}

?>