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
//点灯开启
$light_on=new \command\LightOnCommand($light);
//点灯关闭
$light_off=new \command\LightOffCommand($light);
//音响开启对象
$stereo_on=new StereoOnCommand($stereo);
//音响关闭对象
$stereo_off=new StereoOffCommand($stereo);
//tv开启
$tv_on=new \command\TvOnCommand($tv);
//tv关闭
$tv_off=new \command\TvOffCommand($tv);
//设置音量在遥控器中的卡槽
$remote_control->setCommand(0,$stereo_on,$stereo_off);
//设置tv在遥控器中的卡槽
$remote_control->setCommand(1,$tv_on,$tv_off);
//设置点灯在遥控器中的卡槽
$remote_control->setCommand(2,$light_on,$light_off);
$remote_control->onButtonWasPushed(0);
$remote_control->offButtonWasPushed(0);
$remote_control->onButtonWasPushed(1);
$remote_control->offButtonWasPushed(1);
$remote_control->onButtonWasPushed(2);
$remote_control->offButtonWasPushed(2);
//撤销操作
echo '按下撤销按钮<br>';
$remote_control->undoButtonWasPushed();