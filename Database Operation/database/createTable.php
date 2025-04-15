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

    $query="create table staff(
            id int(6) unsigned auto_increment primary key,
            firstname varchar(30) not null,
            lastname varchar(30) not null,
            email varchar(50)
        )";



    if($conn->query($query)==TRUE){
        echo "table staff created successfully";
    }
    else{
        echo "error creating table: ".$conn->error;
    }
    $conn->close();
}
   

?>