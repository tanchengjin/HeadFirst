<?php 
namespace sort;
class ChinaStyleMaotaiPizza extends \Pizza{
	function __construct(){
		$this->name='茅台口味披萨';
		$this->dough='经过七七四十九天揉搓的面团';
		$this->sauce='加入十三香调料';
		parent::$toppings[]='加入茅台酒进行融入香味';
	}
	function back(){
		echo "九九八十一天的制作<br>";
	}
	function cut(){
		echo "将披萨切成三角形<br>";
	}
	function box(){
		echo "精品的披萨包装<br>";
	}
}


 ?>