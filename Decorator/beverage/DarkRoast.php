<?php 
namespace beverage;
use Beverage;
//饮料代码
class DarkRoast extends Beverage{
	function __construct(){
		$this->description='DarkRoast';
	}
	public function cost(){
		return 0.99;
	}
}


 ?>