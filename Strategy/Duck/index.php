<?php 
include './Duck/MallardDuck.php';
include './Behavior/FlyRocketpowered.php';
//实例化鸭子
$mallardduck=new MallardDuck();
//调用鸭子呱呱叫
$mallardduck->performQuack();
//调用鸭子飞行
$mallardduck->performFly();
//给鸭子添加火箭飞行事件
$mallardduck->setFlyBehavior(new FlyRocketPowered);
//动态添加后的鸭子飞行事件
$mallardduck->performFly();

 ?>