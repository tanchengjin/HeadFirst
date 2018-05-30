<?php 
//(创建者类)抽象工厂让子类实现此方法制造产品
abstract class PizzaStore{
	function orderPizza($className){
		$pizza=$this->createPizza($className);
		$pizza->prepare();
		$pizza->back();
		$pizza->cut();
		$pizza->box();
		return $pizza;
	}
	abstract function createPizza($className);
}


 ?>