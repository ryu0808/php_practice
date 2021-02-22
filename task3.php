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

echo"\n";

//strip_tags
$string = '<a href="https://be.tech-boost.jp/lp_pages/001?from=google-listing-name&gclid=Cj0KCQiApsiBBhCKARIsAN8o_4jBKl2GNaCBtD42lilD0ksZnCvCZ9sTOdYdT1yWj59xC_jM1E9n-bwaAq5TEALw_wcB#">tech boost</a>';
$result = strip_tags($string);
echo $result;

echo"\n";

//array_push
$arr  = array(1,3,"a","b");
array_push($arr,"C","D");
print_r($arr);

echo"\n";

//array_merge
$merge = array("snack"=>"500", "soda"=>"200", "fruit 1"=>"1000");
$merge_add = array("soda"=>"100", "fruit 2"=>"3000");
$result = array_merge($merge, $merge_add);
print_r($result);

echo"\n";

//time
$now = time();
print $now;

echo"\n";

//mktime
$timestamp = mktime(10, 5, 5, 2, 2021);
print $timestamp;

echo"\n";

//date
$timestamp = time() + (60 * 60 * 24) * 7;
$next_week = date('Y年m月d日H時i分s秒', $timestamp);
print $next_week;