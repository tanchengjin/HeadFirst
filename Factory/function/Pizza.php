<?php 
//工厂用来生产产品
//可以生产制造的披萨都必须要继承Pizza超类
abstract class Pizza{
	//披萨的名称
	protected $name;
	//披萨的面团类型
	protected $dough;
	//披萨的酱料类型
	protected $sauce;
	//披萨的一套佐料
	protected static $toppings=array();
	//制作之前的准备工作
	function prepare(){
		echo 'Preparing'.$this->name.'<br>';
		echo 'Tossing dough... <br>';
		echo 'Adding sauce... <br>';
		echo 'Adding toppings... <br>';
		foreach (self::$toppings as $key) {
			echo $key.'<br>';
		}
	}
	//制作时间
	function back(){
		echo 'Back for 25 minutes at 350';
	}
	//披萨切开之后的形状
	function cut(){
		echo 'Cutting the pizza into diagonal slices';
	}
	//披萨的包装盒
	function box(){
		echo 'Place pizza in official pizzaStore box';
	}
	public function getName(){
		return $this->name;
	}
}


 ?>