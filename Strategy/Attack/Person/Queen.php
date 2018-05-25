<?php 
namespace Attack\Person;
use Attack\Character;
use \Attack\Weapon\FistBehavior;
//人物皇后
class Queen extends Character{
	function __construct(){
		//默认拳头攻击
		$this->weapon=new FistBehavior;
	}
	//打架方法
	function fight(){
		echo "人物皇后已经开始攻击";
	}
}


 ?>