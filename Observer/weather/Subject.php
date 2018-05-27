<?php 
//主题接口
interface Subject{
	//注册观察者
	function registerObserver(Observer $observer);
	//移除观察者
	function removeObserver(Observer $observer);
	//通知观察者
	function notifyObserver();

}


 ?>