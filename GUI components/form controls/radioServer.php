<?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $gender=$_POST["gender"];

        if(isset($gender)){
            echo "<p>Gender: ".$gender."</p>";
        }
    }

?>