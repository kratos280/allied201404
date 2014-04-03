<?php
/**
 * 
 * Class Transaction ...
 * @author Tran Ngoc Cuong
 * ショッピングの注目
 *
 */
	class OrderDetail{
		//各フィールド
		protected  $id;                   //注目の　id
		protected  $value;                //注目の　最後の小計
		protected  $user_id;　　　　　　　　　　   // ユーザ
		protected  $receive_point;　　　　　　 // この注目からもらったポイント
		protected  $time;　　　　　　　　　　　　　// 注目の日時
		protected  $used_point;　　　　　　　　// 付与されたポイントから利用されるポイント
		protected  $created_time;
		
		function __construct(){
		}
		
		// get set メソッド
			
		//主なメソッド
		
		/**
		 * 
		 * 注目の内容から、商品種類を分けて、オーダー一つずつOrderDetailテーブルのレコードを作る ...
		 * @param unknown_type $product_id　　　商品
		 * @param unknown_type $amount　　　　　　数
		 */
		public function add_order_detail($product_id,$amount){
			
		}
		
		/**
		 * 
		 * 注目の金額から、ユーザに 付与されるポイントを計算する...
		 * それで、Pointのテーブルに入れ込む。
		 * 
		 * @param unknown_type $transaction_value　　　注目の金額
		 * @param unknown_type $percent　　　　　　　　　一定の割合
		 */
		public function get_point_in($transaction_value,$percent){
			
			$this->receive_point = $transaction_value*$percent;     //フィールドの価値更新
			return $this->receive_point;
		}	
		
		/**
		 * 
		 * ユーザの付与されたポイントを使って、割引を受けること ...
		 * それで、注目の　最後の小計を計算
		 * 
		 * @param unknown_type $point　　：　使いたいポイント
		 */
		public function get_point_out($point){
			//ユーザの付与されたポイントの価値がチェック必要
			$this->used_point = $point;     //フィールドの価値更新
			$this->value = POINT::calcMoneyOfTransaction($this->id) - $point;//フィールドの価値更新 
		}
		
		/**
		 * 
		 * ユーザ買い物の活動の履歴
		 * ポイントの履歴(付与履歴と使用履歴)も当然に取れる。
		 * @param unknown_type $user_id
		 */
		public static function get_detail_by_user($user_id){
			
		}
	 	
		/**
		 * ユーザ買い物の活動の履歴　（一定期間で）
		 * どんな期間（月次とか）でも情報取れる。
		 * Enter description here ...
		 * @param unknown_type $user_id
		 * @param unknown_type $start_time
		 * @param unknown_type $stop_time
		 */
		public static function get_detail_by_time($user_id,$start_time,$stop_time){
			
		}
		
		/**
		 * 最後のメソッド
		 * Pointテーブルアップデートなど
		 * Enter description here ...
		 */
		public function save_transaction(){
			
		}
		
		
		
		
		
		
	}
?>