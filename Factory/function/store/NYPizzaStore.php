<?php 
namespace store;
class NYPizzaStore extends \PizzaStore{
	public function createPizza($class){
		//判断披萨种类
		if(strtolower($class) == 'cheese'){
			//纽约披萨奶酪披萨
			return new \sort\NYStyleCheesePizza();
		}
	}
}

 ?>