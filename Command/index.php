<?php
use lib\Stereo;
use command\stereoOnCommand;
use command\stereoOffCommand;
spl_autoload_register(function($class){
   include $class.'.php';
});
//创建遥控器对象
$remote_control=new \RemoteControl();
//创建音响对象
$stereo=new Stereo('Living Room');
//创建TV对象
$tv=new \lib\Tv();
//创建点灯对象
$light=new \lib\Light();
//灯开启
$light_on=new \command\LightOnCommand($light);
//灯关闭
$light_off=new \command\LightOffCommand($light);
//音响开启对象
$stereo_on=new StereoOnCommand($stereo);
//音响关闭对象
$stereo_off=new StereoOffCommand($stereo);
//tv开启
$tv_on=new \command\TvOnCommand($tv);
//tv关闭
$tv_off=new \command\TvOffCommand($tv);
//创建吊扇对象
$ceiling_fan=new \lib\CeilingFan();
//创建吊扇高速对象
$ceiling_fan_high=new \command\CeilingFanHighCommand($ceiling_fan);
//创建吊扇低速对象
$ceiling_fan_low=new \command\CeilingFanlowCommand($ceiling_fan);
//创建吊扇中速对象
$ceiling_fan_medium=new \command\CeilingFanMediumCommand($ceiling_fan);
//创建吊扇关闭对象
$ceiling_off=new \command\CeilingFanOffCommand($ceiling_fan);
//设置音量在遥控器中的卡槽
$remote_control->setCommand(0,$stereo_on,$stereo_off);
//设置tv在遥控器中的卡槽
$remote_control->setCommand(1,$tv_on,$tv_off);
//设置点灯在遥控器中的卡槽
$remote_control->setCommand(2,$light_on,$light_off);
//设置中速吊扇在遥控器中的卡槽位置
$remote_control->setCommand(3,$ceiling_fan_medium,$ceiling_off);
//设置高速吊扇在遥控器中的卡槽位置
$remote_control->setCommand(4,$ceiling_fan_high,$ceiling_off);
$remote_control->onButtonWasPushed(0);
$remote_control->offButtonWasPushed(0);
$remote_control->onButtonWasPushed(1);
$remote_control->offButtonWasPushed(1);
$remote_control->onButtonWasPushed(2);
$remote_control->offButtonWasPushed(2);
$remote_control->onButtonWasPushed(3);
echo '现在风扇转速为'.$ceiling_fan->getSpeed().'<br>';
$remote_control->offButtonWasPushed(3);
echo '现在风扇转速为'.$ceiling_fan->getSpeed().'<br>';
$remote_control->onButtonWasPushed(4);
echo '现在风扇转速为'.$ceiling_fan->getSpeed().'<br>';
$remote_control->offButtonWasPushed(4);
echo '现在风扇转速为'.$ceiling_fan->getSpeed().'<br>';
//|==============================================================
//|宏命令(将一组命令绑定到遥控器槽中)
//|==============================================================
echo '=============================宏命令on按钮按下===============================<br>';
//创建宏命令
$macro_command_on=new \command\MacroCommand(array($light_on,$tv_on,$stereo_on,$ceiling_fan_high));
$macro_command_off=new command\MacroCommand(array($light_off,$tv_off,$stereo_off,$ceiling_off));
//绑定遥控器按键
$remote_control->setCommand(5,$macro_command_on,$macro_command_off);
//按下按钮
$remote_control->onButtonWasPushed(5);
echo '=============================宏命令off按钮按下===============================<br>';
$remote_control->offButtonWasPushed(5);
echo '=============================按下撤销按钮===============================<br>';
$remote_control->undoButtonWasPushed();
echo '按下撤销按钮后现在风扇转速为'.$ceiling_fan->getSpeed().'<br>';