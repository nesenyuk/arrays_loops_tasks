<?php
$massive=[1, 2, 3, 4, 5, 6, 7, 8, 9];
foreach($massive as $str) {
    $str = implode('-',$massive);
    echo $str;break;

}