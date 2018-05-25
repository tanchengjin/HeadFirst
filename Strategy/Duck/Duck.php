<?php 
abstract class Duck{
	//飞行行为
	protected $flybehavior;
	//呱呱叫行为
	protected $quackbehavior;
	//鸭子走路行为
	protected $walkduck;
	function swim(){

	}
	//委托呱呱叫类行为
	function performQuack(){
		$this->quackbehavior->quack();
	}
	//委托飞行类行为
	function performFly(){
		$this->flybehavior->fly();
	}
	//委托走路行为
	function performWalk(){
		$this->walkduck->walk();
	}
	//设置飞行类行为
	function setFlyBehavior(FlyBehavior $flybehavior){
		$this->flybehavior=$flybehavior;
	}
	//设置呱呱叫行为
	function setQuackBehavior(QuackBehavior $quackbehavior){
		$this->quackbehavior=$quackbehavior;
	}
}

 ?>