<?php
$arr=["monday","tuesday","wednesday","thursday","friday","saturday","sunday"];
foreach($arr as $dayOfWeek){
    if($dayOfWeek=="saturday"or $dayOfWeek=="sunday"){
        echo "<pre>";
        echo "<b>".$dayOfWeek."</b>";
        echo "<pre>";
    }
    else {
        echo "<pre>";
        echo $dayOfWeek;
        echo "<pre>";
    }
}