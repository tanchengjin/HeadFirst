<?php 
namespace store;
//中国披萨商店
class ChinaStore extends \PizzaStore{
	public function createPizza($class){
		//茅台口味
		if(strtolower($class) == 'maotai'){
			//茅台口味披萨
			return new \sort\ChinaStyleMaotaiPizza();
		}
	}
}


 ?>