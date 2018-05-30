<?php 
//原料工厂(用于生产每个需要生产的原料)
class NYPizzaIngredientFactory implements PizzaIngredientFactory{
	public function createDough(){
		return new \ingredient\ThinCrustDough();
	}
	public function createSauce(){
		return new \ingredient\MarinaraCheese();
	}
	public function createCheese(){
		return new \ingredient\ReggianoCheese();
	}
	public function createVeggies(){
		$veggies[]=array(new Garlic,new Onion,new Mushroom,new RedPepper);
		return $veggies;
	}
	public function createPepperoni(){
		return new SlicedPepperoni();
	}
	public function createClam(){
		return new FreshClams();
	}
}

 ?>