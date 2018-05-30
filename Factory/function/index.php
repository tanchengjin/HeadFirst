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
//使用中国店
$chinaStore=new ChinaStore();
$pizza=$chinaStore->orderPizza('maotai');
echo "来自第一位客人的披萨:".$pizza->getName().'已经制作完成';

 ?>