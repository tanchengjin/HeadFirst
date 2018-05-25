<?php 
include 'WalkBehavior.php';
//鸭子走路行为
class WalkDuck implements WalkBehavior{
	public function walk(){
		echo "鸭子已经可以走路";
	}
}

 ?>