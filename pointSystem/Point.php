<?php
	/**
 * 
 * Class Point ...
 * @author Tran Ngoc Cuong
 *
 */
	class Point{
		//各フィールド
		protected  $id,$user_id,$value,$created_time,$updated_time;
		//主なメソッド
	 	function __construct(){
		}
		public function getPoint(){
			return $this->value;
		}
		public function setPoint($point){
			$this->value = $point;
		}
	}
?>