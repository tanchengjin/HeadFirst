<?php 
class User1 implements Observer{
	public $subject;
	public function __construct(Subject $subject){
		$this->subject=$subject;
		$this->subject->attach($this);
	}
	public function update($message){
		echo '用户1已接受到通知: '.$message.'<br>';
	}
}


 ?>