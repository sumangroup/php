
    <?php
        $a=10;
        $b=20;
        $c=10;
        $d="10";
        $e=30;

        echo '$a: ',"$a ",'$b: ',"$b ",'$c: ',"$c ",'$d: ',"$d ",'$e: ',"$e ","\n";
        echo 'and \n';

        $res=$a!=$b;
        echo '$a!=$b: ',"$res","\n";

        $res=$a>$c;
        echo '$a>$c: ',"$res","\n";

        $res=$a==$c and $a>$c;
        echo '$a==$c and $a>$c: ',"$res","\n";

        $res=$a==$e and $b>$e;
        echo '$a==$e and $b>$e: ',"$res","\n";

        $res=$a==$c and $b>$a;
        echo '$a==$c and $b>$a: ',"$res","\n";

        $res=$a>$c and $a!=$b;
        echo '$a>$c and $a!=$b: ',"$res","\n";

    ?>
