<?php 
namespace Attack;
abstract class Character{
	protected $weapon;
	//设置攻击武器行为
	function setWeapon(WeaponBehavior $weaopn){
		$this->weapon=$weaopn;
	}
	//委托攻击武器行为
	function performWeapon(){
		$this->weapon->useWeapon();
	}
}

 ?>