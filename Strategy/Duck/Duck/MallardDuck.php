<?php 
include 'Duck.php';
include 'Behavior/FlyWithWings.php';
include 'Behavior/Quack.php';
include 'Behavior/WalkDuck.php';
class MallardDuck extends Duck{
	/**
	 * 绿头鸭 ,会飞会叫
	 */
	function __construct(){
		//实例化飞行行为类
		$this->flybehavior=new FlyWithWings;
		//实例化呱呱叫行为类
		$this->quackbehavior=new Quacks;
		$this->walkduck=new WalkDuck;
	}
	function display(){
		echo "I'm a real Mallard duck.\n";
		echo "我是一只真正的野鸭/绿头鸭";
	}
}

 ?>