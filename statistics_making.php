<?php
// echo "最大:".max(90, 35, 40, 40, 30)."\t";
// echo "最小:".min(90, 35, 40, 40, 30)."\n";

$ar = array(90, 35, 40, 40, 30);
$av = array_sum($ar) / count($ar);


echo "与えられた数字の個数:".count($ar)."\n";
echo "最大:".max($ar)."\t";
echo "最小:".min($ar)."\t";
echo "平均:".number_format( $av , 1 , "." , "" )."\t";
echo "標準偏差:".stats_standard_deviation( $ar, $sample = false )."\n";

// #1,モジュール追加
// sudo yum -y install php-devel
// sudo yum -y install gcc
// sudo pecl install stats
// #2,php.iniの設定変更
// vim /etc/php.ini
// extension=stats.soを追記



// 1,関数を調べる
// 個数を出す、
// 最大を出す、
// 最小を出す、
// 平均を出す、(小数第一まで)
// 標準偏差を出す、(小数第一まで)

// 2,調べた結果
// phpマニュアル
// max http://php.net/manual/ja/function.max.php
// echo max(2, 3, 1, 6, 7);
// echo min(2, 3, 1, 6, 7);

// 参考
// http://www.n-shinchan.com/?pi=2&ci=10

// 参考
// string number_format ( float $number , int $decimals = 0 , string $dec_point = "." , string $thousands_sep = "," )




// N個(Nは1より大きい奇数)の数字が与えられたとき、
// それらの数字の個数、最大、最小、平均、標準偏差を出力せよ。
// ただし、平均値と標準偏差は、小数点第一位まで出力せよ。
// [実行結果例]
// // 90 35 40 40 30
// 最大: 90 最小: 30 平均: 47.0 標準偏差: 21.8
