<?php
    require_once 'login.php';

    $conn=new mysqli($hn,$db,$un,$pw);

    if($conn->connect_error){
        die($conn->connect_error);
    }
   $query="select * from college.student";
   $result=$conn->query($query);
   $count_rows=$result->num_rows;

    for($j=0;$j<$count_rows;++$j){
        $result->data_seek($j);
        $row=$result->fetch_array(MYSQLI_NUM);
        
        echo 'Roll no: '.$row[0].'<br>';
        echo 'Name: '.$row[1].'<br>';
        echo 'percent: '.$row[2].'<br>';
        echo "<br><br>";
    }

   $result->close();
   $conn->close();

?>