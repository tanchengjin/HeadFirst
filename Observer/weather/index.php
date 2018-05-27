<?php 
use weatherdata\WeatherData;
use display\CurrentConditionDisplay;
use display\HeatIndex;
spl_autoload_register(function($class){
	$class=str_replace('\\','/',$class);
	include $class.'.php';
});
class index{
	public function main(){
		$weatherData=new WeatherData();
		//创建三个布告板,将weatherData对象给他们
		$currentDisplay=new CurrentConditionDisplay($weatherData);
		$heatindex=new HeatIndex($weatherData);
		// $statisticsDisplay=new StatisticsDisplay($weatherData);
		// $forecastDisplay=new ForecastDisplay($weatherData);
		//模拟气象测量
		$weatherData->setMeasurements(80,65,30.4);
		$weatherData->setMeasurements(83,70,29.2);
		$weatherData->setMeasurements(78,90,29.2);
	}
}
$index=new index();
$index->main();

 ?>