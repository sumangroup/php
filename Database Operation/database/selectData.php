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

    $query="select id,firstname,lastname,email from staff";
    $result=$conn->query($query);

    if($result->num_rows>0){
        while($row=$result->fetch_assoc()){
            echo "id: ".$row["id"]." Name: ".$row["firstname"]." ".$row["lastname"]." email: ".$row["email"]."<br>";
        }
    }
    else{
        echo "0 result";
    }

    $conn->close();
}
   

?>