<?php

function sum($max) {
     return $max * 2;
}
echo sum(5);

echo"\n";

function a_b($a , $b) {
    return $a + $b;
}
echo a_b(9,5);

echo"\n";

function abc($arr) {
    $result = 1;
    foreach($arr as $a){
        $result *= $a;
    }
    return $result;
}
echo abc(array(1,3,5,7,9));

echo"\n";

function max_array($arr){
    $max_number = $arr[0];
    foreach($arr as $a){
        if($a > $max_number) {
            $max_number = $a;
        }
    }
    return $max_number;
}
echo max_array(array(3,4,9,2,1));
