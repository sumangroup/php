<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $username=$_POST["username"];
    $id=$_POST["id"];

    if(isset($username)){
        echo "<p>username: ".$username."</p>";
        echo "<p>id: ".$id."</p><br>";
    }


}

?>