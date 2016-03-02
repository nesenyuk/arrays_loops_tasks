<?php
$a=[4, 2, 5, 19, 13, 0, 10];
foreach($a as $key=>$e){
    if($e==2 or $e==3 or $e==4){
        echo "Est!";
        break;
    }
    else{
        echo"Net!";
        break;
    }

}
