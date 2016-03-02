<?php
$arr=["january","february","march","april","may","june","july","august","september","october","november","december"];

foreach($arr as $value){
    if($value=="february"){
        echo "<b>".$value."</b>";
    }
    else{
        echo "<pre>";
        echo $value;
        echo "<pre>";
    }
}
