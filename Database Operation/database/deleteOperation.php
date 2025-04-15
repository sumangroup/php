<?php
    require_once 'login.php';

    $conn=new mysqli($hn,$db,$un,$pw);

    if($conn->connect_error){
        die($conn->connect_error);
    }
   $query="delete from college.student where rollno='CO104'";
   $result=$conn->query($query);
   if(!$result){
    die("database access failed".$conn->connect_error);
   }
   else{
    echo "Query OK, delete row";
   }

    
   $conn->close();

?>