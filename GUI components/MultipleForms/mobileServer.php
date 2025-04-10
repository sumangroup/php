<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $mobile=$_POST["mobile"];

    if(isset($mobile)){
        echo "<p>mobile:  ".$mobile."</p>";
    }
}

?>