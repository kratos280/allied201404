<?php
/**
 * 
 * Class Member ...
 * @author Tran Ngoc Cuong
 *
 */
	class Member{
		//各フィールド
		protected  $_name,$_mail,$_facebookId,$_facebookSdk;
		//メソッド
	 	function __construct($name,$mail,$facebookId,$facebookSdk){
			$this->_name = $name;
			$this->_mail = $mail;
			$this->_facebookId = $facebookId;
			$this->_facebookSdk = $facebookSdk;
		}
		public function getName(){
			return $this->_name;
		}
		public function getMail(){
			return $this->_mail;
		}
		public function getFacebookId(){
			return $this->_facebookId;
		}
		public function getFacebookSdk(){
			return $this->_facebookSdk;
		}
		public function fillByFacebookAPI(){
			
		}
	}
?>