<?php 
namespace condiment;
use CondimentDecorator;
//奶油调料
class Whip extends CondimentDecorator{
	private $beverage;
	public function __construct(\Beverage $beverage){
		$this->beverage=$beverage;
	}
	public function getDescription(){
		return $this->beverage->getDescription().'Whip';
	}
	public function cost(){
		return 0.10+$this->beverage->cost();
	}
}

 ?>