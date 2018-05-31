<?php
//|==================================
//|七个卡槽遥控器 每个卡槽分别有开和关按钮
//|==================================
class RemoteControl{
    //用于记录7个开和关命令
    public $onCommands=array();
    public $offCommand =array();
    //用于记录最后按下的键是什么（用于撤销按钮)
    public $undoCommand;
    //实例化初始化开与关按钮
    public function __construct()
    {
//       $onCommands=new $this->onCommands[7];
//       $offCommands=new $this->offCommand[7];
//       $noCommand=new NoCommand();
//       for($i=0;$i<7;$i++){
//           $this->onCommands[$i]=$noCommand;
//           $this->offCommands[$i]=$noCommand;
//       }
    }

    /**
     * 通过三个参数设置遥控器卡槽
     * @param int $flot 卡槽位置
     * @param Command $onCommand 卡槽开的命令
     * @param Command $offCommand 卡槽关的命令
     */
    public function setCommand(int $slot,Command $onCommand,Command $offCommand){
        $this->onCommands[$slot]=$onCommand;
        $this->offCommands[$slot]=$offCommand;
    }

    /**
     * 当按下开的按钮时硬件就会负责调用对应方法
     * @param int $slot 遥控器卡槽位置
     */
    public function onButtonWasPushed(int $slot)
    {
        $this->onCommands[$slot]->execute();
        $this->undoCommand=$this->onCommands[$slot];
    }

    /**
     * 当按下关的按钮时硬件就会负责调用对应方法
     * @param int $slot 遥控器卡槽位置
     */
    public function offButtonWasPushed(int $slot)
    {
        $this->offCommands[$slot]->execute();
        $this->undoCommand=$this->offCommands[$slot];
    }
    public function undoButtonWasPushed(){
        $this->undoCommand->undo();
    }
    public function __toString()
    {
        //$string_buffer=new StringBuffer();
        $string_buffer='\n-------------------Remote Control-----------\n<br>';
        for ($i=0;$i<$this->onCommands.length;$i++)
            $string_buffer+="[slot ".$i." ]".$this->onCommands[$i]->getClass()->getName().''.$this->offCommands[$i]->getClass()->getName().'<br>';
        return $string_buffer;
    }

}