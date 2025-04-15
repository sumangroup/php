<?php
    require_once 'login.php';

    $conn=new mysqli($hn,$db,$un,$pw);

    if($conn->connect_error){
        die($conn->connect_error);
    }
   $query="select * from college.student";
   $result=$conn->query($query);
   $rows=$result->num_rows;
   
   for($j=0;$j<$rows;$j++){
        $result->data_seek($j);
        echo 'Roll no: '.$result->fetch_assoc()['rollno'].'<br>';

        $result->data_seek($j);
        echo 'Name: '.$result->fetch_assoc()['name'].'<br>';

        $result->data_seek($j);
        echo 'percent: '.$result->fetch_assoc()['percent'].'<br>';

        echo "<br><br>";
   }


    
   $result->close();
   $conn->close();

?>