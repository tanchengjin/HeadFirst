<?php 
namespace sort;
class NYStyleCheesePizza extends \Pizza{
	function __construct(){
		//纽约式酱汁和奶酪披萨
		$this->name='NY Style Sauce and Cheese Pizza<br>';
		//面团
		$this->dough='Thin Crust Dough<br>';
		//酱料类型
		$this->sauce='Marinara Sauce<br>';
		//碎雷奇亚干酪奶酪作为佐料
		$this->topping[]='Grated Reggiano Cheese<br>';
	}
}


 ?>