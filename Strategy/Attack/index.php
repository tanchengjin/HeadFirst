<?php 
namespace Attack;
use Attack\Person\Queen;
use Attack\Weapon\Beavior;
use Attack\Weapon\SwordBehavior;
function my_autoload($class){
	$class=str_replace('\\','/',$class);
	$class=substr($class,7);
	include $class.'.php';
}
spl_autoload_register('Attack\my_autoload');
//人物.皇后
$queen=new Queen;
$queen->fight();
//调用攻击方法
$queen->performWeapon();
//强化攻击
$queen->setWeapon(new SwordBehavior);
//调用攻击方法
$queen->performWeapon();


 ?>