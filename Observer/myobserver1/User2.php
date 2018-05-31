<?php 
class User2 implements Observer{
	public $subject;
	public function __construct(Subject $subject){
		$this->subject=$subject;
		$subject->attach($this);
	}
	public function update($message){
		echo '用户2已接受到通知: '.$message.'<br>';
	}
}


 ?>