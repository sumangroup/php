<?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $language=$_POST["language"];

        if(isset($language)){
            echo "<p>Language: ".$language."</p>";
        }
    }

?>