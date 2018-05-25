<?php 
include 'FlyBehavior.php';
//翅膀飞行行为
class FlyWithWings implements FlyBehavior{
	public function fly(){
		echo "使用翅膀飞行";
	}
}

 ?>