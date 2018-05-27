<?php 
use weatherdata\WeatherData;
use display\CurrentConditionDisplay;
spl_autoload_register(function($class){
	include $class.'.php';
});
class index{
	static function main(){
		//实例化
		$weather=new WeatherData();
		$notify=new CurrentConditionDisplay($weather);
		$weather->setMeasurements(25,31,31.26);
		$weather->setmeasurements(33,20,33.26);
	}
}
$index=new index();
$index::main();


 ?>