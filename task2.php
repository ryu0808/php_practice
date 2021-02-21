<?php

$name = "髙藤";

if ($name == "髙藤") {
    echo "私は髙藤です";
} else {
    echo "髙藤ではありません";
}

echo"\n";
echo"\n";

$total = 0;

for($i = 1; $i <= 10000; $i++) {
    $total += $i;
}
echo $total;

echo"\n";
echo"\n";

$fruits = ["peach", "orange", "melon", "strawberry", "pear"];
foreach($fruits as $fruit){
    echo $fruit;
    echo"\n";
}

echo"\n";

/* for文の始めの値を定義する */
$start = 1;
/* for文の終わりの値を定義する */
$end = 100;

for($i = $start; $i <= $end; $i++){

  // 5で割り切れたら{}内を実行する
  if($i % 5 == 0){
    echo $i;
    echo"\n";
  }
}