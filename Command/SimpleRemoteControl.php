<?php
//|====================================
//|简单遥控器类
//|====================================
class SimpleRemoteControl{
    public $slot;
    //设置按钮中的卡槽
    public function setRemoteControl(Command $command){
        $this->solt=$command;
    }
    //按钮被按下
    public function buttonWasPressed(){
        $this->solt->execute();
    }
}