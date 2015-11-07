<?php

$ar = array(90, 35, 40, 40, 30);
$av = array_sum($ar) / count($ar);
$sd = stats_standard_deviation( $ar );

echo "与えられた数字の個数:".count($ar)."\n";
echo "最大:".max($ar)."\t";
echo "最小:".min($ar)."\t";
echo "平均:".number_format( $av , 1 , "." , "" )."\n";
echo "標準偏差:".round($sd, 1)."\n";
