
<?php
      $num=123;
      $res=0;
      $num1=$num;
      $r=1;
      while($num!=0){
        $r=$num%10;
        $res=$res*10+$r;
        $num=intdiv($num,10);
      }
      echo "The reverse of $num1 is $res";
?>