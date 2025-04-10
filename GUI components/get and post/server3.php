<?php

    if($_SERVER["REQUEST_METHOD"]=="GET"){
        $username=$_GET["username"];
        $email=$_GET["email"];

        echo "<h2>Get Data Received</h2><br>";
        echo "<p>username: ".htmlspecialchars($username)."</p>";
        echo "<p>email: ".htmlspecialchars($email)."</p>";
    }
?>