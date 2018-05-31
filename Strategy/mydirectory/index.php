<?php
use animal\Dog;
use behavior\FlyQuick;
spl_autoload_register(function($class){
   include $class.'.php';
});

$dog=new Dog();
//$dog->setFly(new FlyQuick());
$dog->fly();
$dog->cry();
$dog->walk();
$dog->capacity();