<?php
spl_autoload_register(function($class){
    include $class.'.php';
});
use command\LightONCommand;
use command\GarageDoorOpenCommand;
use lib\Light;
use lib\GarageDoor;
//生成遥控器对象
$remote_control=new SimpleRemoteControl();
//灯对象
$light=new Light();
//车库对象
$garage=new GarageDoor();
//创建灯命令对象,将接受者传给他(将厂商定义好的对象传给它)
$light_on=new LightOnCommand($light);
//创建车库命令对象,将接受者传给他(将厂商定义好的对象传给它)
$garage_command=new GarageDoorOpenCommand($garage);
//设置遥控器灯卡槽
$remote_control->setRemoteControl($light_on);
//按下按钮
$remote_control->buttonWasPressed();
//设置遥控器打开车门库卡槽
$remote_control->setRemoteControl($garage_command);
//按下按钮
$remote_control->buttonWasPressed();