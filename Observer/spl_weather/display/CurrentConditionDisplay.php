<?php 
namespace display;
use weatherdata\WeatherData;
class CurrentConditionDisplay implements \splObserver{
	//温度
	private $temperature;
	//湿度
	private $humidity;
	//保存对象引用
	protected $weatherdata;
	function __construct(WeatherData $weatherdata){
		$this->weatherdata=$weatherdata;
		$weatherdata->attach($this);
	}
	//更新方法
	public function update($temperature,$humidity=null){
		$this->temperature=$temperature;
		$this->humidity=$humidity;
		$this->display();
	}
	public function display(){
		echo "current condition : $this->temperature F degrees and $this->humidity %humidity<br>";
	}
}


 ?>