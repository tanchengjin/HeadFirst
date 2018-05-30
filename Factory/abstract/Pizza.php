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
	//每个披萨在准备时需要用到的原料
	protected $veggies=array();
	protected $cheese;
	protected $pepperoni;
	protected $clam;
	//制作之前的准备工作
	abstract function prepare();
	//制作时间
	function back(){
		echo 'Back for 25 minutes at 350';
	}
	function __toString(){
		echo "激活toString方法!";
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