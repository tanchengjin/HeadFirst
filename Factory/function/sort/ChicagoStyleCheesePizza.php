<?php 
namespace sort;
class NYStyleCheesePizza extends \Pizza{
	function __construct(){
		//芝加哥式深盘奶酪披萨
		$this->name='Chicago style deep Dish Cheese Pizza<br>';
		//厚饼面团
		$this->dough='Extra Thick Crust Dough<br>';
		//番茄酱作为酱料类型
		$this->sauce='Plum Tomato Sauce<br>';
		//马苏里拉奶酪丝作为佐料
		$this->topping[]='Shredded Mozzarella Cheese<br>';
	}
	//切割形状
	function cut(){
		echo 'cutting the pizza into square slices<br>';
	}
}


 ?>