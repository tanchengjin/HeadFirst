<?php 
namespace beverage;
//饮料
class HouseBlend extends Beverage{
	function __construct(){
		$this->description='House Blend coffee';
	}
	function cost(){
		return 0.89;
	}
}


 ?>