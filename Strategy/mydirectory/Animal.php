<?php
//|=======================================
//|动物基类 所有动物必须实现此类
//|=======================================
abstract class Animal{
    public $cry;
    public $walk;
    public $fly;
    public $capacity;
//叫 委托行为类
function cry(){
    $this->cry->cry();
}
//走路
function walk()
{
    $this->walk->walk();
}
//飞
function fly(){
    $this->fly->fly();
}
//能力
function capacity(){
    $this->capacity->capacity();
}
//动态行为设置
public function setCry(CryBehavior $cry){
    $this->cry=$cry;
}
//动态行为设置
public function setWalk(WalkBehavior $walk){
    $this->walk=$walk;
}
//动态行为设置
public function setFly(FlyBehavior $Fly){
    $this->fly=$Fly;
}
//动态行为设置
public function setCapacity(CryBehavior $Capacity){
    $this->capacity=$Capacity;
}
}
