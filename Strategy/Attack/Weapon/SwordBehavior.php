<?php 
//武器 剑
namespace Attack\Weapon;
use Attack\WeaponBehavior;
class SwordBehavior implements WeaponBehavior{
	function useWeapon(){
		echo "使用武器,剑";
	}
}

 ?>