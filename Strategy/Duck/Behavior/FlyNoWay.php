<?php 
//不能飞行的行为类
class FlyNoWay implements FlyBehavior{
	public function fly(){
		echo "I can't fly.\n";
		echo "鸭子不能飞行";
	}
}

 ?>