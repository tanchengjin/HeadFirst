<?php 
//观察者接口
interface Observer{
	//用于更新
	function update(float $temperature,float $humidity,float $pressure);
}


 ?>