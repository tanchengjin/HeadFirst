<?php 
//披萨加盟店
class NystylePizzaStore extends PizzaStore{
	//抽象方法重写
	function createPizza($type){
		if($type == 'Chees'){
			return new NystylePizzaStore();
		}
	}
}


 ?>