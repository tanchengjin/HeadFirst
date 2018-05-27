<?php 
//实现调料(装饰者)基类
abstract class CondimentDecorator extends Beverage{
	//java中是抽象方法,php不允许怎么做,此方法在php可有可无
	function getDescription(){
		return $this->description;
	}
}


 ?>