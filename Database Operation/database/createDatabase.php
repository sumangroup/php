<?php
if(isset($_POST)){
    $hostname="localhost";
    $username="root";
    $password="";

    $conn=new mysqli($hostname,$username,$password);
    if($conn->connect_error){
        die("connection failed:".$conn->connect_error);
    }

    $query="create database clg";
    if($conn->query($query)==TRUE){
        echo "database created successfully";
    }
    else{
        echo "error creating database: ".$conn->error;
    }
    $conn->close();
}
   

?>