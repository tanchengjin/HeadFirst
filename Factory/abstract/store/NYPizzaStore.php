<?php 
namespace store;
class NYPizzaStore extends \PizzaStore{
	public function createPizza($class){
		$pizza=null;
		$ingredientFactory=new \NYPizzaIngredientFactory;
		//判断披萨种类
		if(strtolower($class) == 'cheese'){
			//纽约披萨奶酪披萨
			$pizza=new \ingredient\CheesePizza($ingredientFactory);
		}
		return $pizza;
	}
}

 ?>