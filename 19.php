<?php
$arr=["monday","tuesday","wednesday","thursday","friday","saturday","sunday"];
foreach($arr as $dayOfWeek){
    if($dayOfWeek=="tuesday"){
        echo "<pre>";
        echo "<i>".$dayOfWeek."</i>";
        echo "<pre>";
    }
    else {
        echo "<pre>";
        echo $dayOfWeek;
        echo "<pre>";
    }
}