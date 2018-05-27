<?php 
namespace display;
use Observer;
use DisplayElement;
use weatherdata\WeatherData;
use Subject;
class CurrentConditionDisplay implements Observer,DisplayElement{
	private $temperature;
	private $humidity;
	//保存subject的引用
	private $weatherData;
	public function __construct(Subject $weatherdata){
		$this->weatherData=$weatherdata;
		$this->weatherData->registerObserver($this);
	}
	//更新值
	function update(float $temperature,float $humidity,float $pressure){
		$this->temperature=$temperature;
		$this->humidity=$humidity;
		$this->display();
	}
	public function display(){
		echo "current condition : $this->temperature F degrees and $this->humidity %humidity<br>";
	}
}

 ?>