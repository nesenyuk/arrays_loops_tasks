<?php
$arr=[2, 5, 9, 15, 0, 4];
foreach($arr as $key=>$result){
    if($result > 3 and $result < 10){
        echo $result;
    }
}
