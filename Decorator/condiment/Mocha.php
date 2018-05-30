<?php 
namespace condiment;
//调料
class Mocha extends \CondimentDecorator{
	//记录被装饰者(饮料)
	private $beverage;
	function __construct(\Beverage $beverage){
		var_dump($beverage->cost());
		$this->beverage=$beverage;
	}
	//获取被装饰者(饮料)的描述
	public function getDescription(){
		return $this->beverage->getDescription().' Mocha';
	}
	public function cost(){
		return 0.20+$this->beverage->cost();
	}
}


 ?>