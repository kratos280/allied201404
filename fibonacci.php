<?php

/**
 * フィボナッチ数列 ...
 * @var $max 最上価値
 * @var $fx  F(n)
 * @var $fy  F(n+1)
 * @var $fz  F(n+2)
 * @var $temp  仮変数
 * 
 */
	$max = 2000;  // 最上価値
	echo "Fibonacci sequence From 0 to max value (".$max.") : <br />";
	$fx = 0;  // F(0)
	$fy = 1;  // F(1)	 
	echo $fx."  ";
	echo $fy."  ";
	$temp = 0;                  // 仮変数の最初価値
	while($temp <= $max){       // 値が最上の価値以下のチェック
	    $fz = $fx + $fy;
	    echo $fz."  ";
	    $fx = $fy;              // 次の数字 (transitivity)
	    $fy = $fz;              // 次の数字 (transitivity)
	    $temp = $fx + $fy;      // 仮変数の更新
	}
?>
