<?php 
use store\NYPizzaStore;
use store\ChinaStore;
spl_autoload_register(function($class){
	include $class.'.php';
});
//使用纽约店
$nystore=new NYPizzaStore();
$pizza=$nystore->orderPizza('cheese');
echo "Ethan ordered a".$pizza->getName().'<br>';

 ?>