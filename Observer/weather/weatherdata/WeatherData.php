<?php 
namespace weatherdata;
use Subject;
use Observer;
//实现主题
class WeatherData implements Subject{
	//存储观察者
	private static $observers=array();
	//温度
	private $temperature;
	//湿度
	private $humidity;
	//气压
	private $pressure;
	//注册观察者
	function registerObserver(Observer $observer){
		self::$observers[]=$observer;
	}
	//移除观察者
	function removeObserver(Observer $observer){
		unset(self::$observers[$observer]);
	}
	//通知每个观察者(更新每个观察者的值)
	function notifyObserver(){
		foreach (self::$observers as $observer) {
			$observer->update($this->temperature,$this->humidity,$this->pressure);
		}
	}
	//当气象站更新观测值时通知观察者
	function measurementsChanged(){
		$this->notifyObserver();
	}
	//气象站设置值
	function setMeasurements(float $temperature,float $humidity,float $pressure){
		$this->temperature=$temperature;
		$this->humidity=$humidity;
		$this->pressure=$pressure;
		$this->measurementsChanged();
	}
}

 ?>