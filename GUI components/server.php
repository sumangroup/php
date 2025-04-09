<?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $username=$_POST["username"];
        $email=$_POST["email"];
        
        echo "<h2>Post Data Received</h2><br>";
        echo "<p>username:  ".htmlspecialchars($username)."</p>";
        echo "<p>email:  ".htmlspecialchars($email)."</p>";
    }
?>