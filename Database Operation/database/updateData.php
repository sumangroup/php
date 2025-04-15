<?php
if(isset($_POST)){
    $hostname="localhost";
    $username="root";
    $password="";
    $dbname="clg";
    $conn=new mysqli($hostname,$username,$password,$dbname);
    if($conn->connect_error){
        die("connection failed:".$conn->connect_error);
    }

    $query="update staff set lastname='technology' where id=5";



    if($conn->query($query)==TRUE){
        echo "record update successfully";
    }
    else{
        echo "error update : ".$conn->error;
    }
    $conn->close();
}
   

?>