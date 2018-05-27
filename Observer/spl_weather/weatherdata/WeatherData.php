<?php 
namespace weatherdata;
class WeatherData implements \SplSubject{
	private static $observers=array();
	//温度
	public $temperature;
	//湿度
	public $humidity;
	//气压
	public $pressure;
	private $data;
	//添加观察者
	public function attach(\splObserver $observer){
		self::$observers[]=$observer;
	}
	//移除观察者
	function detach(\splObserver $observer){
		unset(self::$observers[$observer]);
	}
	//通知每个观察者
	function notify(){
		foreach (self::$observers as $observer) {
			$observer->update($this->temperature,$this->humidity);
		}
	}
	//调用方法通知观察者
	function MeasurementsChanged(){
		$this->notify();
	}
	//设置气象站测量值
	function setMeasurements($temperature,$humidity,$pressure){
		$this->temperature=$temperature;
		$this->humidity=$humidity;
		$this->pressure=$pressure;
		$this->MeasurementsChanged();
	}
}


 ?>