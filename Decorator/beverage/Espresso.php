<?php 
namespace beverage;
use Beverage;
//饮料代码
class Espresso extends Beverage{
	function __construct(){
		$this->description='Expresso';
	}
	//返回饮料价格
	public function cost(){
		return 1.99;
	}
}


 ?>