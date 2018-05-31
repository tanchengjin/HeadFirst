<?php 
class System implements Subject{
	public $message;
	public static $observers=array();
	//添加观察者
	public function attach(Observer $observer){
		self::$observers[]=$observer;
	}
	//移除观察者
	public function detach(Observer $observer){
		unset(self::$observers[$observer]);
	}
	//通知每一个观察者
	public function notify(){
		foreach (self::$observers as $observer) {
			$observer->update($this->message);
		}
	}
	public function getSystemInfo(){
		$this->notify();
	}
	public function setSystemInfo($message){
		$this->message=$message;
		$this->getSystemInfo();
	}
}


 ?>