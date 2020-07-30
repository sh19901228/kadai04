<?php
// 課題1
// scoreという関数を定義し、$numberという数値の仮引数を与える
function score($number){
// 数値を2倍にすることを目的として、処理した結果を返す
    return $number * 2;
}
// 3という数値が入ったケースの結果を実行
echo score(3);
echo "\n";

// 課題2
// ｆという関数を定義し、$a,$bという2つの仮引数を持たせる
function f($a, $b){
// $aと$b、2つの数値を足すことを目的として、処理した結果を返す
    return $a + $b;
}
// $a = 3, $b = 4が入ったケースの結果を実行
echo f(3, 4);
echo "\n";

// 課題3
// tatalという関数を定義し、$arrという仮引数を持たせる
function tatal($arr){
// 配列arrayを$arrに渡す
    $arr = array(1,3,5,7,9);
// $resultは結果を保存する変数で、最初の結果は1となる
    $result = 1;
// $arrの中から1つずつ要素を取り出し、$aに代入していく
    foreach($arr as $a){
// $resultに$aを順番に掛けていくのを目的とし、処理した結果を返す
        $result *= $a;
    }
    return $result;
}
// 配列arrayの中の要素を全て掛けた結果を実行
echo tatal(array(1,3,5,7,9));
echo "\n";

// 課題4
function max_array($arr){
// とりあえず配列の最初の要素を一番大きい値とする $arr = array(32,~)
    $max_number = $arr[0];
// 配列$arrの中から1つずつ要素を取り出し、$aに代入していく中で、一番大きい数値が$max_numberとして返される
    foreach($arr as $a){
        if($max_number < $a){
            $max_number = $a;
        }
    }
        return $max_number;
}
echo max_array(array(32,2,99,301,85,666));
echo "\n";

// 課題5
// strip_tags:HTMLタグを取り除く
$a = '<a href ="techboost.com">techboost</a>';
$a = strip_tags($a);
echo $a;
echo "\n";

// array_push:1つ以上の要素を配列の最後に追加する
$fruits = ["orange", "apple"];
array_push($fruits, "banana");
print_r($fruits);
echo "\n";

// array_merge:1つまたは複数の配列を結合する
$a = [1, 2, 3];
$b = [4, 5, 6];
$c = [7, 8, 9, 10];
$d = array_merge($a, $b, $c);
print_r($d);
echo"\n";

// time,mktime:UNIXタイムスタンプを取得する
$time1 = time();
echo $time1;
echo "\n";
$time2 = mktime(0, 0, 0, 1, 1, 1970);
echo $time2;
echo "\n";

// date:日付や時刻を書式化する
echo date('Y/m/d');
echo "\n";
?>