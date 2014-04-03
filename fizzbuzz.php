<?php
/**
 * fizzbuzz 問題
 * ループだけを使用する。
 * Enter description here ...
 * @var $loopMax     ループ変数の最上
 * @var $countFrom   2回目の出力の当初
 * @var $peg　　　　　　　起点変数　
 */

/**
 * 
 * アルゴリズムのポイントは：
 * 
 * 3と5の両方で割りきれる値は　　15*i という形である。
 * 3で割りきれるし、5で割りきれない値は　　15*i (+/-) 3 または 　15*i (+/-) 6　という形である。
 * 5で割りきれるし、3で割りきれない値は　　15*i (+/-) 5 という形である。
 */

	$loopMax = 100/15 - 1;      // ループ変数の最上
	$countFrom = 0;      // 2回目の出力の当初の最初価値
	
	echo "fizzbuzz from 1 to 100 : <br /><br />";
	
	/* 一回目出力*/
	for($i=0;$i<$loopMax;$i++){
		$peg = $i*15;
		echo ($peg+1).'  ';
		echo ($peg+2).'  ';
		echo ($peg+3).'(fizz)  ';
		echo ($peg+4).'  ';
		echo ($peg+5).'(buzz)  ';
		echo ($peg+6).'(fizz)  ';
		echo ($peg+7).'  ';
		echo ($peg+8).'  ';
		echo ($peg+9).'(fizz)  ';
		echo ($peg+10).'(buzz)  ';
		echo ($peg+11).'  ';
		echo ($peg+12).'(fizz)  ';
		echo ($peg+13).'  ';
		echo ($peg+14).'  ';
		echo ($peg+15).'(fizzbuzz)  ';
		$countFrom = $peg+15;    // 2回目の出力の当初の価値更新
	}
	
	
	/**
	 * 2回目出力
	 * $countFrom から　100 まで　出力
	 * 2回目出力で3で割りきれる値と5で割りきれる値だけに気をつけます。
	 * 
	 */
	{
		echo ($countFrom+1).'  ';
		echo ($countFrom+2).'  ';
		echo ($countFrom+3).'(fizz)  ';
		echo ($countFrom+4).'  ';
		echo ($countFrom+5).'(buzz)  ';
		echo ($countFrom+6).'(fizz)  ';
		echo ($countFrom+7).'  ';
		echo ($countFrom+8).'  ';
		echo ($countFrom+9).'(fizz)  ';
		echo ($countFrom+10).'(buzz)  ';
	}
?>