<?php 
use beverage\Espresso;
use beverage\DarkRoast;
use condiment\Mocha;
use condiment\Whip;
spl_autoload_register(function($class){
	$class=str_replace('\\','/',$class);
	include $class.'.php';
});
class index{
	static function main(){
		//订一杯饮料不加入任何调料
		$beverage=new Espresso();
		echo $beverage->getDescription().'$'.$beverage->cost().'<br>';
		//darkroast饮料
		$beverage2=new DarkRoast();
		// //加入调料(双倍摩卡)
		$beverage2=new Mocha($beverage2);
		$beverage2=new Mocha($beverage2);
		$beverage2=new Whip($beverage2);
		echo $beverage2->getDescription().' $ '.$beverage2->cost();
	}
}
$index=new index();
$index::main();


 ?>