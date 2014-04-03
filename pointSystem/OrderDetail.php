<?php
/**
 * 
 * Class OrderDetail ...
 * @author Tran Ngoc Cuong
 * 一つの商品当たりのオーダー
 * 一回買い物すると、様々なオーダーがある可能（様々な商品種類をカートに入れるということ）
 * 
 */
	class OrderDetail{
		//各フィールド
		protected  $id,$transaction_id,$product_id,$amount,$created_time;
		
		function __construct(){
		}
		
		// get set メソッド 
		
		//主なメソッド
		
		/** 
		 * 商品の一種類　小計 計算
		 */
		public function calcMoneyOfOrder(){
			//$product_id を元に
		}
		
		/** 
		 * ショッピング決済時にの小計 計算
		 * ご注目の小計
		 * 
		 */
		public static function calcMoneyOfTransaction($transaction_id){
			//$transaction_id を元に 
		}
	}
?>