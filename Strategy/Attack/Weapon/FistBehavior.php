<?php 
//拳头攻击
namespace Attack\Weapon;
use Attack\Weaponbehavior;
class FistBehavior implements WeaponBehavior{
	public function useWeapon(){
		echo "拳头攻击!";
	}
}

 ?>