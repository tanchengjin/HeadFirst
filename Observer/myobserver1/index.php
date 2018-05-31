<?php 
spl_autoload_register(function($class){
	include $class.'.php';
});
$subject=new System();
$user1=new User1($subject);
$user2=new User2($subject);
$subject->setSystemInfo('系统已更新至1.1.0 请尽快完成更新');
$subject->setSystemInfo('系统已更新至1.2.0 请尽快完成更新');
$subject->setSystemInfo('系统已更新至1.3.0 请尽快完成更新');
$subject->setSystemInfo('系统已更新至1.4.0 请尽快完成更新');
$subject->setSystemInfo('系统已更新至1.5.0 请尽快完成更新');
$subject->setSystemInfo('系统已更新至1.6.0 请尽快完成更新');

 ?>