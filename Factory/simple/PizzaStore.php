<?php 
//披萨商店
abstract class PizzaStore{
	function orderPizza($type){
		$pizza= $this->createPizza($type);
		$pizza->prepare();
		$pizza->back();
		$pizza->cut();
		$pizza->box();
		return $pizza;
	}
	abstract function createPizza($type);
}


 ?>