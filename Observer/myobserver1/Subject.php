<?php
//主题接口
interface Subject{
	//添加观察者
	public function attach(Observer $observer);
	//移除观察者
	public function detach(Observer $observer);
	//通知观察者
	public function notify();
}