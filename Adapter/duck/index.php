<?php
spl_autoload_register(function($class){
    include $class.'.php';
});
//创建鸭子
$duck=new MallardDuck();
//创建火鸡
$turkey=new \WildTurkey();
//创建火鸡适配器
$turkey_adapter=new \adapter\TurkeyAdapter($turkey);
//让火鸡咯咯叫 与飞行
$turkey->gobble();
$turkey->fly();
testDuck($turkey_adapter);

//适配器发生作用将turkey接口适配为duck接口
function testDuck(Duck $duck){
    $duck->quack();
    $duck->fly();
}