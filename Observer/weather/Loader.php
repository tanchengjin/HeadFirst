<?php 
function autoload($class){
	echo $class;
	include $class.'.php';
}


 ?>