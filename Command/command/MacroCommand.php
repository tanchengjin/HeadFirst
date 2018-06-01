<?php
namespace command;
//|====================================
//|宏命令
//|====================================
class MacroCommand implements \Command{
    //用于存储一组命令
    public $commands=array();
    public function __construct($command)
    {
        //将命令存入
        $this->commands=$command;
    }
    public function execute()
    {
        foreach($this->commands as $command){
            $command->execute();
        }
    }
    public function undo()
    {
        foreach($this->commands as $command){
            $command->undo();
        }
    }
}