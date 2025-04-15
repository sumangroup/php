<?php
    require_once 'login.php';

    $conn=new mysqli($hn,$db,$un,$pw);

    if($conn->connect_error){
        die($conn->connect_error);
    }
   $query="update college.student set percent=70.00 where rollno='CO104'";
   $result=$conn->query($query);
   if(!$result){
    die("database access failed".$conn->connect_error);
   }
   else{
    echo "Query OK, update row";
   }

    
   $conn->close();

?>