<?php 
//实现原料接口
interface PizzaIngredientFactory{
	//定义原料实现方法(每一个原料都代表一个类)
	function createDough();
	function createSauce();
	function createCheese();
	function createVeggies();
	function createPepperoni();
	function createClam();
}


 ?>