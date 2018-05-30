<?php 
namespace ingredient;
class CheesePizza extends \Pizza{
	public $ingredientFactory;
	function __construct(\PizzaIngredientFactory $ingredientFactory){
		$this->ingredient=$ingredientFactory;
	}
	function prepare(){
		echo 'Prepareing'.$this->name;
		$this->dough=$this->ingredient->createDough();
		$this->sauce=$this->ingredient->createSauce();
		$this->cheese=$this->ingredient->createCheese();
	}
}


 ?>