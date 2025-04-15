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


    $query="insert into staff(firstname,lastname,email)
    values('Anshika ','Barai','a.barai@gmail.com')
    ";

    if($conn->query($query)==TRUE){
        echo "new record created successfully";
    }
    else{
    echo "error creating table: ".$query."<br>".$conn->error;
    }

    $conn->close();
}
   

?>