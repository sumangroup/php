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

    $query="delete from staff where id=5";



    if($conn->query($query)==TRUE){
        echo "record delete successfully";
    }
    else{
        echo "error delete : ".$conn->error;
    }
    $conn->close();
}
   

?>