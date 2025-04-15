<?php
    require_once 'login.php';

    $conn=new mysqli($hn,$db,$un,$pw);

    if($conn->connect_error){
        die($conn->connect_error);
    }
   $query="insert into college.student(rollno,name,percent) values('CO104','Raju Mane',53.35)";
   $result=$conn->query($query);
   if(!$result){
    die("database access failed".$conn->connect_error);
   }
   else{
    echo "Query OK, One row inserted";
   }

    
   $conn->close();

?>