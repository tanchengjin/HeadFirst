<?php 
include 'QuackBehavior.php';
//呱呱叫行为类
class Quacks implements QuackBehavior{
	public function quack(){
		echo "Quack.\n";
		echo "鸭子呱呱叫";
	}
}

 ?>